<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>KHLNFKMNPGN</code>
 */
class KHLNFKMNPGN
{
    /**
     * Generated from protobuf enum <code>FEVER_TIME_BATTLE_RANK_C = 0;</code>
     */
    const FEVER_TIME_BATTLE_RANK_C = 0;
    /**
     * Generated from protobuf enum <code>FEVER_TIME_BATTLE_RANK_B = 1;</code>
     */
    const FEVER_TIME_BATTLE_RANK_B = 1;
    /**
     * Generated from protobuf enum <code>FEVER_TIME_BATTLE_RANK_A = 2;</code>
     */
    const FEVER_TIME_BATTLE_RANK_A = 2;
    /**
     * Generated from protobuf enum <code>FEVER_TIME_BATTLE_RANK_S = 3;</code>
     */
    const FEVER_TIME_BATTLE_RANK_S = 3;
    /**
     * Generated from protobuf enum <code>FEVER_TIME_BATTLE_RANK_SS = 4;</code>
     */
    const FEVER_TIME_BATTLE_RANK_SS = 4;

    private static $valueToName = [
        self::FEVER_TIME_BATTLE_RANK_C => 'FEVER_TIME_BATTLE_RANK_C',
        self::FEVER_TIME_BATTLE_RANK_B => 'FEVER_TIME_BATTLE_RANK_B',
        self::FEVER_TIME_BATTLE_RANK_A => 'FEVER_TIME_BATTLE_RANK_A',
        self::FEVER_TIME_BATTLE_RANK_S => 'FEVER_TIME_BATTLE_RANK_S',
        self::FEVER_TIME_BATTLE_RANK_SS => 'FEVER_TIME_BATTLE_RANK_SS',
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

