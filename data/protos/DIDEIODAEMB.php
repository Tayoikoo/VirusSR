<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>DIDEIODAEMB</code>
 */
class DIDEIODAEMB
{
    /**
     * Generated from protobuf enum <code>PAGE_DESC_NONE = 0;</code>
     */
    const PAGE_DESC_NONE = 0;
    /**
     * Generated from protobuf enum <code>PAGE_DESC_SHOW_DETAIL = 1;</code>
     */
    const PAGE_DESC_SHOW_DETAIL = 1;
    /**
     * Generated from protobuf enum <code>PAGE_DESC_COLLAPSE = 2;</code>
     */
    const PAGE_DESC_COLLAPSE = 2;

    private static $valueToName = [
        self::PAGE_DESC_NONE => 'PAGE_DESC_NONE',
        self::PAGE_DESC_SHOW_DETAIL => 'PAGE_DESC_SHOW_DETAIL',
        self::PAGE_DESC_COLLAPSE => 'PAGE_DESC_COLLAPSE',
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

