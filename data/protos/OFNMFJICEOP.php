<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>OFNMFJICEOP</code>
 */
class OFNMFJICEOP
{
    /**
     * Generated from protobuf enum <code>OFFERING_STATE_NONE = 0;</code>
     */
    const OFFERING_STATE_NONE = 0;
    /**
     * Generated from protobuf enum <code>OFFERING_STATE_LOCK = 1;</code>
     */
    const OFFERING_STATE_LOCK = 1;
    /**
     * Generated from protobuf enum <code>OFFERING_STATE_OPEN = 2;</code>
     */
    const OFFERING_STATE_OPEN = 2;

    private static $valueToName = [
        self::OFFERING_STATE_NONE => 'OFFERING_STATE_NONE',
        self::OFFERING_STATE_LOCK => 'OFFERING_STATE_LOCK',
        self::OFFERING_STATE_OPEN => 'OFFERING_STATE_OPEN',
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
