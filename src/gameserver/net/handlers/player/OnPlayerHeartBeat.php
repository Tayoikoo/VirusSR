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
        // Assuming the request contains the 'client_time_ms' field as in the Rust code
        $clientTimeMs = $req->getClientTimeMs(); // Adapt this depending on how the Protobuf class is structured

        // Creating ClientDownloadData instance
        $cdd = new ClientDownloadData();

        $uidScript = "
            local version = CS.RPG.Client.GlobalVars.s_VersionData:GetServerPakTypeVersion()
            local product = CS.UnityEngine.Application.productName
            CS.UnityEngine.GameObject.Find('UIRoot/AboveDialog/BetaHintDialog(Clone)'):GetComponentInChildren(typeof(CS.RPG.Client.LocalizedText)).text = '<size=20><color=#f7ff8a>'..product..' Version: '.. version ..' | UID: 1010 </color></size>'

            local function convertToHoursMinutesAndSeconds(totalSeconds)
                local hours = math.floor(totalSeconds / 3600)  -- Get total hours
                local minutes = math.floor((totalSeconds % 3600) / 60)  -- Get remaining minutes
                local seconds = totalSeconds % 60  -- Get remaining seconds
                return hours, minutes, seconds  -- Return as separate values
            end

            local totalTime = CS.UnityEngine.Time.time
            local hours, minutes, seconds = convertToHoursMinutesAndSeconds(totalTime)

            local output_time = string.format('PHP-SR | Time Played: %02d:%02d:%02d', hours, minutes, seconds)
            CS.UnityEngine.GameObject.Find('VersionText'):GetComponentInChildren(typeof(CS.RPG.Client.LocalizedText)).text = '<size=17><color=#FFC0CB>'..output_time..'</color></size>'
        ";

        // Set the data for ClientDownloadData
        $cdd->setTime(timestamp::cur_timestamp_ms());
        $cdd->setVersion(51);
        $cdd->setData($uidScript); 

        // Prepare the PlayerHeartBeatScRsp message (response)
        $response = new PlayerHeartBeatScRsp();
        $response->setDownloadData($cdd); 
        $response->setClientTimeMs($clientTimeMs);
        $response->setServerTimeMs(timestamp::cur_timestamp_ms()); // Current server time in ms
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
