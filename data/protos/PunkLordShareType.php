<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>PunkLordShareType</code>
 */
class PunkLordShareType
{
    /**
     * Generated from protobuf enum <code>PUNK_LORD_SHARE_TYPE_NONE = 0;</code>
     */
    const PUNK_LORD_SHARE_TYPE_NONE = 0;
    /**
     * Generated from protobuf enum <code>PUNK_LORD_SHARE_TYPE_FRIEND = 1;</code>
     */
    const PUNK_LORD_SHARE_TYPE_FRIEND = 1;
    /**
     * Generated from protobuf enum <code>PUNK_LORD_SHARE_TYPE_ALL = 2;</code>
     */
    const PUNK_LORD_SHARE_TYPE_ALL = 2;

    private static $valueToName = [
        self::PUNK_LORD_SHARE_TYPE_NONE => 'PUNK_LORD_SHARE_TYPE_NONE',
        self::PUNK_LORD_SHARE_TYPE_FRIEND => 'PUNK_LORD_SHARE_TYPE_FRIEND',
        self::PUNK_LORD_SHARE_TYPE_ALL => 'PUNK_LORD_SHARE_TYPE_ALL',
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
