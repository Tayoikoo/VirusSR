<?php

namespace VirusSR\gameserver\net\handlers\avatar;

use Google\Protobuf\Internal\Message;
use VirusSR\gameserver\net\cmd_id;
use VirusSR\gameserver\net\PlayerSession;
use React\Socket\ConnectionInterface;

use GetMultiPathAvatarInfoScRsp;
use MultiPathAvatarType;

class OnGetMultiPathAvatar
{
    public function __construct(private PlayerSession $session) {}

    public function handle(ConnectionInterface $socket, Message $request): void
    {
        $rsp = new GetMultiPathAvatarInfoScRsp();

        $rsp->setRetcode(0);
        $rsp->setCurAvatarPath(
            [
                1001 => (int)MultiPathAvatarType::Mar_7thRogueType,
                8001 => (int)MultiPathAvatarType::BoyShamanType,
            ]
        );

        $this->session->sendPacket($socket, cmd_id::CMD_GET_MULTI_PATH_AVATAR_INFO_SC_RSP, $rsp);
    }
}
