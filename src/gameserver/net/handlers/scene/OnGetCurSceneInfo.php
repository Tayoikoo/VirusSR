<?php

namespace VirusSR\gameserver\net\handlers\scene;

use Google\Protobuf\Internal\Message;
use VirusSR\gameserver\net\cmd_id;
use VirusSR\gameserver\net\PlayerSession;
use React\Socket\ConnectionInterface;
use VirusSR\common\Logger;

class OnGetCurSceneInfo
{
    public function __construct(private PlayerSession $session) {}

    public function handle(ConnectionInterface $socket, Message $request): void
    {
        $rsp = new \GetCurSceneInfoScRsp();

        $motion = new \MotionInfo();
        $vector = new \Vector();

        $avatarIds = [1308];

        $entity_actor = [];
        foreach ($avatarIds as $i => $id) {
            $actorInfo = new \SceneEntityInfo();
            $actorInfo->setInstId(0);
            $actorInfo->setGroupId(0);
            $actorInfo->setEntityId((int)$i << 2);
            // MotionInfo
            $vector->setX(4480);
            $vector->setY(19364);
            $vector->setZ(-550);
            $motion->setPos($vector);
            
            // Set rotation
            $vector->setX(0);
            $vector->setY(0);
            $vector->setZ(0);
            $motion->setRot($vector);
            // Set Motion
            $actorInfo->setMotion($motion);

            $actor = new \SceneActorInfo();

            $actor->setBaseAvatarId($id);
            $actor->setAvatarType((int)\AvatarType::AVATAR_FORMAL_TYPE);
            $actor->setMapLayer(0);
            $actor->setUid(0);

            $actorInfo->setActor($actor);

            $entity_actor[] = $actorInfo;
        }

        $leaderEntityId = $entity_actor[0]->getEntityId();

        $actorGroup = new \SceneGroupInfo();

        $actorGroup->setEntityList($entity_actor);
        $actorGroup->setState(1);

        $SceneGroupList = [$actorGroup];

        
        $sceneInfo = new \SceneInfo();
        $sceneInfo->setPlaneId(20101);
        $sceneInfo->setFloorId(20101001);
        $sceneInfo->setEntryId(2010101);
        $sceneInfo->setGameModeType(2);
        $sceneInfo->setSceneGroupList($SceneGroupList);
        $sceneInfo->setLeaderEntityId($leaderEntityId);

        $rsp->setRetcode(0);
        $rsp->setScene($sceneInfo);

        $this->session->sendPacket($socket, cmd_id::CMD_GET_CUR_SCENE_INFO_SC_RSP, $rsp);
    }
}
