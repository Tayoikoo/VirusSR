<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>EOFOHACMKEP</code>
 */
class EOFOHACMKEP
{
    /**
     * Generated from protobuf enum <code>MATCH3_PLAYER_STATE_ALIVE = 0;</code>
     */
    const MATCH3_PLAYER_STATE_ALIVE = 0;
    /**
     * Generated from protobuf enum <code>MATCH3_PLAYER_STATE_DYING = 1;</code>
     */
    const MATCH3_PLAYER_STATE_DYING = 1;
    /**
     * Generated from protobuf enum <code>MATCH3_PLAYER_STATE_DEAD = 2;</code>
     */
    const MATCH3_PLAYER_STATE_DEAD = 2;
    /**
     * Generated from protobuf enum <code>MATCH3_PLAYER_STATE_LEAVE = 3;</code>
     */
    const MATCH3_PLAYER_STATE_LEAVE = 3;

    private static $valueToName = [
        self::MATCH3_PLAYER_STATE_ALIVE => 'MATCH3_PLAYER_STATE_ALIVE',
        self::MATCH3_PLAYER_STATE_DYING => 'MATCH3_PLAYER_STATE_DYING',
        self::MATCH3_PLAYER_STATE_DEAD => 'MATCH3_PLAYER_STATE_DEAD',
        self::MATCH3_PLAYER_STATE_LEAVE => 'MATCH3_PLAYER_STATE_LEAVE',
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
