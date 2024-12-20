<?php

namespace VirusSR\gameserver\net\handlers\player;

use Google\Protobuf\Internal\Message;
use VirusSR\gameserver\net\cmd_id;
use VirusSR\gameserver\net\PlayerSession;
use React\Socket\ConnectionInterface;

use GetBasicInfoScRsp;

class OnGetBasicInfo
{
    public function __construct(private PlayerSession $session) {}

    public function handle(ConnectionInterface $socket, Message $request): void
    {
        $rsp = new GetBasicInfoScRsp();

        $rsp->setRetcode(0);
        $rsp->setGender(1);
        $rsp->setIsGenderSet(true);

        $this->session->sendPacket($socket, cmd_id::CMD_GET_BASIC_INFO_SC_RSP, $rsp);
    }
}
