<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>MailType</code>
 */
class MailType
{
    /**
     * Generated from protobuf enum <code>MAIL_TYPE_NORMAL = 0;</code>
     */
    const MAIL_TYPE_NORMAL = 0;
    /**
     * Generated from protobuf enum <code>MAIL_TYPE_STAR = 1;</code>
     */
    const MAIL_TYPE_STAR = 1;

    private static $valueToName = [
        self::MAIL_TYPE_NORMAL => 'MAIL_TYPE_NORMAL',
        self::MAIL_TYPE_STAR => 'MAIL_TYPE_STAR',
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

