<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>PIKBNAHDDFL</code>
 */
class PIKBNAHDDFL
{
    /**
     * Generated from protobuf enum <code>DIFFICULTY_AJUSTMENT_SOURCE_NONE = 0;</code>
     */
    const DIFFICULTY_AJUSTMENT_SOURCE_NONE = 0;
    /**
     * Generated from protobuf enum <code>DIFFICULTY_AJUSTMENT_SOURCE_RAID = 1;</code>
     */
    const DIFFICULTY_AJUSTMENT_SOURCE_RAID = 1;
    /**
     * Generated from protobuf enum <code>DIFFICULTY_AJUSTMENT_SOURCE_EVENT = 2;</code>
     */
    const DIFFICULTY_AJUSTMENT_SOURCE_EVENT = 2;

    private static $valueToName = [
        self::DIFFICULTY_AJUSTMENT_SOURCE_NONE => 'DIFFICULTY_AJUSTMENT_SOURCE_NONE',
        self::DIFFICULTY_AJUSTMENT_SOURCE_RAID => 'DIFFICULTY_AJUSTMENT_SOURCE_RAID',
        self::DIFFICULTY_AJUSTMENT_SOURCE_EVENT => 'DIFFICULTY_AJUSTMENT_SOURCE_EVENT',
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

