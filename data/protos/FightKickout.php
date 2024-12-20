<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>FightKickout</code>
 */
class FightKickout
{
    /**
     * Generated from protobuf enum <code>FIGHT_KICKOUT_UNKNOWN = 0;</code>
     */
    const FIGHT_KICKOUT_UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>FIGHT_KICKOUT_BLACK = 1;</code>
     */
    const FIGHT_KICKOUT_BLACK = 1;
    /**
     * Generated from protobuf enum <code>FIGHT_KICKOUT_BY_GM = 2;</code>
     */
    const FIGHT_KICKOUT_BY_GM = 2;
    /**
     * Generated from protobuf enum <code>FIGHT_KICKOUT_TIMEOUT = 3;</code>
     */
    const FIGHT_KICKOUT_TIMEOUT = 3;
    /**
     * Generated from protobuf enum <code>FIGHT_KICKOUT_SESSION_RESET = 4;</code>
     */
    const FIGHT_KICKOUT_SESSION_RESET = 4;

    private static $valueToName = [
        self::FIGHT_KICKOUT_UNKNOWN => 'FIGHT_KICKOUT_UNKNOWN',
        self::FIGHT_KICKOUT_BLACK => 'FIGHT_KICKOUT_BLACK',
        self::FIGHT_KICKOUT_BY_GM => 'FIGHT_KICKOUT_BY_GM',
        self::FIGHT_KICKOUT_TIMEOUT => 'FIGHT_KICKOUT_TIMEOUT',
        self::FIGHT_KICKOUT_SESSION_RESET => 'FIGHT_KICKOUT_SESSION_RESET',
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

