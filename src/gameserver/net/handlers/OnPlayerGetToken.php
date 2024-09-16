<?php

namespace VirusSR\gameserver\net\handlers;

use Google\Protobuf\Internal\Message;
use VirusSR\gameserver\net\PlayerSession;
use React\Socket\ConnectionInterface;
use PlayerGetTokenScRsp;

class OnPlayerGetToken
{
    public function __construct(private PlayerSession $session) {}

    public function handle(ConnectionInterface $socket, Message $request): void
    {
        // Create the response message
        $response = new PlayerGetTokenScRsp();
        $response->setUid(1010);
        $response->setMsg("OK");
        $response->setRetcode(0);

        // Get command ID for PlayerGetTokenScRsp
        $cmdId = $this->session->getCommandIdFromName('CmdPlayerGetTokenScRsp'); // Ensure this method returns the correct cmdId

        if ($cmdId === null) {
            echo "Command ID not found for PlayerGetTokenScRsp\n";
            return;
        }

        // Send the response packet using PlayerSession's method
        $this->session->sendPacket($socket, $cmdId, $response);
    }
}
