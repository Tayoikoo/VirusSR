<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>NODACJNFLIB</code>
 */
class NODACJNFLIB
{
    /**
     * Generated from protobuf enum <code>FIGHT_FEST_TYPE_NONE = 0;</code>
     */
    const FIGHT_FEST_TYPE_NONE = 0;
    /**
     * Generated from protobuf enum <code>FIGHT_FEST_TYPE_MAIN = 1;</code>
     */
    const FIGHT_FEST_TYPE_MAIN = 1;
    /**
     * Generated from protobuf enum <code>FIGHT_FEST_TYPE_SCORE = 2;</code>
     */
    const FIGHT_FEST_TYPE_SCORE = 2;
    /**
     * Generated from protobuf enum <code>FIGHT_FEST_TYPE_CHALLENGE = 3;</code>
     */
    const FIGHT_FEST_TYPE_CHALLENGE = 3;
    /**
     * Generated from protobuf enum <code>FIGHT_FEST_TYPE_TEACH = 4;</code>
     */
    const FIGHT_FEST_TYPE_TEACH = 4;

    private static $valueToName = [
        self::FIGHT_FEST_TYPE_NONE => 'FIGHT_FEST_TYPE_NONE',
        self::FIGHT_FEST_TYPE_MAIN => 'FIGHT_FEST_TYPE_MAIN',
        self::FIGHT_FEST_TYPE_SCORE => 'FIGHT_FEST_TYPE_SCORE',
        self::FIGHT_FEST_TYPE_CHALLENGE => 'FIGHT_FEST_TYPE_CHALLENGE',
        self::FIGHT_FEST_TYPE_TEACH => 'FIGHT_FEST_TYPE_TEACH',
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

