<?php

namespace VirusSR\gameserver\net;

use React\Socket\ConnectionInterface;
use Google\Protobuf\Internal\Message;
use VirusSR\common\Logger;
use VirusSR\gameserver\net\handlers\HandlerInterface;
use VirusSR\gameserver\net\handlers;

class NetPacket
{
    const HEAD_MAGIC = 0x9D74C714;
    const TAIL_MAGIC = 0xD7A152C8;

    public $cmd_type;
    public $head;
    public $body;

    public function __construct($cmd_type, $head, $body)
    {
        $this->cmd_type = $cmd_type;
        $this->head = $head;
        $this->body = $body;
    }

    /**
     * Convert the NetPacket into binary data to be sent over the network.
     *
     * @return string The binary packet.
     */
    public static function toBytes(NetPacket $packet): string
    {
        $out = '';
        $out .= pack('N', self::HEAD_MAGIC);  // Header magic
        $out .= pack('n', $packet->cmd_type);  // Command type (2 bytes)
        $out .= pack('n', strlen($packet->head));  // Head length (2 bytes)
        $out .= pack('N', strlen($packet->body));  // Body length (4 bytes)
        $out .= $packet->head;  // Head data
        $out .= $packet->body;  // Body data
        $out .= pack('N', self::TAIL_MAGIC);  // Tail magic
        return $out;
    }

    /**
     * Read and parse a NetPacket from the incoming data stream.
     *
     * @param string $data The incoming binary data.
     * @return NetPacket The parsed NetPacket object.
     */
    public static function fromBytes($data): ?NetPacket
    {
        // Ensure the data starts with the correct header magic
        $head_magic = unpack('N', substr($data, 0, 4))[1];
        if ($head_magic !== self::HEAD_MAGIC) {
            Logger::log_gameserver("Invalid HEAD_MAGIC");
            return null;
        }

        // Read command type
        $cmd_type = unpack('n', substr($data, 4, 2))[1];

        // Read head and body lengths
        $head_length = unpack('n', substr($data, 6, 2))[1];
        $body_length = unpack('N', substr($data, 8, 4))[1];

        // Read the head and body data
        $head = substr($data, 12, $head_length);
        $body = substr($data, 12 + $head_length, $body_length);

        // Ensure the data ends with the correct tail magic
        $tail_magic = unpack('N', substr($data, 12 + $head_length + $body_length, 4))[1];
        if ($tail_magic !== self::TAIL_MAGIC) {
            Logger::log_gameserver("Invalid TAIL_MAGIC");
            return null;
        }

        // Return a new NetPacket object
        return new NetPacket($cmd_type, $head, $body);
    }
}

class PlayerSession
{
    private $connection;
    private $handlers = [];

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;
        $this->initializeHandlers();
    }

    /**
     * Initializes the available command handlers.
     */
    private function initializeHandlers()
    {
        $this->handlers = [
            'CmdPlayerGetTokenCsReq' => new handlers\OnPlayerGetToken($this),
        ];
    }

    /**
     * Processes the incoming data and routes it to the appropriate handler.
     *
     * @param string $data The incoming data from the client.
     */
    public function processRequest($data)
    {
        // Parse the data into a NetPacket object
        $packet = NetPacket::fromBytes($data);
    
        if ($packet === null) {
            Logger::log_gameserver("Failed to parse packet.");
            return;
        }
    
        // Extract the command from the packet
        $command = $this->extractCommand($packet);
    
        // Handle the command if a handler exists
        if (isset($this->handlers[$command])) {
            $handler = $this->handlers[$command];
    
            // Decode the body of the NetPacket into the appropriate Protobuf message
            $protobufMessage = $this->decodeProtobufMessage($packet);
    
            // Pass the Protobuf message to the handler
            if ($protobufMessage !== null) {
                $handler->handle($this->connection, $protobufMessage);
            } else {
                Logger::log_gameserver("Failed to decode Protobuf message.");
            }
        } else {
            Logger::log_gameserver("No handler found for command: {$command}");
        }
    }
    
    private function decodeProtobufMessage(NetPacket $packet)
    {
        // Check the cmd_type and decode the body into the correct Protobuf message
        switch ($packet->cmd_type) {
            case cmd_id::CMD_PLAYER_GET_TOKEN_CS_REQ:
                $message = new \PlayerGetTokenCsReq();
                $message->mergeFromString($packet->body);  // Assuming the body contains the serialized Protobuf message
                return $message;
            // Add other cases for different cmd_types here
            default:
                Logger::log_gameserver("No Protobuf message class found for cmd_type: {$packet->cmd_type}");
                return null;
        }
    }
    
    /**
     * Extracts the command from the NetPacket.
     *
     * @param NetPacket $packet The parsed packet.
     * @return string The extracted command.
     */
    private function extractCommand(NetPacket $packet)
    {
        // Map cmd_type to command names using constants from cmd_id
        $commandMap = [
            cmd_id::CMD_PLAYER_GET_TOKEN_CS_REQ => 'CmdPlayerGetTokenCsReq',
            cmd_id::CMD_PLAYER_LOGIN_CS_REQ => 'CmdPlayerLoginCsReq',
            // Add more mappings as necessary
        ];
    
        // Check if the cmd_type exists in the map
        if (array_key_exists($packet->cmd_type, $commandMap)) {
            return $commandMap[$packet->cmd_type];  // Return the corresponding command name
        } else {
            Logger::log_gameserver("No command found for cmd_type: {$packet->cmd_type}");
            return null;  // Default command when no match is found
        }
    }
    

    /**
     * Sends a packet over the connection.
     *
     * @param ConnectionInterface $socket The connection to send the packet over.
     * @param int $cmdId The command ID.
     * @param Message $response The Protobuf response message.
     * @return void
     */
    public function sendPacket(ConnectionInterface $socket, $cmdId, Message $response)
    {
        // Create a NetPacket
        $packet = new NetPacket($cmdId, [], $response->serializeToString());  // Correct instantiation of NetPacket
    
        // Send the packet (including header and body)
        $packetBytes = $this->encodeNetPacket($packet);
        $socket->write($packetBytes);
    
        Logger::log_gameserver("Sent packet with cmdId {$cmdId}.");
    }

    /**
     * Encodes the NetPacket to bytes.
     *
     * @param NetPacket $packet The NetPacket to encode.
     * @return string The encoded packet.
     */
    private function encodeNetPacket(NetPacket $packet)
    {
        // Construct the packet bytes with the header and body
        $out = '';
        $out .= pack('N', 0x9D74C714);  // HEAD_MAGIC (u32)
        $out .= pack('n', $packet->cmd_type);  // cmd_type (u16)
        $out .= pack('n', count($packet->head));  // head length (u16)
        $out .= pack('N', strlen($packet->body));  // body length (u32)
        $out .= implode('', $packet->head);  // head data (array of bytes)
        $out .= $packet->body;  // body data (Protobuf serialized message)
        $out .= pack('N', 0xD7A152C8);  // TAIL_MAGIC (u32)

        return $out;
    }    

    /**
     * Stops the session and closes the connection.
     */
    public function stop()
    {
        Logger::log_gameserver("Closing session and connection.");
        $this->connection->close();
    }
}