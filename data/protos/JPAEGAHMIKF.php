<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>JPAEGAHMIKF</code>
 */
class JPAEGAHMIKF
{
    /**
     * Generated from protobuf enum <code>kNone = 0;</code>
     */
    const kNone = 0;
    /**
     * Generated from protobuf enum <code>kkillEliteMonsterNum = 1;</code>
     */
    const kkillEliteMonsterNum = 1;
    /**
     * Generated from protobuf enum <code>kkillMonsterNum = 2;</code>
     */
    const kkillMonsterNum = 2;

    private static $valueToName = [
        self::kNone => 'kNone',
        self::kkillEliteMonsterNum => 'kkillEliteMonsterNum',
        self::kkillMonsterNum => 'kkillMonsterNum',
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

