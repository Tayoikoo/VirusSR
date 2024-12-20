<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>LobbyCharacterType</code>
 */
class LobbyCharacterType
{
    /**
     * Generated from protobuf enum <code>LobbyCharacter_None = 0;</code>
     */
    const LobbyCharacter_None = 0;
    /**
     * Generated from protobuf enum <code>LobbyCharacter_Leader = 1;</code>
     */
    const LobbyCharacter_Leader = 1;
    /**
     * Generated from protobuf enum <code>LobbyCharacter_Member = 2;</code>
     */
    const LobbyCharacter_Member = 2;
    /**
     * Generated from protobuf enum <code>LobbyCharacter_Watcher = 3;</code>
     */
    const LobbyCharacter_Watcher = 3;

    private static $valueToName = [
        self::LobbyCharacter_None => 'LobbyCharacter_None',
        self::LobbyCharacter_Leader => 'LobbyCharacter_Leader',
        self::LobbyCharacter_Member => 'LobbyCharacter_Member',
        self::LobbyCharacter_Watcher => 'LobbyCharacter_Watcher',
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

