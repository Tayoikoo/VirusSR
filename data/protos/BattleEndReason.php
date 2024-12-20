<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>BattleEndReason</code>
 */
class BattleEndReason
{
    /**
     * Generated from protobuf enum <code>BATTLE_END_REASON_NONE = 0;</code>
     */
    const BATTLE_END_REASON_NONE = 0;
    /**
     * Generated from protobuf enum <code>BATTLE_END_REASON_ALL_DIE = 1;</code>
     */
    const BATTLE_END_REASON_ALL_DIE = 1;
    /**
     * Generated from protobuf enum <code>BATTLE_END_REASON_TURN_LIMIT = 2;</code>
     */
    const BATTLE_END_REASON_TURN_LIMIT = 2;

    private static $valueToName = [
        self::BATTLE_END_REASON_NONE => 'BATTLE_END_REASON_NONE',
        self::BATTLE_END_REASON_ALL_DIE => 'BATTLE_END_REASON_ALL_DIE',
        self::BATTLE_END_REASON_TURN_LIMIT => 'BATTLE_END_REASON_TURN_LIMIT',
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
