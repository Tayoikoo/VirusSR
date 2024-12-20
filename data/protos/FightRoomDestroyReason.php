<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>FightRoomDestroyReason</code>
 */
class FightRoomDestroyReason
{
    /**
     * Generated from protobuf enum <code>FIGHT_ROOM_DESTROY_REASON_NONE = 0;</code>
     */
    const FIGHT_ROOM_DESTROY_REASON_NONE = 0;
    /**
     * Generated from protobuf enum <code>FIGHT_ROOM_DESTROY_REASON_SVR_STOP = 1;</code>
     */
    const FIGHT_ROOM_DESTROY_REASON_SVR_STOP = 1;
    /**
     * Generated from protobuf enum <code>FIGHT_ROOM_DESTROY_REASON_GAME_END = 2;</code>
     */
    const FIGHT_ROOM_DESTROY_REASON_GAME_END = 2;

    private static $valueToName = [
        self::FIGHT_ROOM_DESTROY_REASON_NONE => 'FIGHT_ROOM_DESTROY_REASON_NONE',
        self::FIGHT_ROOM_DESTROY_REASON_SVR_STOP => 'FIGHT_ROOM_DESTROY_REASON_SVR_STOP',
        self::FIGHT_ROOM_DESTROY_REASON_GAME_END => 'FIGHT_ROOM_DESTROY_REASON_GAME_END',
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

