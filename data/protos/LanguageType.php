<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>LanguageType</code>
 */
class LanguageType
{
    /**
     * Generated from protobuf enum <code>LANGUAGE_NONE = 0;</code>
     */
    const LANGUAGE_NONE = 0;
    /**
     * Generated from protobuf enum <code>LANGUAGE_SC = 1;</code>
     */
    const LANGUAGE_SC = 1;
    /**
     * Generated from protobuf enum <code>LANGUAGE_TC = 2;</code>
     */
    const LANGUAGE_TC = 2;
    /**
     * Generated from protobuf enum <code>LANGUAGE_EN = 3;</code>
     */
    const LANGUAGE_EN = 3;
    /**
     * Generated from protobuf enum <code>LANGUAGE_KR = 4;</code>
     */
    const LANGUAGE_KR = 4;
    /**
     * Generated from protobuf enum <code>LANGUAGE_JP = 5;</code>
     */
    const LANGUAGE_JP = 5;
    /**
     * Generated from protobuf enum <code>LANGUAGE_FR = 6;</code>
     */
    const LANGUAGE_FR = 6;
    /**
     * Generated from protobuf enum <code>LANGUAGE_DE = 7;</code>
     */
    const LANGUAGE_DE = 7;
    /**
     * Generated from protobuf enum <code>LANGUAGE_ES = 8;</code>
     */
    const LANGUAGE_ES = 8;
    /**
     * Generated from protobuf enum <code>LANGUAGE_PT = 9;</code>
     */
    const LANGUAGE_PT = 9;
    /**
     * Generated from protobuf enum <code>LANGUAGE_RU = 10;</code>
     */
    const LANGUAGE_RU = 10;
    /**
     * Generated from protobuf enum <code>LANGUAGE_TH = 11;</code>
     */
    const LANGUAGE_TH = 11;
    /**
     * Generated from protobuf enum <code>LANGUAGE_VI = 12;</code>
     */
    const LANGUAGE_VI = 12;
    /**
     * Generated from protobuf enum <code>LANGUAGE_ID = 13;</code>
     */
    const LANGUAGE_ID = 13;

    private static $valueToName = [
        self::LANGUAGE_NONE => 'LANGUAGE_NONE',
        self::LANGUAGE_SC => 'LANGUAGE_SC',
        self::LANGUAGE_TC => 'LANGUAGE_TC',
        self::LANGUAGE_EN => 'LANGUAGE_EN',
        self::LANGUAGE_KR => 'LANGUAGE_KR',
        self::LANGUAGE_JP => 'LANGUAGE_JP',
        self::LANGUAGE_FR => 'LANGUAGE_FR',
        self::LANGUAGE_DE => 'LANGUAGE_DE',
        self::LANGUAGE_ES => 'LANGUAGE_ES',
        self::LANGUAGE_PT => 'LANGUAGE_PT',
        self::LANGUAGE_RU => 'LANGUAGE_RU',
        self::LANGUAGE_TH => 'LANGUAGE_TH',
        self::LANGUAGE_VI => 'LANGUAGE_VI',
        self::LANGUAGE_ID => 'LANGUAGE_ID',
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

