<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>MFCKNJHDIGG</code>
 */
class MFCKNJHDIGG
{
    /**
     * Generated from protobuf enum <code>RAID_STATUS_NONE = 0;</code>
     */
    const RAID_STATUS_NONE = 0;
    /**
     * Generated from protobuf enum <code>RAID_STATUS_DOING = 1;</code>
     */
    const RAID_STATUS_DOING = 1;
    /**
     * Generated from protobuf enum <code>RAID_STATUS_FINISH = 2;</code>
     */
    const RAID_STATUS_FINISH = 2;
    /**
     * Generated from protobuf enum <code>RAID_STATUS_FAILED = 3;</code>
     */
    const RAID_STATUS_FAILED = 3;

    private static $valueToName = [
        self::RAID_STATUS_NONE => 'RAID_STATUS_NONE',
        self::RAID_STATUS_DOING => 'RAID_STATUS_DOING',
        self::RAID_STATUS_FINISH => 'RAID_STATUS_FINISH',
        self::RAID_STATUS_FAILED => 'RAID_STATUS_FAILED',
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

