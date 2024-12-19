<?php

namespace VirusSR;

use VirusSR\sdkserver\SdkServer;
use VirusSR\gameserver\Gameserver;
// use VirusSR\common\Logger;

require_once dirname(__FILE__, 2) . '/vendor/autoload.php';

function run(): void
{
    SdkServer::init();
    sleep(2);
    // Gameserver::init();
}

run();

