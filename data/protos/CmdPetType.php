<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * FMAKEIGFLAK
 *
 * Protobuf type <code>CmdPetType</code>
 */
class CmdPetType
{
    /**
     * Generated from protobuf enum <code>CmdPetTypeNone = 0;</code>
     */
    const CmdPetTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdSummonPetCsReq = 7616;</code>
     */
    const CmdSummonPetCsReq = 7616;
    /**
     * Generated from protobuf enum <code>CmdRecallPetScRsp = 7607;</code>
     */
    const CmdRecallPetScRsp = 7607;
    /**
     * Generated from protobuf enum <code>CmdGetPetDataCsReq = 7624;</code>
     */
    const CmdGetPetDataCsReq = 7624;
    /**
     * Generated from protobuf enum <code>CmdCurPetChangedScNotify = 7606;</code>
     */
    const CmdCurPetChangedScNotify = 7606;
    /**
     * Generated from protobuf enum <code>CmdRecallPetCsReq = 7610;</code>
     */
    const CmdRecallPetCsReq = 7610;
    /**
     * Generated from protobuf enum <code>CmdSummonPetScRsp = 7603;</code>
     */
    const CmdSummonPetScRsp = 7603;
    /**
     * Generated from protobuf enum <code>CmdGetPetDataScRsp = 7623;</code>
     */
    const CmdGetPetDataScRsp = 7623;

    private static $valueToName = [
        self::CmdPetTypeNone => 'CmdPetTypeNone',
        self::CmdSummonPetCsReq => 'CmdSummonPetCsReq',
        self::CmdRecallPetScRsp => 'CmdRecallPetScRsp',
        self::CmdGetPetDataCsReq => 'CmdGetPetDataCsReq',
        self::CmdCurPetChangedScNotify => 'CmdCurPetChangedScNotify',
        self::CmdRecallPetCsReq => 'CmdRecallPetCsReq',
        self::CmdSummonPetScRsp => 'CmdSummonPetScRsp',
        self::CmdGetPetDataScRsp => 'CmdGetPetDataScRsp',
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

