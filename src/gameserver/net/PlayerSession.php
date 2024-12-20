<?php

namespace VirusSR\gameserver\net;

use React\Socket\ConnectionInterface;
use Google\Protobuf\Internal\Message;
use VirusSR\common\Logger;
use VirusSR\gameserver\net\handlers\HandlerInterface;

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
    private $commandMap = [];

    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;
        $this->initializeHandlers();
        $this->initializeCommandMap();
    }

    /**
     * Initializes the available command handlers.
     */
    private function initializeHandlers()
    {
        $this->handlers = [
            'CmdPlayerGetTokenCsReq' => new handlers\auth\OnPlayerGetToken($this),
            'CmdPlayerLoginCsReq' => new handlers\auth\OnPlayerLoginRequest($this),
            'CmdPlayerLoginFinishCsReq' => new handlers\auth\OnPlayerLoginFinish($this),
            'CmdPlayerHeartBeatCsReq' => new handlers\player\OnPlayerHeartBeat($this),
            'CmdGetBasicInfoCsReq' => new handlers\player\OnGetBasicInfo($this),
            'CmdGetMissionStatusCsReq' => new handlers\mission\OnGetMissionStatus($this),
            'CmdOnGetAvatarDataCsReq' => new handlers\avatar\OnGetAvatarData($this),
            'CmdGetMultiPathAvatarInfoCsReq' => new handlers\avatar\OnGetMultiPathAvatar($this),
            'CmdGetBagCsReq' => new handlers\item\OnGetBag($this),
            'CmdGetAllLineupDataCsReq' => new handlers\lineup\OnGetAllLineupData($this),
            'CmdGetCurLineupDataCsReq' => new handlers\lineup\OnGetCurLineupData($this),
            'CmdOnGetCurSceneInfoCsReq' => new handlers\scene\OnGetCurSceneInfo($this),
        ];
    }

    /**
     * Initialize the command map dynamically by reading constants from cmd_id class.
     */
    private function initializeCommandMap()
    {
        // Use ReflectionClass to get all constants from cmd_id class
        $reflection = new \ReflectionClass(cmd_id::class);
        $cmdConstants = $reflection->getConstants();

        // Map the constant value to the command name
        foreach ($cmdConstants as $name => $value) {
            // Skip constants that are not command types
            if (strpos($name, 'CMD_') === 0) {
                $commandName = $this->convertConstantToCommandName($name);
                $this->commandMap[$value] = $commandName;
            }
        }
    }

    /**
     * Convert a constant name (e.g., CMD_PLAYER_HEART_BEAT_SC_RSP) to a command name
     * (e.g., CmdPlayerHeartBeatScRsp).
     */
    private function convertConstantToCommandName($constantName)
    {
        // Remove the 'CMD_' prefix
        $nameWithoutCmd = substr($constantName, 4);
    
        // Split the string by underscores
        $parts = explode('_', $nameWithoutCmd);
    
        // Capitalize each part after the first
        $commandName = ucfirst(strtolower($parts[0])); // First part in lowercase, then capitalize the rest
        for ($i = 1; $i < count($parts); $i++) {
            $commandName .= ucfirst(strtolower($parts[$i])); // Capitalize the rest
        }
    
        return $commandName;
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
        }
    }
    
    
    private function decodeProtobufMessage(NetPacket $packet)
    {
        // Check the cmd_type and decode the body into the correct Protobuf message
        switch ($packet->cmd_type) {
            case cmd_id::CMD_PLAYER_GET_TOKEN_CS_REQ:
                $message = new \PlayerGetTokenCsReq();
                $message->mergeFromString($packet->body);
                return $message;
            case cmd_id::CMD_PLAYER_LOGIN_CS_REQ:
                $message = new \PlayerLoginCsReq();
                $message->mergeFromString($packet->body);
                return $message;
            case cmd_id::CMD_PLAYER_LOGIN_FINISH_CS_REQ:
                $message = new \PlayerLoginFinishCsReq();
                $message->mergeFromString($packet->body);
                return $message;
            case cmd_id::CMD_PLAYER_HEART_BEAT_CS_REQ:
                $message = new \PlayerHeartBeatCsReq();
                $message->mergeFromString($packet->body);
                return $message;
            case cmd_id::CMD_GET_MISSION_STATUS_CS_REQ:
                $message = new \GetMissionStatusCsReq();
                $message->mergeFromString($packet->body);
                return $message;
            case cmd_id::CMD_GET_AVATAR_DATA_CS_REQ:
                $message = new \GetAvatarDataCsReq();
                $message->mergeFromString($packet->body);
                return $message;
            case cmd_id::CMD_GET_BASIC_INFO_CS_REQ:
                $message = new \GetBasicInfoCsReq();
                $message->mergeFromString($packet->body);
                return $message;
            case cmd_id::CMD_GET_MULTI_PATH_AVATAR_INFO_CS_REQ:
                $message = new \GetMultiPathAvatarInfoCsReq();
                $message->mergeFromString($packet->body);
                return $message;
            case cmd_id::CMD_GET_BAG_CS_REQ:
                $message = new \GetBagCsReq();
                $message->mergeFromString($packet->body);
                return $message;
            case cmd_id::CMD_GET_ALL_LINEUP_DATA_CS_REQ:
                $message = new \GetAllLineupDataCsReq();
                $message->mergeFromString($packet->body);
                return $message;
            case cmd_id::CMD_GET_CUR_LINEUP_DATA_CS_REQ:
                $message = new \GetCurLineupDataCsReq();
                $message->mergeFromString($packet->body);
                return $message;
            case cmd_id::CMD_GET_CUR_SCENE_INFO_CS_REQ:
                $message = new \GetCurSceneInfoCsReq();
                $message->mergeFromString($packet->body);
                return $message;
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
            cmd_id::CMD_PLAYER_LOGIN_FINISH_CS_REQ => 'CmdPlayerLoginFinishCsReq',
            cmd_id::CMD_PLAYER_HEART_BEAT_CS_REQ => 'CmdPlayerHeartBeatCsReq',
            cmd_id::CMD_GET_MISSION_STATUS_CS_REQ => 'CmdGetMissionStatusCsReq',
            cmd_id::CMD_GET_AVATAR_DATA_CS_REQ => 'CmdOnGetAvatarDataCsReq',
            cmd_id::CMD_GET_BASIC_INFO_CS_REQ => 'CmdGetBasicInfoCsReq',
            cmd_id::CMD_GET_MULTI_PATH_AVATAR_INFO_CS_REQ => 'CmdGetMultiPathAvatarInfoCsReq',
            cmd_id::CMD_GET_BAG_CS_REQ => 'CmdGetBagCsReq',
            cmd_id::CMD_GET_ALL_LINEUP_DATA_CS_REQ => 'CmdGetAllLineupDataCsReq',
            cmd_id::CMD_GET_CUR_LINEUP_DATA_CS_REQ => 'CmdGetCurLineupDataCsReq',
            cmd_id::CMD_GET_CUR_SCENE_INFO_CS_REQ => 'CmdOnGetCurSceneInfoCsReq',
        ];
    
        // Check if the cmd_type exists in the map
        if (array_key_exists($packet->cmd_type, $commandMap)) {
            return $commandMap[$packet->cmd_type];  // Return the corresponding command name
        } else {
            return null;  // Default command when no match is found
        }
    }
    
    /**
     * Sends a dummy packet over the connection when no handler is found.
     *
     * @param int $cmd_type The command type.
     * @return void
     */
    public function sendDummy($cmd_type)
    {
        $packetName = isset($this->commandMap[$cmd_type]) ? $this->commandMap[$cmd_type] : 'UnknownPacket';
        // Create a dummy packet
        $dummyPacket = new NetPacket($cmd_type, [], '');  // Empty head and body for the dummy packet

        // Encode the packet into binary format
        $packetBytes = $this->encodeNetPacket($dummyPacket);

        // Send the dummy packet over the connection
        $this->connection->write($packetBytes);

        Logger::dummy("Send dummy {$packetName} cmd_type: {$cmd_type}.");
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
        // Retrieve the packet name from the command map
        $packetName = isset($this->commandMap[$cmdId]) ? $this->commandMap[$cmdId] : 'UnknownPacket';
        
        // Create a NetPacket
        $packet = new NetPacket($cmdId, [], $response->serializeToString());
        
        // Send the packet (including header and body)
        $packetBytes = $this->encodeNetPacket($packet);
        $socket->write($packetBytes);
        
        Logger::log_packet("Sending packet: {$packetName} with cmdId {$cmdId}.");
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