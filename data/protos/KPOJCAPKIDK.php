<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>KPOJCAPKIDK</code>
 */
class KPOJCAPKIDK
{
    /**
     * Generated from protobuf enum <code>CmdFightActivityTypeNone = 0;</code>
     */
    const CmdFightActivityTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdGetFightActivityDataScRsp = 3620;</code>
     */
    const CmdGetFightActivityDataScRsp = 3620;
    /**
     * Generated from protobuf enum <code>CmdFightActivityDataChangeScNotify = 3603;</code>
     */
    const CmdFightActivityDataChangeScNotify = 3603;
    /**
     * Generated from protobuf enum <code>CmdGetFightActivityDataCsReq = 3659;</code>
     */
    const CmdGetFightActivityDataCsReq = 3659;
    /**
     * Generated from protobuf enum <code>CmdEnterFightActivityStageCsReq = 3646;</code>
     */
    const CmdEnterFightActivityStageCsReq = 3646;
    /**
     * Generated from protobuf enum <code>CmdTakeFightActivityRewardScRsp = 3634;</code>
     */
    const CmdTakeFightActivityRewardScRsp = 3634;
    /**
     * Generated from protobuf enum <code>CmdTakeFightActivityRewardCsReq = 3653;</code>
     */
    const CmdTakeFightActivityRewardCsReq = 3653;
    /**
     * Generated from protobuf enum <code>CmdEnterFightActivityStageScRsp = 3639;</code>
     */
    const CmdEnterFightActivityStageScRsp = 3639;

    private static $valueToName = [
        self::CmdFightActivityTypeNone => 'CmdFightActivityTypeNone',
        self::CmdGetFightActivityDataScRsp => 'CmdGetFightActivityDataScRsp',
        self::CmdFightActivityDataChangeScNotify => 'CmdFightActivityDataChangeScNotify',
        self::CmdGetFightActivityDataCsReq => 'CmdGetFightActivityDataCsReq',
        self::CmdEnterFightActivityStageCsReq => 'CmdEnterFightActivityStageCsReq',
        self::CmdTakeFightActivityRewardScRsp => 'CmdTakeFightActivityRewardScRsp',
        self::CmdTakeFightActivityRewardCsReq => 'CmdTakeFightActivityRewardCsReq',
        self::CmdEnterFightActivityStageScRsp => 'CmdEnterFightActivityStageScRsp',
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
