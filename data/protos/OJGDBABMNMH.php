<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>OJGDBABMNMH</code>
 */
class OJGDBABMNMH
{
    /**
     * Generated from protobuf enum <code>SWORD_TRAINING_GAME_SETTLE_NONE = 0;</code>
     */
    const SWORD_TRAINING_GAME_SETTLE_NONE = 0;
    /**
     * Generated from protobuf enum <code>SWORD_TRAINING_GAME_SETTLE_FINISH = 1;</code>
     */
    const SWORD_TRAINING_GAME_SETTLE_FINISH = 1;
    /**
     * Generated from protobuf enum <code>SWORD_TRAINING_GAME_SETTLE_GIVE_UP = 2;</code>
     */
    const SWORD_TRAINING_GAME_SETTLE_GIVE_UP = 2;
    /**
     * Generated from protobuf enum <code>SWORD_TRAINING_GAME_SETTLE_BATTLE_FAILED = 3;</code>
     */
    const SWORD_TRAINING_GAME_SETTLE_BATTLE_FAILED = 3;
    /**
     * Generated from protobuf enum <code>SWORD_TRAINING_GAME_SETTLE_FORCE = 4;</code>
     */
    const SWORD_TRAINING_GAME_SETTLE_FORCE = 4;
    /**
     * Generated from protobuf enum <code>SWORD_TRAINING_GAME_SETTLE_BY_RESTORE = 5;</code>
     */
    const SWORD_TRAINING_GAME_SETTLE_BY_RESTORE = 5;

    private static $valueToName = [
        self::SWORD_TRAINING_GAME_SETTLE_NONE => 'SWORD_TRAINING_GAME_SETTLE_NONE',
        self::SWORD_TRAINING_GAME_SETTLE_FINISH => 'SWORD_TRAINING_GAME_SETTLE_FINISH',
        self::SWORD_TRAINING_GAME_SETTLE_GIVE_UP => 'SWORD_TRAINING_GAME_SETTLE_GIVE_UP',
        self::SWORD_TRAINING_GAME_SETTLE_BATTLE_FAILED => 'SWORD_TRAINING_GAME_SETTLE_BATTLE_FAILED',
        self::SWORD_TRAINING_GAME_SETTLE_FORCE => 'SWORD_TRAINING_GAME_SETTLE_FORCE',
        self::SWORD_TRAINING_GAME_SETTLE_BY_RESTORE => 'SWORD_TRAINING_GAME_SETTLE_BY_RESTORE',
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

