<?php

namespace VirusSR\gameserver\net\handlers\auth;

use Google\Protobuf\Internal\Message;
use VirusSR\gameserver\net\cmd_id;
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

        // Send the response packet using PlayerSession's method
        $this->session->sendPacket($socket, cmd_id::CMD_PLAYER_GET_TOKEN_SC_RSP, $response);
        // $this->session->sendDummy($cmdId);
    }
}
