<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>MGGEMNJKHCF</code>
 */
class MGGEMNJKHCF
{
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_NONE = 0;</code>
     */
    const TREASURE_DUNGEON_RECORD_NONE = 0;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_ADD_HP = 1;</code>
     */
    const TREASURE_DUNGEON_RECORD_ADD_HP = 1;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_SUB_HP = 2;</code>
     */
    const TREASURE_DUNGEON_RECORD_SUB_HP = 2;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_SUB_HP_NO_EXPLORE = 3;</code>
     */
    const TREASURE_DUNGEON_RECORD_SUB_HP_NO_EXPLORE = 3;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_ADD_ATTACK = 5;</code>
     */
    const TREASURE_DUNGEON_RECORD_ADD_ATTACK = 5;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_ADD_DEFENCE = 6;</code>
     */
    const TREASURE_DUNGEON_RECORD_ADD_DEFENCE = 6;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_ADD_EXPLORE = 9;</code>
     */
    const TREASURE_DUNGEON_RECORD_ADD_EXPLORE = 9;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_SUB_EXPLORE = 10;</code>
     */
    const TREASURE_DUNGEON_RECORD_SUB_EXPLORE = 10;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_ADD_EXPLORE_OVERFLOW = 11;</code>
     */
    const TREASURE_DUNGEON_RECORD_ADD_EXPLORE_OVERFLOW = 11;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_SUMMON = 15;</code>
     */
    const TREASURE_DUNGEON_RECORD_SUMMON = 15;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_KILL = 16;</code>
     */
    const TREASURE_DUNGEON_RECORD_KILL = 16;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_ADD_TRIAL_AVATAR = 20;</code>
     */
    const TREASURE_DUNGEON_RECORD_ADD_TRIAL_AVATAR = 20;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_ADD_BUFF = 24;</code>
     */
    const TREASURE_DUNGEON_RECORD_ADD_BUFF = 24;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_UNLOCK_DOOR = 25;</code>
     */
    const TREASURE_DUNGEON_RECORD_UNLOCK_DOOR = 25;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_ENEMY_ENHANCE = 27;</code>
     */
    const TREASURE_DUNGEON_RECORD_ENEMY_ENHANCE = 27;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_ENEMY_WEAKEN = 28;</code>
     */
    const TREASURE_DUNGEON_RECORD_ENEMY_WEAKEN = 28;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_ENEMY_AURA_REMOVE = 29;</code>
     */
    const TREASURE_DUNGEON_RECORD_ENEMY_AURA_REMOVE = 29;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_SPECIAL_MONSTER_RUN = 30;</code>
     */
    const TREASURE_DUNGEON_RECORD_SPECIAL_MONSTER_RUN = 30;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_SPECIAL_MONSTER_KILL = 31;</code>
     */
    const TREASURE_DUNGEON_RECORD_SPECIAL_MONSTER_KILL = 31;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_BATTLE_BUFF_TRIGGER_SUCCESS = 33;</code>
     */
    const TREASURE_DUNGEON_RECORD_BATTLE_BUFF_TRIGGER_SUCCESS = 33;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_BATTLE_BUFF_TRIGGER_FAIL = 34;</code>
     */
    const TREASURE_DUNGEON_RECORD_BATTLE_BUFF_TRIGGER_FAIL = 34;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_BATTLE_BUFF_ADD_EXPLORE = 35;</code>
     */
    const TREASURE_DUNGEON_RECORD_BATTLE_BUFF_ADD_EXPLORE = 35;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_BATTLE_BUFF_OPEN_GRID = 36;</code>
     */
    const TREASURE_DUNGEON_RECORD_BATTLE_BUFF_OPEN_GRID = 36;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_BATTLE_BUFF_ADD_ITEM = 37;</code>
     */
    const TREASURE_DUNGEON_RECORD_BATTLE_BUFF_ADD_ITEM = 37;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_AVATAR_DEAD = 40;</code>
     */
    const TREASURE_DUNGEON_RECORD_AVATAR_DEAD = 40;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_TRIAL_AVATAR_DEAD = 41;</code>
     */
    const TREASURE_DUNGEON_RECORD_TRIAL_AVATAR_DEAD = 41;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_ALL_AVATAR_DEAD = 42;</code>
     */
    const TREASURE_DUNGEON_RECORD_ALL_AVATAR_DEAD = 42;
    /**
     * Generated from protobuf enum <code>TREASURE_DUNGEON_RECORD_OPEN_ITEM_CHEST = 43;</code>
     */
    const TREASURE_DUNGEON_RECORD_OPEN_ITEM_CHEST = 43;

    private static $valueToName = [
        self::TREASURE_DUNGEON_RECORD_NONE => 'TREASURE_DUNGEON_RECORD_NONE',
        self::TREASURE_DUNGEON_RECORD_ADD_HP => 'TREASURE_DUNGEON_RECORD_ADD_HP',
        self::TREASURE_DUNGEON_RECORD_SUB_HP => 'TREASURE_DUNGEON_RECORD_SUB_HP',
        self::TREASURE_DUNGEON_RECORD_SUB_HP_NO_EXPLORE => 'TREASURE_DUNGEON_RECORD_SUB_HP_NO_EXPLORE',
        self::TREASURE_DUNGEON_RECORD_ADD_ATTACK => 'TREASURE_DUNGEON_RECORD_ADD_ATTACK',
        self::TREASURE_DUNGEON_RECORD_ADD_DEFENCE => 'TREASURE_DUNGEON_RECORD_ADD_DEFENCE',
        self::TREASURE_DUNGEON_RECORD_ADD_EXPLORE => 'TREASURE_DUNGEON_RECORD_ADD_EXPLORE',
        self::TREASURE_DUNGEON_RECORD_SUB_EXPLORE => 'TREASURE_DUNGEON_RECORD_SUB_EXPLORE',
        self::TREASURE_DUNGEON_RECORD_ADD_EXPLORE_OVERFLOW => 'TREASURE_DUNGEON_RECORD_ADD_EXPLORE_OVERFLOW',
        self::TREASURE_DUNGEON_RECORD_SUMMON => 'TREASURE_DUNGEON_RECORD_SUMMON',
        self::TREASURE_DUNGEON_RECORD_KILL => 'TREASURE_DUNGEON_RECORD_KILL',
        self::TREASURE_DUNGEON_RECORD_ADD_TRIAL_AVATAR => 'TREASURE_DUNGEON_RECORD_ADD_TRIAL_AVATAR',
        self::TREASURE_DUNGEON_RECORD_ADD_BUFF => 'TREASURE_DUNGEON_RECORD_ADD_BUFF',
        self::TREASURE_DUNGEON_RECORD_UNLOCK_DOOR => 'TREASURE_DUNGEON_RECORD_UNLOCK_DOOR',
        self::TREASURE_DUNGEON_RECORD_ENEMY_ENHANCE => 'TREASURE_DUNGEON_RECORD_ENEMY_ENHANCE',
        self::TREASURE_DUNGEON_RECORD_ENEMY_WEAKEN => 'TREASURE_DUNGEON_RECORD_ENEMY_WEAKEN',
        self::TREASURE_DUNGEON_RECORD_ENEMY_AURA_REMOVE => 'TREASURE_DUNGEON_RECORD_ENEMY_AURA_REMOVE',
        self::TREASURE_DUNGEON_RECORD_SPECIAL_MONSTER_RUN => 'TREASURE_DUNGEON_RECORD_SPECIAL_MONSTER_RUN',
        self::TREASURE_DUNGEON_RECORD_SPECIAL_MONSTER_KILL => 'TREASURE_DUNGEON_RECORD_SPECIAL_MONSTER_KILL',
        self::TREASURE_DUNGEON_RECORD_BATTLE_BUFF_TRIGGER_SUCCESS => 'TREASURE_DUNGEON_RECORD_BATTLE_BUFF_TRIGGER_SUCCESS',
        self::TREASURE_DUNGEON_RECORD_BATTLE_BUFF_TRIGGER_FAIL => 'TREASURE_DUNGEON_RECORD_BATTLE_BUFF_TRIGGER_FAIL',
        self::TREASURE_DUNGEON_RECORD_BATTLE_BUFF_ADD_EXPLORE => 'TREASURE_DUNGEON_RECORD_BATTLE_BUFF_ADD_EXPLORE',
        self::TREASURE_DUNGEON_RECORD_BATTLE_BUFF_OPEN_GRID => 'TREASURE_DUNGEON_RECORD_BATTLE_BUFF_OPEN_GRID',
        self::TREASURE_DUNGEON_RECORD_BATTLE_BUFF_ADD_ITEM => 'TREASURE_DUNGEON_RECORD_BATTLE_BUFF_ADD_ITEM',
        self::TREASURE_DUNGEON_RECORD_AVATAR_DEAD => 'TREASURE_DUNGEON_RECORD_AVATAR_DEAD',
        self::TREASURE_DUNGEON_RECORD_TRIAL_AVATAR_DEAD => 'TREASURE_DUNGEON_RECORD_TRIAL_AVATAR_DEAD',
        self::TREASURE_DUNGEON_RECORD_ALL_AVATAR_DEAD => 'TREASURE_DUNGEON_RECORD_ALL_AVATAR_DEAD',
        self::TREASURE_DUNGEON_RECORD_OPEN_ITEM_CHEST => 'TREASURE_DUNGEON_RECORD_OPEN_ITEM_CHEST',
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
