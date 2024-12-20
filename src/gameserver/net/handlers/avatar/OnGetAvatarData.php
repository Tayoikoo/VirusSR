<?php

namespace VirusSR\gameserver\net\handlers\avatar;

use Google\Protobuf\Internal\Message;
use VirusSR\common\Logger;
use VirusSR\gameserver\net\cmd_id;
use VirusSR\gameserver\net\PlayerSession;
use React\Socket\ConnectionInterface;
use GetAvatarDataScRsp;
use VirusSR\gameserver\Resources;
use Avatar;

class OnGetAvatarData
{
    public function __construct(private PlayerSession $session) {}

    public function handle(ConnectionInterface $socket, Message $request): void
    {
        // Access the AvatarConfig from Resources
        $cfg = Resources::getAvatarConfig();

        if ($cfg === null) {
            // Handle the error if AvatarConfig is not loaded
            Logger::log("AvatarConfig not loaded.");
            return;
        }

        // Create the response message
        $response = new GetAvatarDataScRsp();
        $response->setIsGetAll(true);

        $avatarListData = $cfg->get_owned_avatars();

        // Create Avatar objects and add them to the avatar list
        $avatarList = [];
        foreach ($avatarListData as $avatarData) {
            $avatar = new Avatar();

            // Convert base_avatar_id to an integer (if possible)
            $baseAvatarId = (int)$avatarData['base_avatar_id']; // Convert to integer

            // Check if conversion was successful (optional)
            if ($baseAvatarId == 0 && $avatarData['base_avatar_id'] !== "0") {
                Logger::log("Invalid base_avatar_id for avatar: " . print_r($avatarData, true));
                continue;
            }

            $avatar->setBaseAvatarId($baseAvatarId);
            $avatar->setPromotion($avatarData['promotion']);
            $avatar->setRank($avatarData['rank']);
            $avatar->setExp($avatarData['exp']);
            $avatar->setLevel($avatarData['level']);

            // Add the Avatar object to the avatar list
            $avatarList[] = $avatar;
        }

        // Set the avatar list in the response
        $response->setAvatarList($avatarList);

        $this->session->sendPacket($socket, cmd_id::CMD_GET_AVATAR_DATA_SC_RSP, $response);
    }
}
