<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>BCBOIDLMKKO</code>
 */
class BCBOIDLMKKO
{
    /**
     * Generated from protobuf enum <code>ROGUE_MAGIC_SETTLE_REASON_NONE = 0;</code>
     */
    const ROGUE_MAGIC_SETTLE_REASON_NONE = 0;
    /**
     * Generated from protobuf enum <code>ROGUE_MAGIC_SETTLE_REASON_WIN = 1;</code>
     */
    const ROGUE_MAGIC_SETTLE_REASON_WIN = 1;
    /**
     * Generated from protobuf enum <code>ROGUE_MAGIC_SETTLE_REASON_FAIL = 2;</code>
     */
    const ROGUE_MAGIC_SETTLE_REASON_FAIL = 2;
    /**
     * Generated from protobuf enum <code>ROGUE_MAGIC_SETTLE_REASON_INTERRUPT = 3;</code>
     */
    const ROGUE_MAGIC_SETTLE_REASON_INTERRUPT = 3;

    private static $valueToName = [
        self::ROGUE_MAGIC_SETTLE_REASON_NONE => 'ROGUE_MAGIC_SETTLE_REASON_NONE',
        self::ROGUE_MAGIC_SETTLE_REASON_WIN => 'ROGUE_MAGIC_SETTLE_REASON_WIN',
        self::ROGUE_MAGIC_SETTLE_REASON_FAIL => 'ROGUE_MAGIC_SETTLE_REASON_FAIL',
        self::ROGUE_MAGIC_SETTLE_REASON_INTERRUPT => 'ROGUE_MAGIC_SETTLE_REASON_INTERRUPT',
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
