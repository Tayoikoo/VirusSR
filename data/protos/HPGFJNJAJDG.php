<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>HPGFJNJAJDG</code>
 */
class HPGFJNJAJDG
{
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ITEM_DISPLAY_TYPE_NONE = 0;</code>
     */
    const ROGUE_COMMON_ITEM_DISPLAY_TYPE_NONE = 0;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ITEM_DISPLAY_TYPE_ADD = 1;</code>
     */
    const ROGUE_COMMON_ITEM_DISPLAY_TYPE_ADD = 1;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ITEM_DISPLAY_TYPE_REMOVE = 2;</code>
     */
    const ROGUE_COMMON_ITEM_DISPLAY_TYPE_REMOVE = 2;

    private static $valueToName = [
        self::ROGUE_COMMON_ITEM_DISPLAY_TYPE_NONE => 'ROGUE_COMMON_ITEM_DISPLAY_TYPE_NONE',
        self::ROGUE_COMMON_ITEM_DISPLAY_TYPE_ADD => 'ROGUE_COMMON_ITEM_DISPLAY_TYPE_ADD',
        self::ROGUE_COMMON_ITEM_DISPLAY_TYPE_REMOVE => 'ROGUE_COMMON_ITEM_DISPLAY_TYPE_REMOVE',
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

