<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>ChestType</code>
 */
class ChestType
{
    /**
     * Generated from protobuf enum <code>MAP_INFO_CHEST_TYPE_NONE = 0;</code>
     */
    const MAP_INFO_CHEST_TYPE_NONE = 0;
    /**
     * Generated from protobuf enum <code>MAP_INFO_CHEST_TYPE_NORMAL = 101;</code>
     */
    const MAP_INFO_CHEST_TYPE_NORMAL = 101;
    /**
     * Generated from protobuf enum <code>MAP_INFO_CHEST_TYPE_CHALLENGE = 102;</code>
     */
    const MAP_INFO_CHEST_TYPE_CHALLENGE = 102;
    /**
     * Generated from protobuf enum <code>MAP_INFO_CHEST_TYPE_PUZZLE = 104;</code>
     */
    const MAP_INFO_CHEST_TYPE_PUZZLE = 104;

    private static $valueToName = [
        self::MAP_INFO_CHEST_TYPE_NONE => 'MAP_INFO_CHEST_TYPE_NONE',
        self::MAP_INFO_CHEST_TYPE_NORMAL => 'MAP_INFO_CHEST_TYPE_NORMAL',
        self::MAP_INFO_CHEST_TYPE_CHALLENGE => 'MAP_INFO_CHEST_TYPE_CHALLENGE',
        self::MAP_INFO_CHEST_TYPE_PUZZLE => 'MAP_INFO_CHEST_TYPE_PUZZLE',
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

