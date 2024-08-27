<?php

namespace VirusSR\gameserver\net;

use VirusSR\common\Logger;
use VirusSR\gameserver\game\PlayerInfo;  
use VirusSR\gameserver\game\GameContext; 
use React\Socket\ConnectionInterface;

class PlayerSession
{
    private $clientSocket;
    private $playerInfo;
    private $context;
    private $running;

    public function __construct(ConnectionInterface $clientSocket)
    {
        // Initialize PlayerInfo
        // $this->playerInfo = new PlayerInfo();  // Adjust if needed to initialize correctly

        // // Initialize GameContext with PlayerInfo
        // $this->context = new GameContext($this->playerInfo);  // Adjust if needed

        // Store the client socket
        $this->clientSocket = $clientSocket;

        // Set running state to true
        $this->running = true;
    }

    public function run(): void
    {
        $this->clientSocket->on('data', function ($data) {
            // Handle incoming data
            $this->onMessage($data);
        });

        $this->clientSocket->on('close', function () {
            // Handle connection closure
            $this->stop();
        });

        // Additional loop or handling code could go here
    }

    public function stop(): void
    {
        $this->running = false;
        $clientAddr = $this->clientSocket->getRemoteAddress();
        Logger::log_gameserver("Session stopped for {$clientAddr}");
    }

    private function onMessage($data)
    {
        // Parse and process the data here
        Logger::log_gameserver("Processing data: " . bin2hex($data));
        
        // Example: send a response
        $this->sendDummy(391);  // Example command type
    }

    public function sendDummy(int $cmdType): void
    {
        // Example of sending a dummy packet
        $this->clientSocket->write(pack('n', $cmdType)); // Writing a 16-bit unsigned integer (network byte order)
    }
}
