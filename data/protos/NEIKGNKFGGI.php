<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>NEIKGNKFGGI</code>
 */
class NEIKGNKFGGI
{
    /**
     * Generated from protobuf enum <code>MONOPOLY_SOCIAL_EVENT_STATUS_NONE = 0;</code>
     */
    const MONOPOLY_SOCIAL_EVENT_STATUS_NONE = 0;
    /**
     * Generated from protobuf enum <code>MONOPOLY_SOCIAL_EVENT_STATUS_WAITING_SELECT_FRIEND = 1;</code>
     */
    const MONOPOLY_SOCIAL_EVENT_STATUS_WAITING_SELECT_FRIEND = 1;

    private static $valueToName = [
        self::MONOPOLY_SOCIAL_EVENT_STATUS_NONE => 'MONOPOLY_SOCIAL_EVENT_STATUS_NONE',
        self::MONOPOLY_SOCIAL_EVENT_STATUS_WAITING_SELECT_FRIEND => 'MONOPOLY_SOCIAL_EVENT_STATUS_WAITING_SELECT_FRIEND',
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

