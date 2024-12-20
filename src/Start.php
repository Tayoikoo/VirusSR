<?php

namespace VirusSR;

use VirusSR\common\Helpers;

use VirusSR\sdkserver\SdkServer;
use VirusSR\gameserver\Gameserver;
use VirusSR\database\database;


require_once dirname(__FILE__, 2) . '/vendor/autoload.php';

function run(): void
{
    Helpers::php_sr();
    //database::init();
    sleep(2);
    SdkServer::init();
    sleep(2);
    Gameserver::init();
}

run();

