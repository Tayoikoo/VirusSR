<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>DCCJJGMKHLI</code>
 */
class DCCJJGMKHLI
{
    /**
     * Generated from protobuf enum <code>PUNK_LORD_OPERATION_NONE = 0;</code>
     */
    const PUNK_LORD_OPERATION_NONE = 0;
    /**
     * Generated from protobuf enum <code>PUNK_LORD_OPERATION_REFRESH = 1;</code>
     */
    const PUNK_LORD_OPERATION_REFRESH = 1;
    /**
     * Generated from protobuf enum <code>PUNK_LORD_OPERATION_SHARE = 2;</code>
     */
    const PUNK_LORD_OPERATION_SHARE = 2;
    /**
     * Generated from protobuf enum <code>PUNK_LORD_OPERATION_START_RAID = 3;</code>
     */
    const PUNK_LORD_OPERATION_START_RAID = 3;
    /**
     * Generated from protobuf enum <code>PUNK_LORD_OPERATION_GET_BATTLE_RECORD = 4;</code>
     */
    const PUNK_LORD_OPERATION_GET_BATTLE_RECORD = 4;

    private static $valueToName = [
        self::PUNK_LORD_OPERATION_NONE => 'PUNK_LORD_OPERATION_NONE',
        self::PUNK_LORD_OPERATION_REFRESH => 'PUNK_LORD_OPERATION_REFRESH',
        self::PUNK_LORD_OPERATION_SHARE => 'PUNK_LORD_OPERATION_SHARE',
        self::PUNK_LORD_OPERATION_START_RAID => 'PUNK_LORD_OPERATION_START_RAID',
        self::PUNK_LORD_OPERATION_GET_BATTLE_RECORD => 'PUNK_LORD_OPERATION_GET_BATTLE_RECORD',
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
