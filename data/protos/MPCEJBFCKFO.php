<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>MPCEJBFCKFO</code>
 */
class MPCEJBFCKFO
{
    /**
     * Generated from protobuf enum <code>MAIN_MISSION_SYNC_NONE = 0;</code>
     */
    const MAIN_MISSION_SYNC_NONE = 0;
    /**
     * Generated from protobuf enum <code>MAIN_MISSION_SYNC_MCV = 1;</code>
     */
    const MAIN_MISSION_SYNC_MCV = 1;

    private static $valueToName = [
        self::MAIN_MISSION_SYNC_NONE => 'MAIN_MISSION_SYNC_NONE',
        self::MAIN_MISSION_SYNC_MCV => 'MAIN_MISSION_SYNC_MCV',
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

