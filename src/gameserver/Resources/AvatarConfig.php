<?php

namespace VirusSR\gameserver\Resources;

use Exception;
use VirusSR\common\Logger;

class AvatarConfig
{
    public array $avatars;

    public function __construct(array $avatars)
    {
        $this->avatars = $avatars;
    }

    // Factory method to create an AvatarConfig instance from a JSON file
    public static function from_file(string $file_path): self
    {
        if (file_exists($file_path)) {
            $data = file_get_contents($file_path);
        } else {
            throw new Exception("Avatar config file not found: " . $file_path);
        }

        $config = json_decode($data, true);

        if ($config === null) {
            throw new Exception("Failed to decode JSON config");
        }

        // Return the instance of AvatarConfig
        return new self($config);
    }

    // Retrieve the list of owned avatars with specific conditions
    public function get_owned_avatars(): array
    {
        $owned_avatars = [];

        foreach ($this->avatars as $avatar) {
            if (!isset($avatar['AvatarID'])) {
                continue; // Skip if AvatarID is not set
            }

            $avatarId = $avatar['AvatarID'];

            // Apply your conditions: e.g., exclude IDs below 8000 except 1001 and 1224
            if ($avatarId >= 7000 && !in_array($avatarId, [1001, 1224])) {
                continue;
            }

            // Add the avatar with required details
            $owned_avatars[] = [
                'base_avatar_id' => $avatarId,
                'promotion' => 6,
                'rank' => 6,
                'exp' => 0,
                'level' => 80,
            ];
        }

        // Include predefined avatars like MC and March
        $owned_avatars[] = [
            'base_avatar_id' => 8001,
            'promotion' => 6,
            'rank' => 6,
            'exp' => 0,
            'level' => 80,
        ];

        $owned_avatars[] = [
            'base_avatar_id' => 1001,
            'promotion' => 6,
            'rank' => 6,
            'exp' => 0,
            'level' => 80,
        ];

        return $owned_avatars;
    }
}
