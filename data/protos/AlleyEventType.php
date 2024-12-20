<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>AlleyEventType</code>
 */
class AlleyEventType
{
    /**
     * Generated from protobuf enum <code>ALLEY_EVENT_TYPE_NONE = 0;</code>
     */
    const ALLEY_EVENT_TYPE_NONE = 0;
    /**
     * Generated from protobuf enum <code>ALLEY_MAIN_EVENT = 1;</code>
     */
    const ALLEY_MAIN_EVENT = 1;
    /**
     * Generated from protobuf enum <code>ALLEY_CRITICAL_EVENT = 2;</code>
     */
    const ALLEY_CRITICAL_EVENT = 2;
    /**
     * Generated from protobuf enum <code>ALLEY_DAILY_EVENT = 3;</code>
     */
    const ALLEY_DAILY_EVENT = 3;

    private static $valueToName = [
        self::ALLEY_EVENT_TYPE_NONE => 'ALLEY_EVENT_TYPE_NONE',
        self::ALLEY_MAIN_EVENT => 'ALLEY_MAIN_EVENT',
        self::ALLEY_CRITICAL_EVENT => 'ALLEY_CRITICAL_EVENT',
        self::ALLEY_DAILY_EVENT => 'ALLEY_DAILY_EVENT',
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

