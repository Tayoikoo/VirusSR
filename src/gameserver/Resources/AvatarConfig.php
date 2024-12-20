<?php

namespace VirusSR\gameserver\Resources;

use Exception;
use VirusSR\common\Logger;
use VirusSR\FolderConstants;

class AvatarConfig
{
    private array $avatars;

    public function __construct(array $avatars)
    {
        $this->avatars = $avatars;
    }

    // Factory method to create an AvatarConfig instance from a JSON file
    public static function from_file(string $file_path): self
    {
        $avatar_json = $file_path;
        if (file_exists($avatar_json)) {
            $data = file_get_contents($avatar_json);
        } else {
            throw new Exception("Avatar config file not found: " . $avatar_json);
        }

        $config = json_decode($data, true);

        if ($config === null) {
            throw new Exception("Failed to decode JSON config");
        }

        // Return the instance of AvatarConfig
        return new self($config);
    }

    // Retrieve the list of avatars
    public function get_owned_avatars(): array
    {
        $avatars = [];

        foreach ($this->avatars as $avatarId) {
            if ($avatarId > 8000 || ($avatarId == 1001 || $avatarId == 1224)) continue;

            $avatars[] = [
                'base_avatar_id' => $avatarId,
                'promotion' => 6,
                'rank' => 6,
                'exp' => 0,
                'level' => 80,
            ];
        }

        // MC
        $avatars[] = [
            'base_avatar_id' => 8001,
            'promotion' => 6,
            'rank' => 6,
            'exp' => 0,
            'level' => 80,
        ];
        
        // March
        $avatars[] = [
            'base_avatar_id' => 1001,
            'promotion' => 6,
            'rank' => 6,
            'exp' => 0,
            'level' => 80,
        ];        


        return $avatars;
    }
}
