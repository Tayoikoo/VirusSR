<?php

namespace VirusSR;

use VirusSR\sdkserver\SdkServer;
use VirusSR\gameserver\Gameserver;

require_once dirname(__FILE__, 2) . '/vendor/autoload.php';

function run(): void
{
    // Logger::log("SDK Server running at http://0.0.0.0:21000\n");
    SdkServer::init();
    sleep(2);
    Gameserver::init();
}

run();

