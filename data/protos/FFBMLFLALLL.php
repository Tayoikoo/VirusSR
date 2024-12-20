<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>FFBMLFLALLL</code>
 */
class FFBMLFLALLL
{
    /**
     * Generated from protobuf enum <code>GAMEPLAY_COUNTER_UPDATE_REASON_NONE = 0;</code>
     */
    const GAMEPLAY_COUNTER_UPDATE_REASON_NONE = 0;
    /**
     * Generated from protobuf enum <code>GAMEPLAY_COUNTER_UPDATE_REASON_ACTIVATE = 1;</code>
     */
    const GAMEPLAY_COUNTER_UPDATE_REASON_ACTIVATE = 1;
    /**
     * Generated from protobuf enum <code>GAMEPLAY_COUNTER_UPDATE_REASON_DEACTIVATE = 2;</code>
     */
    const GAMEPLAY_COUNTER_UPDATE_REASON_DEACTIVATE = 2;
    /**
     * Generated from protobuf enum <code>GAMEPLAY_COUNTER_UPDATE_REASON_CHANGE = 3;</code>
     */
    const GAMEPLAY_COUNTER_UPDATE_REASON_CHANGE = 3;

    private static $valueToName = [
        self::GAMEPLAY_COUNTER_UPDATE_REASON_NONE => 'GAMEPLAY_COUNTER_UPDATE_REASON_NONE',
        self::GAMEPLAY_COUNTER_UPDATE_REASON_ACTIVATE => 'GAMEPLAY_COUNTER_UPDATE_REASON_ACTIVATE',
        self::GAMEPLAY_COUNTER_UPDATE_REASON_DEACTIVATE => 'GAMEPLAY_COUNTER_UPDATE_REASON_DEACTIVATE',
        self::GAMEPLAY_COUNTER_UPDATE_REASON_CHANGE => 'GAMEPLAY_COUNTER_UPDATE_REASON_CHANGE',
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
