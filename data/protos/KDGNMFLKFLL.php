<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>KDGNMFLKFLL</code>
 */
class KDGNMFLKFLL
{
    /**
     * Generated from protobuf enum <code>ROGUE_STATUS_NONE = 0;</code>
     */
    const ROGUE_STATUS_NONE = 0;
    /**
     * Generated from protobuf enum <code>ROGUE_STATUS_DOING = 1;</code>
     */
    const ROGUE_STATUS_DOING = 1;
    /**
     * Generated from protobuf enum <code>ROGUE_STATUS_PENDING = 2;</code>
     */
    const ROGUE_STATUS_PENDING = 2;
    /**
     * Generated from protobuf enum <code>ROGUE_STATUS_ENDLESS = 3;</code>
     */
    const ROGUE_STATUS_ENDLESS = 3;
    /**
     * Generated from protobuf enum <code>ROGUE_STATUS_FINISH = 4;</code>
     */
    const ROGUE_STATUS_FINISH = 4;

    private static $valueToName = [
        self::ROGUE_STATUS_NONE => 'ROGUE_STATUS_NONE',
        self::ROGUE_STATUS_DOING => 'ROGUE_STATUS_DOING',
        self::ROGUE_STATUS_PENDING => 'ROGUE_STATUS_PENDING',
        self::ROGUE_STATUS_ENDLESS => 'ROGUE_STATUS_ENDLESS',
        self::ROGUE_STATUS_FINISH => 'ROGUE_STATUS_FINISH',
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

