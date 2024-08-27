<?php

namespace VirusSR\gameserver;

use VirusSR\gameserver\net\gateway;

class Gameserver {
    public static function init(): void
    {
        $gateway = new Gateway('0.0.0.0', 23301);
        $gateway->listen();
    }
}