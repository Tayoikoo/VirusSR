<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>HJGEEFNGKGM</code>
 */
class HJGEEFNGKGM
{
    /**
     * Generated from protobuf enum <code>PLAYER_RETURN_NONE = 0;</code>
     */
    const PLAYER_RETURN_NONE = 0;
    /**
     * Generated from protobuf enum <code>PLAYER_RETURN_PROCESSING = 1;</code>
     */
    const PLAYER_RETURN_PROCESSING = 1;
    /**
     * Generated from protobuf enum <code>PLAYER_RETURN_FINISH = 2;</code>
     */
    const PLAYER_RETURN_FINISH = 2;

    private static $valueToName = [
        self::PLAYER_RETURN_NONE => 'PLAYER_RETURN_NONE',
        self::PLAYER_RETURN_PROCESSING => 'PLAYER_RETURN_PROCESSING',
        self::PLAYER_RETURN_FINISH => 'PLAYER_RETURN_FINISH',
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

