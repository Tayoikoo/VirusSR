<?php

namespace VirusSR\sdkserver;

use Exception;
use VirusSR\common\Logger;
use VirusSR\FolderConstants;

class Config {
    public $http_port;
    public $game_servers;
    public $versions;

    public static function init_config() {
        $file_path = FolderConstants::getRootFolder() . 'dispatch.json';
        return self::load_config($file_path);
    }

    public static function load_config($file_path) {
        if (file_exists($file_path)) {
            Logger::log_dispatch('Found Dispatch.json');
            $data = file_get_contents($file_path);
        } else {
            return Logger::error("Dispatch.json not found");
        }

        $config = json_decode($data, true);

        if ($config === null) {
            throw new Exception("Failed to decode JSON config");
        }

        $config_object = new self();
        $config_object->http_port = $config['http_port'];
        $config_object->game_servers = array_map(function($server) {
            return new GameServerConfig($server);
        }, $config['game_servers']);
        $config_object->versions = array_map(function($version) {
            return new VersionConfig($version);
        }, $config['versions']);

        return $config_object;
    }
}

class GameServerConfig {
    public $name;
    public $title;
    public $dispatch_url;
    public $env_type;
    public $gateserver_ip;
    public $gateserver_port;
    public $gateserver_protocol;

    public function __construct($config) {
        $this->name = $config['name'];
        $this->title = $config['title'];
        $this->dispatch_url = $config['dispatch_url'];
        $this->env_type = $config['env_type'];
        $this->gateserver_ip = $config['gateserver_ip'];
        $this->gateserver_port = $config['gateserver_port'];
        $this->gateserver_protocol = GatewayProtocolType::fromString($config['gateserver_protocol']);
    }
}

class VersionConfig {
    public $asset_bundle_url;
    public $ex_resource_url;
    public $lua_url;
    public $lua_version;
    public $ifixUrl;

    public function __construct($config) {
        $this->asset_bundle_url = $config['asset_bundle_url'];
        $this->ex_resource_url = $config['ex_resource_url'];
        $this->lua_url = $config['lua_url'];
        $this->lua_version = $config['lua_version'];
        $this->ifixUrl = $config['ifixUrl'];
    }
}

class GatewayProtocolType {
    const TCP = 'Tcp';
    const KCP = 'Kcp';

    public static function fromString($str) {
        switch ($str) {
            case self::TCP:
                return self::TCP;
            case self::KCP:
                return self::KCP;
            default:
                throw new Exception("Unknown protocol type: $str");
        }
    }
}