<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>KLOKGJNIANL</code>
 */
class KLOKGJNIANL
{
    /**
     * Generated from protobuf enum <code>CLOCK_PARK_PLAY_NONE = 0;</code>
     */
    const CLOCK_PARK_PLAY_NONE = 0;
    /**
     * Generated from protobuf enum <code>CLOCK_PARK_PLAY_NORMAL_DEATH = 1;</code>
     */
    const CLOCK_PARK_PLAY_NORMAL_DEATH = 1;
    /**
     * Generated from protobuf enum <code>CLOCK_PARK_PLAY_NORMAL_PASS = 2;</code>
     */
    const CLOCK_PARK_PLAY_NORMAL_PASS = 2;
    /**
     * Generated from protobuf enum <code>CLOCK_PARK_PLAY_FINISH_SCRIPT = 5;</code>
     */
    const CLOCK_PARK_PLAY_FINISH_SCRIPT = 5;

    private static $valueToName = [
        self::CLOCK_PARK_PLAY_NONE => 'CLOCK_PARK_PLAY_NONE',
        self::CLOCK_PARK_PLAY_NORMAL_DEATH => 'CLOCK_PARK_PLAY_NORMAL_DEATH',
        self::CLOCK_PARK_PLAY_NORMAL_PASS => 'CLOCK_PARK_PLAY_NORMAL_PASS',
        self::CLOCK_PARK_PLAY_FINISH_SCRIPT => 'CLOCK_PARK_PLAY_FINISH_SCRIPT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
