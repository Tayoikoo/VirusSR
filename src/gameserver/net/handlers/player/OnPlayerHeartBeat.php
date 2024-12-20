<?php

namespace VirusSR\gameserver\net\handlers\player;

use Google\Protobuf\Internal\Message;
use VirusSR\gameserver\net\cmd_id;
use VirusSR\gameserver\net\PlayerSession;
use React\Socket\ConnectionInterface;
use VirusSR\common\Logger;
use VirusSR\utils\timestamp;

use PlayerHeartBeatCsReq;
use ClientDownloadData;
use PlayerHeartBeatScRsp;

class OnPlayerHeartBeat
{
    public function __construct(private PlayerSession $session) {}

    public function handle(ConnectionInterface $socket, Message $request): void
    {
        $req = $this->decodePlayerHeartBeatCsReq($request);
        $clientTimeMs = $req->getClientTimeMs();

        $php_version = phpversion();
        // Creating ClientDownloadData instance
        $cdd = new ClientDownloadData();

        $uidScript = "
            CS.UnityEngine.GameObject.Find('UIRoot/AboveDialog/BetaHintDialog(Clone)'):GetComponentInChildren(typeof(CS.RPG.Client.LocalizedText)).text = '<size=20>VirusSR-PHP is written in PHP $php_version || inspired by TeyvatPS</size>'
        ";

        $cdd->setTime(timestamp::cur_timestamp_ms());
        $cdd->setVersion(51);
        $cdd->setData($uidScript); 

        $response = new PlayerHeartBeatScRsp();
        $response->setDownloadData($cdd); 
        $response->setClientTimeMs($clientTimeMs);
        $response->setServerTimeMs(timestamp::cur_timestamp_ms());
        $response->setRetcode(0);

        // Send the response packet back
        $this->session->sendPacket($socket, cmd_id::CMD_PLAYER_HEART_BEAT_SC_RSP, $response);
    }

    private function decodePlayerHeartBeatCsReq(Message $request): PlayerHeartBeatCsReq
    {
        $req = new PlayerHeartBeatCsReq();
        $req->mergeFromString($request->serializeToString());
        return $req;
    }    
}
