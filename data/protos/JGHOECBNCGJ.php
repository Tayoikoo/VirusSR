<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>JGHOECBNCGJ</code>
 */
class JGHOECBNCGJ
{
    /**
     * Generated from protobuf enum <code>NORMAL_CREATE = 0;</code>
     */
    const NORMAL_CREATE = 0;
    /**
     * Generated from protobuf enum <code>FORM_CHANGE = 1;</code>
     */
    const FORM_CHANGE = 1;

    private static $valueToName = [
        self::NORMAL_CREATE => 'NORMAL_CREATE',
        self::FORM_CHANGE => 'FORM_CHANGE',
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
