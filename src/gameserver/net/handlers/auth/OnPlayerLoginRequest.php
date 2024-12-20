<?php

namespace VirusSR\gameserver\net\handlers\auth;
use VirusSR\utils\timestamp;

use Google\Protobuf\Internal\Message;
use VirusSR\gameserver\net\cmd_id;
use VirusSR\gameserver\net\PlayerSession;
use React\Socket\ConnectionInterface;
use PlayerBasicInfo;
use PlayerLoginScRsp;
class OnPlayerLoginRequest
{
    public function __construct(private PlayerSession $session) {}

    public function handle(ConnectionInterface $socket, Message $request): void
    {
        // Create PlayerBasicInfo response object (similar to the Rust struct)
        $basicInfo = new PlayerBasicInfo();
        $basicInfo->setNickname("PHP-SR");
        $basicInfo->setLevel(70);
        $basicInfo->setExp(0);
        $basicInfo->setStamina(300);
        $basicInfo->setMcoin(1);
        $basicInfo->setHcoin(1);
        $basicInfo->setScoin(1);
        $basicInfo->setWorldLevel(6);

        // Create PlayerLoginScRsp response object
        $response = new PlayerLoginScRsp();
        $response->setBasicInfo($basicInfo);
        $response->setServerTimestampMs(timestamp::cur_timestamp_ms());
        $response->setRetcode(0);
        $response->setStamina(240);

        // Send the response packet using PlayerSession's method
        $this->session->sendPacket($socket, cmd_id::CMD_PLAYER_LOGIN_SC_RSP, $response);
    }
}
