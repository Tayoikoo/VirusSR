<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>CLILPLKGFDM</code>
 */
class CLILPLKGFDM
{
    /**
     * Generated from protobuf enum <code>SWORD_TRAINING_STATUS_TYPE_NONE = 0;</code>
     */
    const SWORD_TRAINING_STATUS_TYPE_NONE = 0;
    /**
     * Generated from protobuf enum <code>SWORD_TRAINING_STATUS_TYPE_POWER = 1;</code>
     */
    const SWORD_TRAINING_STATUS_TYPE_POWER = 1;
    /**
     * Generated from protobuf enum <code>SWORD_TRAINING_STATUS_TYPE_AGILITY = 2;</code>
     */
    const SWORD_TRAINING_STATUS_TYPE_AGILITY = 2;
    /**
     * Generated from protobuf enum <code>SWORD_TRAINING_STATUS_TYPE_TOUGHNESS = 3;</code>
     */
    const SWORD_TRAINING_STATUS_TYPE_TOUGHNESS = 3;
    /**
     * Generated from protobuf enum <code>SWORD_TRAINING_STATUS_TYPE_PERCEPTION = 4;</code>
     */
    const SWORD_TRAINING_STATUS_TYPE_PERCEPTION = 4;
    /**
     * Generated from protobuf enum <code>_SWORD_TRAINING_STATUS_TYPE_MAX = 5;</code>
     */
    const _SWORD_TRAINING_STATUS_TYPE_MAX = 5;

    private static $valueToName = [
        self::SWORD_TRAINING_STATUS_TYPE_NONE => 'SWORD_TRAINING_STATUS_TYPE_NONE',
        self::SWORD_TRAINING_STATUS_TYPE_POWER => 'SWORD_TRAINING_STATUS_TYPE_POWER',
        self::SWORD_TRAINING_STATUS_TYPE_AGILITY => 'SWORD_TRAINING_STATUS_TYPE_AGILITY',
        self::SWORD_TRAINING_STATUS_TYPE_TOUGHNESS => 'SWORD_TRAINING_STATUS_TYPE_TOUGHNESS',
        self::SWORD_TRAINING_STATUS_TYPE_PERCEPTION => 'SWORD_TRAINING_STATUS_TYPE_PERCEPTION',
        self::_SWORD_TRAINING_STATUS_TYPE_MAX => '_SWORD_TRAINING_STATUS_TYPE_MAX',
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

