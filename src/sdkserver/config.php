<?php

namespace VirusSR\sdkserver;

use Exception;
use VirusSR\FolderConstants;

class Config {
    public $http_port;
    public $game_servers;
    public $versions;

    // Static method to load and initialize the configuration
    public static function init_config() {
        $file_path = FolderConstants::ROOT_FOLDER . 'dispatch.json';
        return self::load_config($file_path, DEFAULT_CONFIG);
    }

    public static function load_config($file_path, $default_config) {
        // Check if the configuration file exists, otherwise use default config
        if (file_exists($file_path)) {
            $data = file_get_contents($file_path);
        } else {
            $data = $default_config;
        }

        // Decode JSON into an associative array
        $config = json_decode($data, true);

        if ($config === null) {
            throw new Exception("Failed to decode JSON config");
        }

        // Map the configuration data to the DispatchServerConfiguration object
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

    public function __construct($config) {
        $this->asset_bundle_url = $config['asset_bundle_url'];
        $this->ex_resource_url = $config['ex_resource_url'];
        $this->lua_url = $config['lua_url'];
        $this->lua_version = $config['lua_version'];
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

// Use this constant to load default configuration
const DEFAULT_CONFIG = <<<JSON
{
	"http_port": 21041,
	"game_servers": {
		"php_sr": {
			"name": "PHP-SR",
			"title": "PHP-SR",
			"dispatch_url": "http://127.0.0.1:21041/query_gateway",
			"env_type": "2",
			"gateserver_ip": "127.0.0.1",
			"gateserver_port": 23301,
			"gateserver_protocol": "Tcp"
		}
	},
	"versions": {
		"CNBETAWin2.4.53": {
			"asset_bundle_url": "https://autopatchcn.bhsr.com/asb/BetaLive/output_7758621_8ca8f85844d6",
			"ex_resource_url": "https://autopatchcn.bhsr.com/design_data/BetaLive/output_7774270_845f112075c7",
			"lua_url": "https://autopatchcn.bhsr.com/lua/BetaLive/output_7758773_990fec29651b",
			"ifixUrl": "https://autopatchcn.bhsr.com/ifix/BetaLive/output_0_40d2ce0253",
			"lua_version": "7758773",
			"customMdkResVersion": 0,
			"customIfixVersion": 0
		},
		"CNBETAWin2.4.55": {
			"asset_bundle_url": "https://autopatchcn.bhsr.com/asb/BetaLive/output_7852702_3da63958007e",
			"ex_resource_url": "https://autopatchcn.bhsr.com/design_data/BetaLive/output_7857075_9f5efd1b38f2",
			"lua_url": "https://autopatchcn.bhsr.com/lua/BetaLive/output_7852981_757d6a2b7feb",
			"ifixUrl": "https://autopatchcn.bhsr.com/ifix/BetaLive/output_0_40d2ce0253",
			"lua_version": "7852981",
			"customMdkResVersion": 0,
			"customIfixVersion": 0
		},
        "CNBETAAndroid2.4.55": {
			"asset_bundle_url": "https://autopatchcn.bhsr.com/asb/BetaLive/output_7852702_3da63958007e",
			"ex_resource_url": "https://autopatchcn.bhsr.com/design_data/BetaLive/output_7857075_9f5efd1b38f2",
			"lua_url": "https://autopatchcn.bhsr.com/lua/BetaLive/output_7852981_757d6a2b7feb",
			"ifixUrl": "https://autopatchcn.bhsr.com/ifix/BetaLive/output_0_40d2ce0253",
			"lua_version": "7852981",
			"customMdkResVersion": 0,
			"customIfixVersion": 0
        }   
	}
}
JSON;