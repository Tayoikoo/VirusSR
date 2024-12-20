<?php

namespace VirusSR\gameserver\net\handlers\auth;

use Google\Protobuf\Internal\Message;
use VirusSR\gameserver\net\cmd_id;
use VirusSR\gameserver\net\PlayerSession;
use React\Socket\ConnectionInterface;

use PlayerLoginFinishScRsp;

class OnPlayerLoginFinish
{
    public function __construct(private PlayerSession $session) {}

    public function handle(ConnectionInterface $socket, Message $request): void
    {
        $response = new PlayerLoginFinishScRsp();
        $response->setRetcode(0);

        $this->session->sendPacket($socket, cmd_id::CMD_PLAYER_LOGIN_FINISH_SC_RSP, $response);
    }
}
