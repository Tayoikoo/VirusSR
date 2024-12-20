<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>Match3FinishReason</code>
 */
class Match3FinishReason
{
    /**
     * Generated from protobuf enum <code>MATCH3_FINISH_REASON_DEFAULT = 0;</code>
     */
    const MATCH3_FINISH_REASON_DEFAULT = 0;
    /**
     * Generated from protobuf enum <code>MATCH3_FINISH_REASON_LEAVE = 1;</code>
     */
    const MATCH3_FINISH_REASON_LEAVE = 1;
    /**
     * Generated from protobuf enum <code>MATCH3_FINISH_REASON_DIE = 2;</code>
     */
    const MATCH3_FINISH_REASON_DIE = 2;
    /**
     * Generated from protobuf enum <code>MATCH3_FINISH_REASON_GAMEEND = 3;</code>
     */
    const MATCH3_FINISH_REASON_GAMEEND = 3;
    /**
     * Generated from protobuf enum <code>MATCH3_FINISH_REASON_KICKOUT = 4;</code>
     */
    const MATCH3_FINISH_REASON_KICKOUT = 4;

    private static $valueToName = [
        self::MATCH3_FINISH_REASON_DEFAULT => 'MATCH3_FINISH_REASON_DEFAULT',
        self::MATCH3_FINISH_REASON_LEAVE => 'MATCH3_FINISH_REASON_LEAVE',
        self::MATCH3_FINISH_REASON_DIE => 'MATCH3_FINISH_REASON_DIE',
        self::MATCH3_FINISH_REASON_GAMEEND => 'MATCH3_FINISH_REASON_GAMEEND',
        self::MATCH3_FINISH_REASON_KICKOUT => 'MATCH3_FINISH_REASON_KICKOUT',
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
