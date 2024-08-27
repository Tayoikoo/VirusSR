<?php
namespace VirusSR\gameserver\net;

use VirusSR\gameserver\net\protocol\PacketHandler;
use VirusSR\gameserver\net\protocol\ConnectionReader;
use VirusSR\common\Logger;

class session
{
    private $address;
    private $connection;
    private $allocator;
    private $running;

    const HEAD_MAGIC = 0x9D74C714;
    const TAIL_MAGIC = 0xD7A152C8;

    public function __construct($address, $connection, $allocator)
    {
        $this->address = $address;
        $this->connection = $connection;
        $this->allocator = $allocator;
        $this->running = true;
    }

    public function run(): void
    {
        $reader = new ConnectionReader($this->connection);

        try {
            while ($this->running) {
                $packet = PacketHandler::read($reader);
                if ($packet === null) {
                    $this->stop();
                }
            }
        } finally {
            $reader->close();
        }
    }

    public function stop(): void
    {
        $this->running = false;
        $clientAddr = $this->connection->getRemoteAddress();
        Logger::log_gameserver("Connection closed from $clientAddr");
    }

    public function read($data)
    {
        $clientAddr = $this->connection->getRemoteAddress();
        $stream = $data;
        $offset = 0;

        // Read and validate HEAD_MAGIC
        $headMagic = $this->read_u32($stream, $offset);
        if ($headMagic !== self::HEAD_MAGIC) {
            Logger::log_gameserver("Invalid HEAD_MAGIC from {$clientAddr}");
            return;
        }

        $cmdType = $this->read_u16($stream, $offset);
        $headLength = $this->read_u16($stream, $offset);
        $bodyLength = $this->read_u32($stream, $offset);

        $head = substr($stream, $offset, $headLength);
        $offset += $headLength;

        $body = substr($stream, $offset, $bodyLength);
        $offset += $bodyLength;

        $tailMagic = $this->read_u32($stream, $offset);
        if ($tailMagic !== self::TAIL_MAGIC) {
            Logger::log_gameserver("Invalid TAIL_MAGIC from {$clientAddr}");
            return;
        }

        Logger::log_gameserver("Processed packet from {$clientAddr} with cmdType: $cmdType");
    }

    private function read_u16($stream, &$offset)
    {
        $value = unpack('n', substr($stream, $offset, 2))[1]; // 'n' for big-endian unsigned 16-bit
        $offset += 2;
        return $value;
    }

    private function read_u32($stream, &$offset)
    {
        $value = unpack('N', substr($stream, $offset, 4))[1]; // 'N' for big-endian unsigned 32-bit
        $offset += 4;
        return $value;
    }
}
