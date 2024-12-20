<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>ExtraLineupType</code>
 */
class ExtraLineupType
{
    /**
     * Generated from protobuf enum <code>LINEUP_NONE = 0;</code>
     */
    const LINEUP_NONE = 0;
    /**
     * Generated from protobuf enum <code>LINEUP_CHALLENGE = 1;</code>
     */
    const LINEUP_CHALLENGE = 1;
    /**
     * Generated from protobuf enum <code>LINEUP_ROGUE = 2;</code>
     */
    const LINEUP_ROGUE = 2;
    /**
     * Generated from protobuf enum <code>LINEUP_CHALLENGE_2 = 3;</code>
     */
    const LINEUP_CHALLENGE_2 = 3;
    /**
     * Generated from protobuf enum <code>LINEUP_CHALLENGE_3 = 4;</code>
     */
    const LINEUP_CHALLENGE_3 = 4;
    /**
     * Generated from protobuf enum <code>LINEUP_ROGUE_CHALLENGE = 5;</code>
     */
    const LINEUP_ROGUE_CHALLENGE = 5;
    /**
     * Generated from protobuf enum <code>LINEUP_STAGE_TRIAL = 6;</code>
     */
    const LINEUP_STAGE_TRIAL = 6;
    /**
     * Generated from protobuf enum <code>LINEUP_ROGUE_TRIAL = 7;</code>
     */
    const LINEUP_ROGUE_TRIAL = 7;
    /**
     * Generated from protobuf enum <code>LINEUP_ACTIVITY = 8;</code>
     */
    const LINEUP_ACTIVITY = 8;
    /**
     * Generated from protobuf enum <code>LINEUP_BOXING_CLUB = 9;</code>
     */
    const LINEUP_BOXING_CLUB = 9;
    /**
     * Generated from protobuf enum <code>LINEUP_TREASURE_DUNGEON = 11;</code>
     */
    const LINEUP_TREASURE_DUNGEON = 11;
    /**
     * Generated from protobuf enum <code>LINEUP_CHESS_ROGUE = 12;</code>
     */
    const LINEUP_CHESS_ROGUE = 12;
    /**
     * Generated from protobuf enum <code>LINEUP_HELIOBUS = 13;</code>
     */
    const LINEUP_HELIOBUS = 13;
    /**
     * Generated from protobuf enum <code>LINEUP_TOURN_ROGUE = 14;</code>
     */
    const LINEUP_TOURN_ROGUE = 14;
    /**
     * Generated from protobuf enum <code>LINEUP_RELIC_ROGUE = 15;</code>
     */
    const LINEUP_RELIC_ROGUE = 15;
    /**
     * Generated from protobuf enum <code>LINEUP_ARCADE_ROGUE = 16;</code>
     */
    const LINEUP_ARCADE_ROGUE = 16;
    /**
     * Generated from protobuf enum <code>LINEUP_MAGIC_ROGUE = 17;</code>
     */
    const LINEUP_MAGIC_ROGUE = 17;

    private static $valueToName = [
        self::LINEUP_NONE => 'LINEUP_NONE',
        self::LINEUP_CHALLENGE => 'LINEUP_CHALLENGE',
        self::LINEUP_ROGUE => 'LINEUP_ROGUE',
        self::LINEUP_CHALLENGE_2 => 'LINEUP_CHALLENGE_2',
        self::LINEUP_CHALLENGE_3 => 'LINEUP_CHALLENGE_3',
        self::LINEUP_ROGUE_CHALLENGE => 'LINEUP_ROGUE_CHALLENGE',
        self::LINEUP_STAGE_TRIAL => 'LINEUP_STAGE_TRIAL',
        self::LINEUP_ROGUE_TRIAL => 'LINEUP_ROGUE_TRIAL',
        self::LINEUP_ACTIVITY => 'LINEUP_ACTIVITY',
        self::LINEUP_BOXING_CLUB => 'LINEUP_BOXING_CLUB',
        self::LINEUP_TREASURE_DUNGEON => 'LINEUP_TREASURE_DUNGEON',
        self::LINEUP_CHESS_ROGUE => 'LINEUP_CHESS_ROGUE',
        self::LINEUP_HELIOBUS => 'LINEUP_HELIOBUS',
        self::LINEUP_TOURN_ROGUE => 'LINEUP_TOURN_ROGUE',
        self::LINEUP_RELIC_ROGUE => 'LINEUP_RELIC_ROGUE',
        self::LINEUP_ARCADE_ROGUE => 'LINEUP_ARCADE_ROGUE',
        self::LINEUP_MAGIC_ROGUE => 'LINEUP_MAGIC_ROGUE',
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

