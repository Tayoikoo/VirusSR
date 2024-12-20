<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>NHFLDKBOPLA</code>
 */
class NHFLDKBOPLA
{
    /**
     * Generated from protobuf enum <code>WAYPOINT_TYPE_NONE = 0;</code>
     */
    const WAYPOINT_TYPE_NONE = 0;
    /**
     * Generated from protobuf enum <code>WAYPOINT_TYPE_STAGE = 1;</code>
     */
    const WAYPOINT_TYPE_STAGE = 1;
    /**
     * Generated from protobuf enum <code>WAYPOINT_TYPE_PLOT = 2;</code>
     */
    const WAYPOINT_TYPE_PLOT = 2;

    private static $valueToName = [
        self::WAYPOINT_TYPE_NONE => 'WAYPOINT_TYPE_NONE',
        self::WAYPOINT_TYPE_STAGE => 'WAYPOINT_TYPE_STAGE',
        self::WAYPOINT_TYPE_PLOT => 'WAYPOINT_TYPE_PLOT',
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

