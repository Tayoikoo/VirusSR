<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>MIHEAGBCOMO</code>
 */
class MIHEAGBCOMO
{
    /**
     * Generated from protobuf enum <code>UPDATE_REDDOT_NONE = 0;</code>
     */
    const UPDATE_REDDOT_NONE = 0;
    /**
     * Generated from protobuf enum <code>UPDATE_REDDOT_ADD = 1;</code>
     */
    const UPDATE_REDDOT_ADD = 1;
    /**
     * Generated from protobuf enum <code>UPDATE_REDDOT_REPLACE = 2;</code>
     */
    const UPDATE_REDDOT_REPLACE = 2;

    private static $valueToName = [
        self::UPDATE_REDDOT_NONE => 'UPDATE_REDDOT_NONE',
        self::UPDATE_REDDOT_ADD => 'UPDATE_REDDOT_ADD',
        self::UPDATE_REDDOT_REPLACE => 'UPDATE_REDDOT_REPLACE',
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

