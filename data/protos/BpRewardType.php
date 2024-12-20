<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>BpRewardType</code>
 */
class BpRewardType
{
    /**
     * Generated from protobuf enum <code>BP_REWARAD_TYPE_NONE = 0;</code>
     */
    const BP_REWARAD_TYPE_NONE = 0;
    /**
     * Generated from protobuf enum <code>BP_REWARAD_TYPE_FREE = 1;</code>
     */
    const BP_REWARAD_TYPE_FREE = 1;
    /**
     * Generated from protobuf enum <code>BP_REWARAD_TYPE_PREMIUM_1 = 2;</code>
     */
    const BP_REWARAD_TYPE_PREMIUM_1 = 2;
    /**
     * Generated from protobuf enum <code>BP_REWARAD_TYPE_PREMIUM_2 = 3;</code>
     */
    const BP_REWARAD_TYPE_PREMIUM_2 = 3;
    /**
     * Generated from protobuf enum <code>BP_REWARAD_TYPE_PREMIUM_OPTIONAL = 4;</code>
     */
    const BP_REWARAD_TYPE_PREMIUM_OPTIONAL = 4;

    private static $valueToName = [
        self::BP_REWARAD_TYPE_NONE => 'BP_REWARAD_TYPE_NONE',
        self::BP_REWARAD_TYPE_FREE => 'BP_REWARAD_TYPE_FREE',
        self::BP_REWARAD_TYPE_PREMIUM_1 => 'BP_REWARAD_TYPE_PREMIUM_1',
        self::BP_REWARAD_TYPE_PREMIUM_2 => 'BP_REWARAD_TYPE_PREMIUM_2',
        self::BP_REWARAD_TYPE_PREMIUM_OPTIONAL => 'BP_REWARAD_TYPE_PREMIUM_OPTIONAL',
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
