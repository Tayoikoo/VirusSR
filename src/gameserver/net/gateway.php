<?php

namespace VirusSR\gameserver\net;

use React\Socket\SocketServer;
use React\EventLoop\Loop;
use React\Socket\ConnectionInterface;
use VirusSR\common\Logger;
class Connection
{
    private $connection;
    private $clientAddr;
    private $isGateway;

    public function __construct(ConnectionInterface $connection, $clientAddr, $isGateway = true)
    {
        $this->connection = $connection;
        $this->clientAddr = $clientAddr;
        $this->isGateway = $isGateway;
    }

    public function handle()
    {
        $this->connection->on('data', function () {
            Logger::log_gameserver("Received data from {$this->clientAddr}");
        });

        $this->connection->on('close', function () {
            Logger::log_gameserver("Connection closed with {$this->clientAddr}");
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
            Logger::log_gameserver("Accepted connection from $clientAddr");

            $session = new PlayerSession($connection); // Pass allocator if necessary
            $session->run();

            $connection->on('close', function () use ($session) {
                $session->stop();
            });
                        
            // $conn = new Connection($connection, $clientAddr, true);
            // $conn->handle();
        });

        $loop->run();
    }
}