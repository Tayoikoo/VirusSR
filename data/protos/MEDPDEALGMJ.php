<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>MEDPDEALGMJ</code>
 */
class MEDPDEALGMJ
{
    /**
     * Generated from protobuf enum <code>WORK_POS_NONE = 0;</code>
     */
    const WORK_POS_NONE = 0;
    /**
     * Generated from protobuf enum <code>WORK_POS_1 = 1;</code>
     */
    const WORK_POS_1 = 1;
    /**
     * Generated from protobuf enum <code>WORK_POS_2 = 2;</code>
     */
    const WORK_POS_2 = 2;
    /**
     * Generated from protobuf enum <code>WORK_POS_3 = 3;</code>
     */
    const WORK_POS_3 = 3;

    private static $valueToName = [
        self::WORK_POS_NONE => 'WORK_POS_NONE',
        self::WORK_POS_1 => 'WORK_POS_1',
        self::WORK_POS_2 => 'WORK_POS_2',
        self::WORK_POS_3 => 'WORK_POS_3',
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

