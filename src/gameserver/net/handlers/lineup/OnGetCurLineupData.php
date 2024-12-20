<?php

namespace VirusSR\gameserver\net\handlers\lineup;

use Google\Protobuf\Internal\Message;
use VirusSR\gameserver\net\cmd_id;
use VirusSR\gameserver\net\PlayerSession;
use React\Socket\ConnectionInterface;

class OnGetCurLineupData
{
    public function __construct(private PlayerSession $session) {}

    public function handle(ConnectionInterface $socket, Message $request): void
    {
        $rsp = new \GetCurLineupDataScRsp();
    
        $lineupInfo = new \LineupInfo();
        $lineupInfo->setName("PHP-SR Team");
        $lineupInfo->setPlaneId(20101);
    
        $avatarIds = [8001,1308, 1402, 1001];
    
        $avatars = [];
        foreach ($avatarIds as $i => $id) {
            $avatar = new \LineupAvatar();
            $avatar->setId($id);
            $avatar->setHp(10000);
            $avatar->setSlotType($i);
            $avatar->setSatiety(0);
    
            $sp = new \AmountInfo();
            $sp->setCurAmount(0);
            $sp->setMaxAmount(10000);
            $avatar->setSp($sp);
    
            $avatar->setAvatarType((int)\AvatarType::AVATAR_FORMAL_TYPE);
            $avatars[] = $avatar;
        }
    
        $lineupInfo->setAvatarList($avatars);
    
        $rsp->setLineup($lineupInfo);
    
        $rsp->setRetcode(0);
    
        $this->session->sendPacket($socket, cmd_id::CMD_GET_ALL_LINEUP_DATA_SC_RSP, $rsp);
    }
    
}
