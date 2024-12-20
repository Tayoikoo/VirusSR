<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>QuestStatus</code>
 */
class QuestStatus
{
    /**
     * Generated from protobuf enum <code>QUEST_NONE = 0;</code>
     */
    const QUEST_NONE = 0;
    /**
     * Generated from protobuf enum <code>QUEST_DOING = 1;</code>
     */
    const QUEST_DOING = 1;
    /**
     * Generated from protobuf enum <code>QUEST_FINISH = 2;</code>
     */
    const QUEST_FINISH = 2;
    /**
     * Generated from protobuf enum <code>QUEST_CLOSE = 3;</code>
     */
    const QUEST_CLOSE = 3;
    /**
     * Generated from protobuf enum <code>QUEST_DELETE = 4;</code>
     */
    const QUEST_DELETE = 4;

    private static $valueToName = [
        self::QUEST_NONE => 'QUEST_NONE',
        self::QUEST_DOING => 'QUEST_DOING',
        self::QUEST_FINISH => 'QUEST_FINISH',
        self::QUEST_CLOSE => 'QUEST_CLOSE',
        self::QUEST_DELETE => 'QUEST_DELETE',
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

