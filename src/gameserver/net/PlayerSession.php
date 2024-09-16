<?php

namespace VirusSR\gameserver\net;

use VirusSR\common\Logger;
use VirusSR\FolderConstants;
use React\Socket\ConnectionInterface;
use Google\Protobuf\Internal\Message;
use VirusSR\gameserver\net\handlers;

class PlayerSession
{
    private $clientSocket;
    private $playerInfo;
    private $context;
    private $running;
    private static $cmdIdMap = [];
    private $handlers = [];

    public function __construct(ConnectionInterface $clientSocket)
    {
        $this->clientSocket = $clientSocket;
        $this->running = true;
    }

    public function run(): void
    {
        $this->clientSocket->on('data', function ($data) {
            $this->onMessage($data);
        });
    }

    private function onMessage($data): void
    {
        try {
            Logger::log_gameserver("Processing data: " . bin2hex($data));
            $packet = $this->decodePacket($data);
            $cmdIdName = $this->getCommandNameFromId($packet['cmdId']);
    
            if ($cmdIdName !== null) {
                Logger::log_gameserver("Received command: $cmdIdName");
                $proto = self::getProto($cmdIdName);
                if ($proto !== null) {
                    try {
                        $proto->mergeFromString($packet['body']);
                    } catch (\Exception $e) {
                        Logger::log_gameserver("Error parsing protobuf message: " . $e->getMessage());
                    }
    
                    if (isset($this->handlers[$cmdIdName])) {
                        $handler = $this->handlers[$cmdIdName];
                        if (is_callable($handler)) {
                            call_user_func($handler, $this->clientSocket, $proto);
                        } else {
                            Logger::log_gameserver("Handler for $cmdIdName is not callable.");
                        }
                    } else {
                        Logger::log_gameserver("No handler found for command: $cmdIdName");
                    }
                } else {
                    Logger::log_gameserver("No Proto found for command: $cmdIdName");
                }
            } else {
                Logger::log_gameserver("Command ID not found: {$packet['cmdId']}");
            }
        } catch (\Exception $e) {
            Logger::log_gameserver("Error handling data from socket: " . $e->getMessage());
        }
    }
 
    public function stop(): void
    {
        $this->running = false;
        $clientAddr = $this->clientSocket->getRemoteAddress();
        Logger::log_gameserver("Session stopped for {$clientAddr}");
    }

    public function registerHandler(string $cmdName, callable $handler): void
    {
        $this->handlers[$cmdName] = $handler;
    }

    private function decodePacket(string $buf): array
    {
        $cmdId = unpack('n', substr($buf, 4, 2))[1];
        $headLen = unpack('n', substr($buf, 6, 2))[1];
        $bodyLen = unpack('N', substr($buf, 8, 4))[1];
        $body = substr($buf, 12 + $headLen, $bodyLen);
        return ['body' => $body, 'cmdId' => $cmdId];
    }

    public static function loadCmdIdMap(): void
    {
        $jsonFilePath = FolderConstants::DATA_FOLDER . '/cmd_id.json';
        if (!file_exists($jsonFilePath)) {
            Logger::log_gameserver("Command ID JSON file not found.");
            return;
        }
        $jsonContent = file_get_contents($jsonFilePath);
        $parsedData = json_decode($jsonContent, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            self::$cmdIdMap = $parsedData;
            Logger::log_gameserver("Loaded command ID map from JSON");
        } else {
            Logger::log_gameserver("Failed to parse command ID JSON: " . json_last_error_msg());
        }
    }

    public function sendDummy(int $cmdType): void
    {
        $this->clientSocket->write(pack('n', $cmdType));
    }

    public function encodePacket(int $cmdId, string $data): string
    {
        $bufferLength = 12 + strlen($data) + 4;
        $buffer = pack('NnN', 0x9D74C714, $cmdId, 0);
        $buffer .= pack('N', strlen($data));
        $buffer .= $data;
        $buffer .= pack('N', 0xd7a152c8);
        return $buffer;
    }

    public function getCommandIdFromName(string $commandName): ?int
    {
        $cmdId = array_search($commandName, self::$cmdIdMap, true);
        return $cmdId !== false ? $cmdId : null;
    }
    
    public function getCommandNameFromId(int $cmdId): ?string
    {
        return self::$cmdIdMap[$cmdId] ?? null;
    }

    public function sendPacket(ConnectionInterface $socket, int $cmdId, Message $data): void
    {
        $commandName = $this->getCommandNameFromId($cmdId);
        if ($commandName === null) {
            Logger::log_packet("Couldn't find command name for cmdId: $cmdId\n");
            return;
        }
    
        Logger::log_packet("Sending $commandName\n");
    
        $proto = self::getProto($commandName);
        if ($proto === null) {
            Logger::log_packet("Couldn't find proto for $commandName\n");
            return;
        }
    
        $encoded = $data->serializeToString();
        $buffer = $this->encodePacket($cmdId, $encoded);
        $socket->write($buffer);
    }
    

    private static function getProto(string $cmdIdName): ?Message
    {
        $protoMap = [
            'CmdPlayerGetTokenCsReq' => \PlayerGetTokenCsReq::class,
            'CmdPlayerGetTokenScRsp' => \PlayerGetTokenScRsp::class,
        ];
    
        if (isset($protoMap[$cmdIdName])) {
            $protoClass = $protoMap[$cmdIdName];
            return new $protoClass();
        }
    
        return null;
    }    
}
