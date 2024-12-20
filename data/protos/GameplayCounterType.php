<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>GameplayCounterType</code>
 */
class GameplayCounterType
{
    /**
     * Generated from protobuf enum <code>GAMEPLAY_COUNTER_NONE = 0;</code>
     */
    const GAMEPLAY_COUNTER_NONE = 0;
    /**
     * Generated from protobuf enum <code>GAMEPLAY_COUNTER_MONSTER_SNEAK_VISION = 280001;</code>
     */
    const GAMEPLAY_COUNTER_MONSTER_SNEAK_VISION = 280001;

    private static $valueToName = [
        self::GAMEPLAY_COUNTER_NONE => 'GAMEPLAY_COUNTER_NONE',
        self::GAMEPLAY_COUNTER_MONSTER_SNEAK_VISION => 'GAMEPLAY_COUNTER_MONSTER_SNEAK_VISION',
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

