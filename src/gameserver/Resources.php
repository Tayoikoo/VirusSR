<?php

namespace VirusSR\gameserver;

use Exception;
use VirusSR\common\Logger;
use VirusSR\FolderConstants;

class Resources {
    // Store the loaded AvatarConfig globally
    private static ?Resources\AvatarConfig $avatarConfig = null;

    public static function init_resources()
    {
        Logger::log("Loading resources...");
        return self::load_excels();
    }

    public static function load_excels()
    {
        self::avatar_json();
    }

    public static function avatar_json()
    {
        // Load the AvatarConfig from the JSON file
        try {
            self::$avatarConfig = Resources\AvatarConfig::from_file(FolderConstants::getExcels() . 'AvatarConfig.json');
            Logger::log("Loaded AvatarConfig.json");
        } catch (Exception $e) {
            Logger::log("Error loading AvatarConfig.json: " . $e->getMessage());
        }
    }

    // Getter for AvatarConfig
    public static function getAvatarConfig(): ?Resources\AvatarConfig
    {
        if (self::$avatarConfig === null) {
            throw new Exception("AvatarConfig not loaded.");
        }
        return self::$avatarConfig;
    }
}
