<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>NAOLNICFDLN</code>
 */
class NAOLNICFDLN
{
    /**
     * Generated from protobuf enum <code>MAZE_KILL_SOURCE_NONE = 0;</code>
     */
    const MAZE_KILL_SOURCE_NONE = 0;
    /**
     * Generated from protobuf enum <code>MAZE_KILL_SOURCE_SWITCH_HAND = 1;</code>
     */
    const MAZE_KILL_SOURCE_SWITCH_HAND = 1;
    /**
     * Generated from protobuf enum <code>MAZE_KILL_SOURCE_TIME_LINE = 2;</code>
     */
    const MAZE_KILL_SOURCE_TIME_LINE = 2;

    private static $valueToName = [
        self::MAZE_KILL_SOURCE_NONE => 'MAZE_KILL_SOURCE_NONE',
        self::MAZE_KILL_SOURCE_SWITCH_HAND => 'MAZE_KILL_SOURCE_SWITCH_HAND',
        self::MAZE_KILL_SOURCE_TIME_LINE => 'MAZE_KILL_SOURCE_TIME_LINE',
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

