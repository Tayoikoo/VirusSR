<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>FCIDMCMIBFD</code>
 */
class FCIDMCMIBFD
{
    /**
     * Generated from protobuf enum <code>MatchThreeStatistics_None = 0;</code>
     */
    const MatchThreeStatistics_None = 0;
    /**
     * Generated from protobuf enum <code>MatchThreeStatistics_First = 1;</code>
     */
    const MatchThreeStatistics_First = 1;
    /**
     * Generated from protobuf enum <code>MatchThreeStatistics_Second = 2;</code>
     */
    const MatchThreeStatistics_Second = 2;
    /**
     * Generated from protobuf enum <code>MatchThreeStatistics_Third = 3;</code>
     */
    const MatchThreeStatistics_Third = 3;
    /**
     * Generated from protobuf enum <code>MatchThreeStatistics_Fruit = 4;</code>
     */
    const MatchThreeStatistics_Fruit = 4;
    /**
     * Generated from protobuf enum <code>MatchThreeStatistics_Skill = 5;</code>
     */
    const MatchThreeStatistics_Skill = 5;
    /**
     * Generated from protobuf enum <code>MatchThreeStatistics_Defeat = 6;</code>
     */
    const MatchThreeStatistics_Defeat = 6;
    /**
     * Generated from protobuf enum <code>MatchThreeStatistics_Bomb = 7;</code>
     */
    const MatchThreeStatistics_Bomb = 7;
    /**
     * Generated from protobuf enum <code>MatchThreeStatistics_Damage = 8;</code>
     */
    const MatchThreeStatistics_Damage = 8;
    /**
     * Generated from protobuf enum <code>MatchThreeStatistics_Energy = 9;</code>
     */
    const MatchThreeStatistics_Energy = 9;
    /**
     * Generated from protobuf enum <code>MatchThreeStatistics_SwapBomb = 10;</code>
     */
    const MatchThreeStatistics_SwapBomb = 10;

    private static $valueToName = [
        self::MatchThreeStatistics_None => 'MatchThreeStatistics_None',
        self::MatchThreeStatistics_First => 'MatchThreeStatistics_First',
        self::MatchThreeStatistics_Second => 'MatchThreeStatistics_Second',
        self::MatchThreeStatistics_Third => 'MatchThreeStatistics_Third',
        self::MatchThreeStatistics_Fruit => 'MatchThreeStatistics_Fruit',
        self::MatchThreeStatistics_Skill => 'MatchThreeStatistics_Skill',
        self::MatchThreeStatistics_Defeat => 'MatchThreeStatistics_Defeat',
        self::MatchThreeStatistics_Bomb => 'MatchThreeStatistics_Bomb',
        self::MatchThreeStatistics_Damage => 'MatchThreeStatistics_Damage',
        self::MatchThreeStatistics_Energy => 'MatchThreeStatistics_Energy',
        self::MatchThreeStatistics_SwapBomb => 'MatchThreeStatistics_SwapBomb',
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

