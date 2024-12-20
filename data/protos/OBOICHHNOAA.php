<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>OBOICHHNOAA</code>
 */
class OBOICHHNOAA
{
    /**
     * Generated from protobuf enum <code>MATCH3_STATE_IDLE = 0;</code>
     */
    const MATCH3_STATE_IDLE = 0;
    /**
     * Generated from protobuf enum <code>MATCH3_STATE_START = 1;</code>
     */
    const MATCH3_STATE_START = 1;
    /**
     * Generated from protobuf enum <code>MATCH3_STATE_MATCH = 2;</code>
     */
    const MATCH3_STATE_MATCH = 2;
    /**
     * Generated from protobuf enum <code>MATCH3_STATE_GAME = 3;</code>
     */
    const MATCH3_STATE_GAME = 3;
    /**
     * Generated from protobuf enum <code>MATCH3_STATE_HALFTIME = 4;</code>
     */
    const MATCH3_STATE_HALFTIME = 4;
    /**
     * Generated from protobuf enum <code>MATCH3_STATE_OVER = 5;</code>
     */
    const MATCH3_STATE_OVER = 5;

    private static $valueToName = [
        self::MATCH3_STATE_IDLE => 'MATCH3_STATE_IDLE',
        self::MATCH3_STATE_START => 'MATCH3_STATE_START',
        self::MATCH3_STATE_MATCH => 'MATCH3_STATE_MATCH',
        self::MATCH3_STATE_GAME => 'MATCH3_STATE_GAME',
        self::MATCH3_STATE_HALFTIME => 'MATCH3_STATE_HALFTIME',
        self::MATCH3_STATE_OVER => 'MATCH3_STATE_OVER',
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
