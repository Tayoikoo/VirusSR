<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>HKKEAIGEHNP</code>
 */
class HKKEAIGEHNP
{
    /**
     * Generated from protobuf enum <code>ROGUE_DEBUG_MESSAGE_TYPE_NONE = 0;</code>
     */
    const ROGUE_DEBUG_MESSAGE_TYPE_NONE = 0;
    /**
     * Generated from protobuf enum <code>ROGUE_DEBUG_MESSAGE_TYPE_DEBUG = 1;</code>
     */
    const ROGUE_DEBUG_MESSAGE_TYPE_DEBUG = 1;
    /**
     * Generated from protobuf enum <code>ROGUE_DEBUG_MESSAGE_TYPE_INFO = 2;</code>
     */
    const ROGUE_DEBUG_MESSAGE_TYPE_INFO = 2;
    /**
     * Generated from protobuf enum <code>ROGUE_DEBUG_MESSAGE_TYPE_WARN = 3;</code>
     */
    const ROGUE_DEBUG_MESSAGE_TYPE_WARN = 3;
    /**
     * Generated from protobuf enum <code>ROGUE_DEBUG_MESSAGE_TYPE_ERROR = 4;</code>
     */
    const ROGUE_DEBUG_MESSAGE_TYPE_ERROR = 4;

    private static $valueToName = [
        self::ROGUE_DEBUG_MESSAGE_TYPE_NONE => 'ROGUE_DEBUG_MESSAGE_TYPE_NONE',
        self::ROGUE_DEBUG_MESSAGE_TYPE_DEBUG => 'ROGUE_DEBUG_MESSAGE_TYPE_DEBUG',
        self::ROGUE_DEBUG_MESSAGE_TYPE_INFO => 'ROGUE_DEBUG_MESSAGE_TYPE_INFO',
        self::ROGUE_DEBUG_MESSAGE_TYPE_WARN => 'ROGUE_DEBUG_MESSAGE_TYPE_WARN',
        self::ROGUE_DEBUG_MESSAGE_TYPE_ERROR => 'ROGUE_DEBUG_MESSAGE_TYPE_ERROR',
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

