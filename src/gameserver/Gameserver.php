<?php

namespace VirusSR\gameserver;

use VirusSR\gameserver\net\Gateway;
use VirusSR\gameserver\net\PlayerSession;

class Gameserver {
    public static function init(): void
    {
        // Load the command ID map
        PlayerSession::loadCmdIdMap();

        // Create and start the gateway
        $gateway = new Gateway('0.0.0.0', 23301);
        $gateway->listen();
    }
}
