<?php
namespace VirusSR\gameserver\net\protocol;

use React\Socket\ConnectionInterface;

class ConnectionReader extends Reader
{
    private $connection;

    public function __construct(ConnectionInterface $connection)
    {
        parent::__construct('');
        $this->connection = $connection;

        $this->connection->on('data', function ($data) {
            $this->setBuffer($this->getBuffer() . $data);
        });
    }

    public function read(int $length): string
    {
        $result = parent::read($length);
        return $result;
    }

    public function close(): void
    {
        $this->connection->close();
    }
}
