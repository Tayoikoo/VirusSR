<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>GBAINEMEKED</code>
 */
class GBAINEMEKED
{
    /**
     * Generated from protobuf enum <code>MUSEUM_RANDOM_EVENT_STATE_NONE = 0;</code>
     */
    const MUSEUM_RANDOM_EVENT_STATE_NONE = 0;
    /**
     * Generated from protobuf enum <code>MUSEUM_RANDOM_EVENT_STATE_START = 1;</code>
     */
    const MUSEUM_RANDOM_EVENT_STATE_START = 1;
    /**
     * Generated from protobuf enum <code>MUSEUM_RANDOM_EVENT_STATE_PROCESSING = 2;</code>
     */
    const MUSEUM_RANDOM_EVENT_STATE_PROCESSING = 2;
    /**
     * Generated from protobuf enum <code>MUSEUM_RANDOM_EVENT_STATE_FINISH = 3;</code>
     */
    const MUSEUM_RANDOM_EVENT_STATE_FINISH = 3;

    private static $valueToName = [
        self::MUSEUM_RANDOM_EVENT_STATE_NONE => 'MUSEUM_RANDOM_EVENT_STATE_NONE',
        self::MUSEUM_RANDOM_EVENT_STATE_START => 'MUSEUM_RANDOM_EVENT_STATE_START',
        self::MUSEUM_RANDOM_EVENT_STATE_PROCESSING => 'MUSEUM_RANDOM_EVENT_STATE_PROCESSING',
        self::MUSEUM_RANDOM_EVENT_STATE_FINISH => 'MUSEUM_RANDOM_EVENT_STATE_FINISH',
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

