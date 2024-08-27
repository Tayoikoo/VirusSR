<?php

namespace VirusSR\gameserver\net\protocol;

class Reader
{
    private $data;
    private $position;

    public function __construct(string $data)
    {
        $this->data = $data;
        $this->position = 0;
    }

    private function read(int $length): ?string
    {
        if ($this->position + $length > strlen($this->data)) {
            return null; // Not enough data
        }

        $result = substr($this->data, $this->position, $length);
        $this->position += $length;
        return $result;
    }

    private function write(string $data): void
    {
        $this->data .= $data;
        $this->position += strlen($data);
    }

    public function readI16b(): ?int
    {
        $data = $this->read(2);
        return $data === null ? null : unpack('n', $data)[1];
    }

    public function writeI16b(int $value): void
    {
        $this->write(pack('n', $value));
    }

    public function readU16b(): ?int
    {
        $data = $this->read(2);
        return $data === null ? null : unpack('n', $data)[1];
    }

    public function writeU16b(int $value): void
    {
        $this->write(pack('n', $value));
    }

    public function readI32b(): ?int
    {
        $data = $this->read(4);
        return $data === null ? null : unpack('N', $data)[1];
    }

    public function writeI32b(int $value): void
    {
        $this->write(pack('N', $value));
    }

    public function readU32b(): ?int
    {
        $data = $this->read(4);
        return $data === null ? null : unpack('N', $data)[1];
    }

    public function writeU32b(int $value): void
    {
        $this->write(pack('N', $value));
    }

    public function getBuffer(): string
    {
        return $this->data;
    }

    public function setBuffer(string $data): void
    {
        $this->data = $data;
        $this->position = 0;
    }
}
