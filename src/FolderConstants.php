<?php

namespace VirusSR;

class FolderConstants
{
    public const DATA_FOLDER = __DIR__ . '/../data/';

    public const SR_DATA = __DIR__ . '/../resources/';

    public static function getRootResourceFolder(): string
    {
        return self::getRootFolder() . 'resources/';
    }

    public static function getRootFolder(): string
    {
        return realpath(__DIR__ . '/../') . '/';
    }    
}
