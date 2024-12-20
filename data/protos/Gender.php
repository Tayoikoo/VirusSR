<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>Gender</code>
 */
class Gender
{
    /**
     * Generated from protobuf enum <code>GenderNone = 0;</code>
     */
    const GenderNone = 0;
    /**
     * Generated from protobuf enum <code>GenderMan = 1;</code>
     */
    const GenderMan = 1;
    /**
     * Generated from protobuf enum <code>GenderWoman = 2;</code>
     */
    const GenderWoman = 2;

    private static $valueToName = [
        self::GenderNone => 'GenderNone',
        self::GenderMan => 'GenderMan',
        self::GenderWoman => 'GenderWoman',
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

