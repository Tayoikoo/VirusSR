<?php

namespace VirusSR\gameserver\net\handlers\scene;

use Google\Protobuf\Internal\Message;
use VirusSR\gameserver\net\cmd_id;
use VirusSR\gameserver\net\PlayerSession;
use React\Socket\ConnectionInterface;
use VirusSR\common\Logger;

class OnSceneEntityMove {
    public function __construct(private PlayerSession $session) {}
    
    public function handle(ConnectionInterface $socket, \SceneEntityMoveCsReq $request): void {
        // foreach ($request->getEntityMotionList() as $entityMotion) {
        //     if ($motion = $entityMotion->getMotion()) {
        //         Logger::log_packet(sprintf(
        //             "[POSITION] entity_id: %d, motion: %s",
        //             $entityMotion->getEntityId(),
        //             json_encode($motion)
        //         ));
        //     }
        // }

        $rsp = new \SceneEntityMoveScRsp();
        $rsp->setRetcode(0);
        $rsp->setEntityMotionList($request->getEntityMotionList());
        
        $this->session->sendPacket($socket, cmd_id::CMD_SCENE_ENTITY_MOVE_SC_RSP, $rsp);
    }
}