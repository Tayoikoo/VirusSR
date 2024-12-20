<?php
namespace VirusSR\database;

use Illuminate\Database\Capsule\Manager as Capsule;
use Exception;
use VirusSR\common\Logger;

class database {
    public static function init()
    {
        $capsule = new Capsule;

        try {
            $capsule->addConnection([
                'driver'    => 'mysql',
                'host'      => '127.0.0.1',
                'database'  => 'php_sr',
                'username'  => 'root',
                'password'  => '',
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
            ]);

            $capsule->setAsGlobal();
            $capsule->bootEloquent();

            $capsule->getConnection()->getPdo();

            $host = $capsule->getConnection()->getConfig('host');
            Logger::log("Connection Successed to host: $host");
        } catch (Exception $e) {
            Logger::error("Connection failed: " . $e->getMessage());
            exit();
        }

        return $capsule;
    }    
}
