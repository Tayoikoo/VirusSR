<?php

namespace VirusSR\gameserver\net;

use React\Socket\SocketServer;
use React\EventLoop\Loop;
use React\Socket\ConnectionInterface;
use Google\Protobuf\Internal\Message;
use VirusSR\common\Logger;
class Connection
{
    private $connection;
    private $clientAddr;
    private $session;

    public function __construct(ConnectionInterface $connection, $clientAddr)
    {
        $this->connection = $connection;
        $this->clientAddr = $clientAddr;
        $this->session = new PlayerSession($connection);
    }

    public function handle()
    {
        Logger::log_gameserver("Connection established with {$this->clientAddr}");

        $this->connection->on('data', function ($data) {
            $toHex = bin2hex($data);
            // Logger::log_gameserver("Received data from {$this->clientAddr}: {$toHex}");
            $this->session->processIncomingData($data);
        });

        $this->connection->on('close', function () {
            Logger::log_gameserver("Connection closed with {$this->clientAddr}");
            $this->session->stop();
        });
    }
}
class Gateway
{
    private $host;
    private $port;

    public function __construct($host, $port)
    {
        $this->host = $host;
        $this->port = $port;
    }

    public function listen()
    {
        $loop = Loop::get();
        $server = new SocketServer("{$this->host}:{$this->port}", [], $loop);

        Logger::log_gameserver("Game Server Running at {$this->host}:{$this->port}");

        $server->on('connection', function (ConnectionInterface $connection) {
            $clientAddr = $connection->getRemoteAddress();
            Logger::log_gameserver("Accepted connection from {$clientAddr}");

            $this->handleConnection($connection);
        });

        $loop->run();
    }

    private function handleConnection(ConnectionInterface $connection)
    {
        $clientAddr = $connection->getRemoteAddress();
        $conn = new Connection($connection, $clientAddr);
        $conn->handle();
    }
}