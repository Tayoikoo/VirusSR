<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>OELNNDOBEKP</code>
 */
class OELNNDOBEKP
{
    /**
     * Generated from protobuf enum <code>REBATTLE_TYPE_NONE = 0;</code>
     */
    const REBATTLE_TYPE_NONE = 0;
    /**
     * Generated from protobuf enum <code>REBATTLE_TYPE_REBATTLE_MIDWAY = 1;</code>
     */
    const REBATTLE_TYPE_REBATTLE_MIDWAY = 1;
    /**
     * Generated from protobuf enum <code>REBATTLE_TYPE_REBATTLE_LOSE = 2;</code>
     */
    const REBATTLE_TYPE_REBATTLE_LOSE = 2;
    /**
     * Generated from protobuf enum <code>REBATTLE_TYPE_REBATTLE_MIDWAY_LINEUP = 3;</code>
     */
    const REBATTLE_TYPE_REBATTLE_MIDWAY_LINEUP = 3;
    /**
     * Generated from protobuf enum <code>REBATTLE_TYPE_REBATTLE_LOSE_LINEUP = 4;</code>
     */
    const REBATTLE_TYPE_REBATTLE_LOSE_LINEUP = 4;
    /**
     * Generated from protobuf enum <code>REBATTLE_TYPE_QUIT_MIDWAY = 5;</code>
     */
    const REBATTLE_TYPE_QUIT_MIDWAY = 5;
    /**
     * Generated from protobuf enum <code>REBATTLE_TYPE_QUIT_LOSE = 6;</code>
     */
    const REBATTLE_TYPE_QUIT_LOSE = 6;

    private static $valueToName = [
        self::REBATTLE_TYPE_NONE => 'REBATTLE_TYPE_NONE',
        self::REBATTLE_TYPE_REBATTLE_MIDWAY => 'REBATTLE_TYPE_REBATTLE_MIDWAY',
        self::REBATTLE_TYPE_REBATTLE_LOSE => 'REBATTLE_TYPE_REBATTLE_LOSE',
        self::REBATTLE_TYPE_REBATTLE_MIDWAY_LINEUP => 'REBATTLE_TYPE_REBATTLE_MIDWAY_LINEUP',
        self::REBATTLE_TYPE_REBATTLE_LOSE_LINEUP => 'REBATTLE_TYPE_REBATTLE_LOSE_LINEUP',
        self::REBATTLE_TYPE_QUIT_MIDWAY => 'REBATTLE_TYPE_QUIT_MIDWAY',
        self::REBATTLE_TYPE_QUIT_LOSE => 'REBATTLE_TYPE_QUIT_LOSE',
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

