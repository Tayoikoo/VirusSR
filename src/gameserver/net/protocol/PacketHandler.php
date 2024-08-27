<?php

namespace VirusSR\gameserver\net\protocol;


class Packet
{
    public $cmd;
    public $head;
    public $body;

    public function __construct(int $cmd, string $head, string $body)
    {
        $this->cmd = $cmd;
        $this->head = $head;
        $this->body = $body;
    }
}

class NetResult
{
    public $packets;

    public function __construct(array $packets)
    {
        $this->packets = $packets;
    }
}

class PacketHandler
{
    const HEAD_MAGIC = 0x9D74C714;
    const TAIL_MAGIC = 0xD7A152C8;

    public static function read(Reader $reader): ?Packet
    {
        $headMagic = $reader->readU32b();
        if ($headMagic === null || $headMagic !== self::HEAD_MAGIC) {
            return null; // Not enough data or invalid head magic
        }

        $cmd = $reader->readU16b();
        $headSize = $reader->readU16b();
        $bodySize = $reader->readU32b();
        $head = $reader->read($headSize);
        $body = $reader->read($bodySize);
        $tailMagic = $reader->readU32b();
        
        if ($tailMagic === null || $tailMagic !== self::TAIL_MAGIC) {
            return null; // Not enough data or invalid tail magic
        }

        return new Packet($cmd, $head, $body);
    }

    public static function write(Reader $reader, Packet $packet): void
    {
        $reader->writeU32b(self::HEAD_MAGIC);
        $reader->writeU16b($packet->cmd);
        $reader->writeU16b(strlen($packet->head));
        $reader->writeU32b(strlen($packet->body));
        $reader->write($packet->head);
        $reader->write($packet->body);
        $reader->writeU32b(self::TAIL_MAGIC);
    }

    public static function encode(int $cmd_id, string $head, string $body): string
    {
        $head_len = strlen($head);
        $body_len = strlen($body);
        $total_len = 16 + $head_len + $body_len;

        $buffer = str_repeat("\0", $total_len);

        // Write head_magic
        $buffer = substr_replace($buffer, pack('N', self::HEAD_MAGIC), 0, 4);

        // Write cmd_id
        $buffer = substr_replace($buffer, pack('n', $cmd_id), 4, 2);

        // Write head size
        $buffer = substr_replace($buffer, pack('n', $head_len), 6, 2);

        // Write body size
        $buffer = substr_replace($buffer, pack('N', $body_len), 8, 4);

        // Copy head content
        $buffer = substr_replace($buffer, $head, 12, $head_len);

        // Copy body content
        $buffer = substr_replace($buffer, $body, 12 + $head_len, $body_len);

        // Write tail_magic
        $buffer = substr_replace($buffer, pack('N', self::TAIL_MAGIC), 12 + $head_len + $body_len, 4);

        return $buffer;
    }

    public static function pack(int $cmd, callable $encoder, $data): NetResult
    {
        $buffer = $encoder($data);
        return new NetResult([new Packet($cmd, '', $buffer)]);
    }

    public static function merge(NetResult $lhs, NetResult $rhs): NetResult
    {
        return new NetResult(array_merge($lhs->packets, $rhs->packets));
    }

    public static function empty(int $cmd): NetResult
    {
        return new NetResult([new Packet($cmd, '', '')]);
    }
}
