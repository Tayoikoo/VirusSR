<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>KIAJAHEJHEA</code>
 */
class KIAJAHEJHEA
{
    /**
     * Generated from protobuf enum <code>GROWTH_TARGET_FUNCTION_TYPE_INCLUDE_SKILLTREE_ON_DEMAND = 0;</code>
     */
    const GROWTH_TARGET_FUNCTION_TYPE_INCLUDE_SKILLTREE_ON_DEMAND = 0;

    private static $valueToName = [
        self::GROWTH_TARGET_FUNCTION_TYPE_INCLUDE_SKILLTREE_ON_DEMAND => 'GROWTH_TARGET_FUNCTION_TYPE_INCLUDE_SKILLTREE_ON_DEMAND',
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
