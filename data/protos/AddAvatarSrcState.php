<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>AddAvatarSrcState</code>
 */
class AddAvatarSrcState
{
    /**
     * Generated from protobuf enum <code>ADD_AVATAR_SRC_NONE = 0;</code>
     */
    const ADD_AVATAR_SRC_NONE = 0;
    /**
     * Generated from protobuf enum <code>ADD_AVATAR_SRC_GACHA = 1;</code>
     */
    const ADD_AVATAR_SRC_GACHA = 1;
    /**
     * Generated from protobuf enum <code>ADD_AVATAR_SRC_ROGUE = 2;</code>
     */
    const ADD_AVATAR_SRC_ROGUE = 2;

    private static $valueToName = [
        self::ADD_AVATAR_SRC_NONE => 'ADD_AVATAR_SRC_NONE',
        self::ADD_AVATAR_SRC_GACHA => 'ADD_AVATAR_SRC_GACHA',
        self::ADD_AVATAR_SRC_ROGUE => 'ADD_AVATAR_SRC_ROGUE',
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

