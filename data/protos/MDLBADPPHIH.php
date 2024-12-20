<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>MDLBADPPHIH</code>
 */
class MDLBADPPHIH
{
    /**
     * Generated from protobuf enum <code>ROGUE_TOURN_HANDBOOK_NONE = 0;</code>
     */
    const ROGUE_TOURN_HANDBOOK_NONE = 0;
    /**
     * Generated from protobuf enum <code>ROGUE_TOURN_HANDBOOK_SIMPLE_MIRACLE = 1;</code>
     */
    const ROGUE_TOURN_HANDBOOK_SIMPLE_MIRACLE = 1;
    /**
     * Generated from protobuf enum <code>ROGUE_TOURN_HANDBOOK_HEX_MIRACLE = 2;</code>
     */
    const ROGUE_TOURN_HANDBOOK_HEX_MIRACLE = 2;
    /**
     * Generated from protobuf enum <code>ROGUE_TOURN_HANDBOOK_BUFF = 3;</code>
     */
    const ROGUE_TOURN_HANDBOOK_BUFF = 3;
    /**
     * Generated from protobuf enum <code>ROGUE_TOURN_HANDBOOK_EVENT = 4;</code>
     */
    const ROGUE_TOURN_HANDBOOK_EVENT = 4;
    /**
     * Generated from protobuf enum <code>ROGUE_TOURN_HANDBOOK_FORMULA = 5;</code>
     */
    const ROGUE_TOURN_HANDBOOK_FORMULA = 5;

    private static $valueToName = [
        self::ROGUE_TOURN_HANDBOOK_NONE => 'ROGUE_TOURN_HANDBOOK_NONE',
        self::ROGUE_TOURN_HANDBOOK_SIMPLE_MIRACLE => 'ROGUE_TOURN_HANDBOOK_SIMPLE_MIRACLE',
        self::ROGUE_TOURN_HANDBOOK_HEX_MIRACLE => 'ROGUE_TOURN_HANDBOOK_HEX_MIRACLE',
        self::ROGUE_TOURN_HANDBOOK_BUFF => 'ROGUE_TOURN_HANDBOOK_BUFF',
        self::ROGUE_TOURN_HANDBOOK_EVENT => 'ROGUE_TOURN_HANDBOOK_EVENT',
        self::ROGUE_TOURN_HANDBOOK_FORMULA => 'ROGUE_TOURN_HANDBOOK_FORMULA',
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

