<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>NAEDMBKPMDP</code>
 */
class NAEDMBKPMDP
{
    /**
     * Generated from protobuf enum <code>ROGUE_TOURN_LAYER_STATUS_NONE = 0;</code>
     */
    const ROGUE_TOURN_LAYER_STATUS_NONE = 0;
    /**
     * Generated from protobuf enum <code>ROGUE_TOURN_LAYER_STATUS_PROCESSING = 1;</code>
     */
    const ROGUE_TOURN_LAYER_STATUS_PROCESSING = 1;
    /**
     * Generated from protobuf enum <code>ROGUE_TOURN_LAYER_STATUS_FINISH = 2;</code>
     */
    const ROGUE_TOURN_LAYER_STATUS_FINISH = 2;

    private static $valueToName = [
        self::ROGUE_TOURN_LAYER_STATUS_NONE => 'ROGUE_TOURN_LAYER_STATUS_NONE',
        self::ROGUE_TOURN_LAYER_STATUS_PROCESSING => 'ROGUE_TOURN_LAYER_STATUS_PROCESSING',
        self::ROGUE_TOURN_LAYER_STATUS_FINISH => 'ROGUE_TOURN_LAYER_STATUS_FINISH',
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

