<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>HBKAAONKDBK</code>
 */
class HBKAAONKDBK
{
    /**
     * Generated from protobuf enum <code>CmdPamSkinTypeNone = 0;</code>
     */
    const CmdPamSkinTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdGetPamSkinDataCsReq = 8125;</code>
     */
    const CmdGetPamSkinDataCsReq = 8125;
    /**
     * Generated from protobuf enum <code>CmdSelectPamSkinScRsp = 8130;</code>
     */
    const CmdSelectPamSkinScRsp = 8130;
    /**
     * Generated from protobuf enum <code>CmdSelectPamSkinCsReq = 8135;</code>
     */
    const CmdSelectPamSkinCsReq = 8135;
    /**
     * Generated from protobuf enum <code>CmdGetPamSkinDataScRsp = 8128;</code>
     */
    const CmdGetPamSkinDataScRsp = 8128;
    /**
     * Generated from protobuf enum <code>CmdUnlockPamSkinScNotify = 8132;</code>
     */
    const CmdUnlockPamSkinScNotify = 8132;

    private static $valueToName = [
        self::CmdPamSkinTypeNone => 'CmdPamSkinTypeNone',
        self::CmdGetPamSkinDataCsReq => 'CmdGetPamSkinDataCsReq',
        self::CmdSelectPamSkinScRsp => 'CmdSelectPamSkinScRsp',
        self::CmdSelectPamSkinCsReq => 'CmdSelectPamSkinCsReq',
        self::CmdGetPamSkinDataScRsp => 'CmdGetPamSkinDataScRsp',
        self::CmdUnlockPamSkinScNotify => 'CmdUnlockPamSkinScNotify',
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

