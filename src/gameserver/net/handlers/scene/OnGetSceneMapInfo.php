<?php

namespace VirusSR\gameserver\net\handlers\scene;

use Google\Protobuf\Internal\Message;
use VirusSR\common\Logger;
use VirusSR\gameserver\net\cmd_id;
use VirusSR\gameserver\net\PlayerSession;
use React\Socket\ConnectionInterface;

class OnGetSceneMapInfo
{
    public function __construct(private PlayerSession $session) {}

    public function handle(ConnectionInterface $socket, \GetSceneMapInfoCsReq $request): void
    {
        $mapInfos = [];

        foreach ($request->getEntryIdList() as $entryId) {
            $mapInfo = new \SceneMapInfo();
            $mapInfo->setEntryId($entryId);

            $mapInfos[] = $mapInfo;
        }

        // Create the response message
        $response = new \GetSceneMapInfoScRsp();
        $response->setMapInfoList($mapInfos);
        $response->setRetcode(0);

        $this->session->sendPacket($socket, cmd_id::CMD_GET_SCENE_MAP_INFO_SC_RSP, $response);
    }
}
