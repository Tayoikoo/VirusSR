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
            Logger::log_gameserver("Accepted connection from {$clientAddr}");

            $session = new PlayerSession($connection);

            $this->registerHandlers($session);

            $session->run();

            $connection->on('close', function () use ($session) {
                $session->stop();
            });
        });

        $loop->run();
    }

    private function registerHandlers(PlayerSession $session): void
    {
        $session->registerHandler('CmdPlayerGetTokenCsReq', function (ConnectionInterface $socket, Message $request) use ($session) {
   
            $handler = new \VirusSR\gameserver\net\handlers\OnPlayerGetToken($session);
            $handler->handle($socket, $request);
        });
    
    }
}