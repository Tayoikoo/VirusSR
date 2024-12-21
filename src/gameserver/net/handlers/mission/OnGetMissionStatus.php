<?php

namespace VirusSR\gameserver\net\handlers\mission;

use Google\Protobuf\Internal\Message;
use VirusSR\gameserver\net\cmd_id;
use VirusSR\gameserver\net\PlayerSession;
use React\Socket\ConnectionInterface;
use GetMissionStatusCsReq;
use GetMissionStatusScRsp;
use Mission;
use MissionStatus;

class OnGetMissionStatus
{
    public function __construct(private PlayerSession $session) {}

    public function handle(ConnectionInterface $socket, Message $request): void
    {
        // Decode the incoming GetMissionStatusCsReq request
        $req = $this->decodeGetMissionStatusCsReq($request);

        // Create the response message
        $response = new GetMissionStatusScRsp();
        $response->setFinishedMainMissionIdList($req->getMainMissionIdList());

        // Populate sub_mission_status_list with Mission objects
        $subMissionStatusList = [];
        foreach ($req->getSubMissionIdList() as $id) {
            $mission = new Mission();
            $mission->setId($id);
            $mission->setProgress(1);
            $mission->setStatus(MissionStatus::MISSION_FINISH);
            $subMissionStatusList[] = $mission;
        }

        $response->setSubMissionStatusList($subMissionStatusList);
        $response->setRetcode(0);

        // Send the response packet using PlayerSession's method
        $this->session->sendPacket($socket, cmd_id::CMD_GET_MISSION_STATUS_SC_RSP, $response);
    }

    /**
     * Decode the GetMissionStatusCsReq protobuf message from the request.
     * 
     * @param Message $request The incoming request data.
     * @return GetMissionStatusCsReq The decoded request message.
     */
    private function decodeGetMissionStatusCsReq(Message $request): GetMissionStatusCsReq
    {
        $req = new GetMissionStatusCsReq();
        $req->mergeFromString($request->serializeToString());
        return $req;
    }
}
