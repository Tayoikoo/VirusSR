<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>PFJJMIDEBEH</code>
 */
class PFJJMIDEBEH
{
    /**
     * Generated from protobuf enum <code>ROGUE_COLLECTION_NONE = 0;</code>
     */
    const ROGUE_COLLECTION_NONE = 0;
    /**
     * Generated from protobuf enum <code>ROGUE_COLLECTION_UNLOCKED = 1;</code>
     */
    const ROGUE_COLLECTION_UNLOCKED = 1;
    /**
     * Generated from protobuf enum <code>ROGUE_COLLECTION_DISPLAY = 2;</code>
     */
    const ROGUE_COLLECTION_DISPLAY = 2;

    private static $valueToName = [
        self::ROGUE_COLLECTION_NONE => 'ROGUE_COLLECTION_NONE',
        self::ROGUE_COLLECTION_UNLOCKED => 'ROGUE_COLLECTION_UNLOCKED',
        self::ROGUE_COLLECTION_DISPLAY => 'ROGUE_COLLECTION_DISPLAY',
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

