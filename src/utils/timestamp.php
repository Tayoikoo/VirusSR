<?php
namespace VirusSR\utils;

class timestamp
{
    public static function cur_timestamp_ms(): int {
        // Get the current timestamp in seconds and multiply by 1000 to get milliseconds
        return (int)(microtime(true) * 1000);
    }
    
    public static function cur_timestamp_for_seed(): int {
        // Get the current timestamp in seconds, divide by 5, and cast to an integer
        return (int)(time() / 5);
    }
    
}