<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>HEACKDPIAEK</code>
 */
class HEACKDPIAEK
{
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_NONE = 0;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_NONE = 0;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_SELECT = 1;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_SELECT = 1;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_ENHANCE = 2;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_ENHANCE = 2;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MIRACLE = 3;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MIRACLE = 3;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_DIALOGUE = 4;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_DIALOGUE = 4;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_BONUS = 5;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_BONUS = 5;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_SHOP = 6;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_SHOP = 6;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_DICE = 7;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_DICE = 7;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_AEON = 8;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_AEON = 8;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_BOARD_EVENT = 9;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_BOARD_EVENT = 9;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MAZE_SKILL = 10;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MAZE_SKILL = 10;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_LEVEL_MECHANISM = 11;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_LEVEL_MECHANISM = 11;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_BUFF = 12;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_BUFF = 12;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_REFORGE = 13;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_REFORGE = 13;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MAGIC_UNIT_COMPOSE = 14;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MAGIC_UNIT_COMPOSE = 14;
    /**
     * Generated from protobuf enum <code>ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MAGIC_UNIT_REFORGE = 15;</code>
     */
    const ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MAGIC_UNIT_REFORGE = 15;

    private static $valueToName = [
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_NONE => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_NONE',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_SELECT => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_SELECT',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_ENHANCE => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_ENHANCE',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MIRACLE => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MIRACLE',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_DIALOGUE => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_DIALOGUE',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_BONUS => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_BONUS',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_SHOP => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_SHOP',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_DICE => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_DICE',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_AEON => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_AEON',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_BOARD_EVENT => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_BOARD_EVENT',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MAZE_SKILL => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MAZE_SKILL',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_LEVEL_MECHANISM => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_LEVEL_MECHANISM',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_BUFF => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_BUFF',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_REFORGE => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_REFORGE',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MAGIC_UNIT_COMPOSE => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MAGIC_UNIT_COMPOSE',
        self::ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MAGIC_UNIT_REFORGE => 'ROGUE_COMMON_ACTION_RESULT_SOURCE_TYPE_MAGIC_UNIT_REFORGE',
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
