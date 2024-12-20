<?php

namespace VirusSR\gameserver;

use VirusSR\gameserver\net\Gateway;

class Gameserver {
    public static function init(): void
    {
        // Load the command ID map
        Resources::init_resources();

        // Create and start the gateway
        $gateway = new Gateway('0.0.0.0', 23301);
        $gateway->listen();
    }
}
