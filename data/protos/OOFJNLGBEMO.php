<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>OOFJNLGBEMO</code>
 */
class OOFJNLGBEMO
{
    /**
     * Generated from protobuf enum <code>CmdOfferingTypeNone = 0;</code>
     */
    const CmdOfferingTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdSubmitOfferingItemCsReq = 6935;</code>
     */
    const CmdSubmitOfferingItemCsReq = 6935;
    /**
     * Generated from protobuf enum <code>CmdSubmitOfferingItemScRsp = 6930;</code>
     */
    const CmdSubmitOfferingItemScRsp = 6930;
    /**
     * Generated from protobuf enum <code>CmdGetOfferingInfoScRsp = 6928;</code>
     */
    const CmdGetOfferingInfoScRsp = 6928;
    /**
     * Generated from protobuf enum <code>CmdOfferingInfoScNotify = 6924;</code>
     */
    const CmdOfferingInfoScNotify = 6924;
    /**
     * Generated from protobuf enum <code>CmdTakeOfferingRewardScRsp = 6923;</code>
     */
    const CmdTakeOfferingRewardScRsp = 6923;
    /**
     * Generated from protobuf enum <code>CmdTakeOfferingRewardCsReq = 6932;</code>
     */
    const CmdTakeOfferingRewardCsReq = 6932;
    /**
     * Generated from protobuf enum <code>CmdGetOfferingInfoCsReq = 6925;</code>
     */
    const CmdGetOfferingInfoCsReq = 6925;

    private static $valueToName = [
        self::CmdOfferingTypeNone => 'CmdOfferingTypeNone',
        self::CmdSubmitOfferingItemCsReq => 'CmdSubmitOfferingItemCsReq',
        self::CmdSubmitOfferingItemScRsp => 'CmdSubmitOfferingItemScRsp',
        self::CmdGetOfferingInfoScRsp => 'CmdGetOfferingInfoScRsp',
        self::CmdOfferingInfoScNotify => 'CmdOfferingInfoScNotify',
        self::CmdTakeOfferingRewardScRsp => 'CmdTakeOfferingRewardScRsp',
        self::CmdTakeOfferingRewardCsReq => 'CmdTakeOfferingRewardCsReq',
        self::CmdGetOfferingInfoCsReq => 'CmdGetOfferingInfoCsReq',
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
