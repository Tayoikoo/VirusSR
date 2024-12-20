<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>PunkLordMonsterInfoNotifyReason</code>
 */
class PunkLordMonsterInfoNotifyReason
{
    /**
     * Generated from protobuf enum <code>PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_NONE = 0;</code>
     */
    const PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_NONE = 0;
    /**
     * Generated from protobuf enum <code>PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_ENTER_RAID = 1;</code>
     */
    const PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_ENTER_RAID = 1;
    /**
     * Generated from protobuf enum <code>PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_BATTLE_END = 2;</code>
     */
    const PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_BATTLE_END = 2;
    /**
     * Generated from protobuf enum <code>PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_LEAVE_RAID = 3;</code>
     */
    const PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_LEAVE_RAID = 3;

    private static $valueToName = [
        self::PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_NONE => 'PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_NONE',
        self::PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_ENTER_RAID => 'PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_ENTER_RAID',
        self::PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_BATTLE_END => 'PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_BATTLE_END',
        self::PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_LEAVE_RAID => 'PUNK_LORD_MONSTER_INFO_NOTIFY_REASON_LEAVE_RAID',
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

