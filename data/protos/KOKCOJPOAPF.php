<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>KOKCOJPOAPF</code>
 */
class KOKCOJPOAPF
{
    /**
     * Generated from protobuf enum <code>CmdMultipleDropTypeNone = 0;</code>
     */
    const CmdMultipleDropTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdGetPlayerReturnMultiDropInfoScRsp = 4639;</code>
     */
    const CmdGetPlayerReturnMultiDropInfoScRsp = 4639;
    /**
     * Generated from protobuf enum <code>CmdGetPlayerReturnMultiDropInfoCsReq = 4646;</code>
     */
    const CmdGetPlayerReturnMultiDropInfoCsReq = 4646;
    /**
     * Generated from protobuf enum <code>CmdGetMultipleDropInfoCsReq = 4659;</code>
     */
    const CmdGetMultipleDropInfoCsReq = 4659;
    /**
     * Generated from protobuf enum <code>CmdMultipleDropInfoScNotify = 4603;</code>
     */
    const CmdMultipleDropInfoScNotify = 4603;
    /**
     * Generated from protobuf enum <code>CmdMultipleDropInfoNotify = 4653;</code>
     */
    const CmdMultipleDropInfoNotify = 4653;
    /**
     * Generated from protobuf enum <code>CmdGetMultipleDropInfoScRsp = 4620;</code>
     */
    const CmdGetMultipleDropInfoScRsp = 4620;

    private static $valueToName = [
        self::CmdMultipleDropTypeNone => 'CmdMultipleDropTypeNone',
        self::CmdGetPlayerReturnMultiDropInfoScRsp => 'CmdGetPlayerReturnMultiDropInfoScRsp',
        self::CmdGetPlayerReturnMultiDropInfoCsReq => 'CmdGetPlayerReturnMultiDropInfoCsReq',
        self::CmdGetMultipleDropInfoCsReq => 'CmdGetMultipleDropInfoCsReq',
        self::CmdMultipleDropInfoScNotify => 'CmdMultipleDropInfoScNotify',
        self::CmdMultipleDropInfoNotify => 'CmdMultipleDropInfoNotify',
        self::CmdGetMultipleDropInfoScRsp => 'CmdGetMultipleDropInfoScRsp',
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

