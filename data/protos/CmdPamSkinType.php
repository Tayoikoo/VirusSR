<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * GHGBIADGJPC
 *
 * Protobuf type <code>CmdPamSkinType</code>
 */
class CmdPamSkinType
{
    /**
     * Generated from protobuf enum <code>CmdPamSkinTypeNone = 0;</code>
     */
    const CmdPamSkinTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdGetPamSkinDataScRsp = 8135;</code>
     */
    const CmdGetPamSkinDataScRsp = 8135;
    /**
     * Generated from protobuf enum <code>CmdSelectPamSkinScRsp = 8123;</code>
     */
    const CmdSelectPamSkinScRsp = 8123;
    /**
     * Generated from protobuf enum <code>CmdSelectPamSkinCsReq = 8127;</code>
     */
    const CmdSelectPamSkinCsReq = 8127;
    /**
     * Generated from protobuf enum <code>CmdUnlockPamSkinScNotify = 8137;</code>
     */
    const CmdUnlockPamSkinScNotify = 8137;
    /**
     * Generated from protobuf enum <code>CmdGetPamSkinDataCsReq = 8140;</code>
     */
    const CmdGetPamSkinDataCsReq = 8140;

    private static $valueToName = [
        self::CmdPamSkinTypeNone => 'CmdPamSkinTypeNone',
        self::CmdGetPamSkinDataScRsp => 'CmdGetPamSkinDataScRsp',
        self::CmdSelectPamSkinScRsp => 'CmdSelectPamSkinScRsp',
        self::CmdSelectPamSkinCsReq => 'CmdSelectPamSkinCsReq',
        self::CmdUnlockPamSkinScNotify => 'CmdUnlockPamSkinScNotify',
        self::CmdGetPamSkinDataCsReq => 'CmdGetPamSkinDataCsReq',
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

