<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>DACMIBEKOFC</code>
 */
class DACMIBEKOFC
{
    /**
     * Generated from protobuf enum <code>CmdRogueEndlessNone = 0;</code>
     */
    const CmdRogueEndlessNone = 0;
    /**
     * Generated from protobuf enum <code>CmdTakeRogueEndlessActivityPointRewardCsReq = 6002;</code>
     */
    const CmdTakeRogueEndlessActivityPointRewardCsReq = 6002;
    /**
     * Generated from protobuf enum <code>CmdEnterRogueEndlessActivityStageCsReq = 6009;</code>
     */
    const CmdEnterRogueEndlessActivityStageCsReq = 6009;
    /**
     * Generated from protobuf enum <code>CmdRogueEndlessActivityBattleEndScNotify = 6001;</code>
     */
    const CmdRogueEndlessActivityBattleEndScNotify = 6001;
    /**
     * Generated from protobuf enum <code>CmdEnterRogueEndlessActivityStageScRsp = 6008;</code>
     */
    const CmdEnterRogueEndlessActivityStageScRsp = 6008;
    /**
     * Generated from protobuf enum <code>CmdTakeRogueEndlessActivityAllBonusRewardCsReq = 6007;</code>
     */
    const CmdTakeRogueEndlessActivityAllBonusRewardCsReq = 6007;
    /**
     * Generated from protobuf enum <code>CmdGetRogueEndlessActivityDataScRsp = 6005;</code>
     */
    const CmdGetRogueEndlessActivityDataScRsp = 6005;
    /**
     * Generated from protobuf enum <code>CmdGetRogueEndlessActivityDataCsReq = 6006;</code>
     */
    const CmdGetRogueEndlessActivityDataCsReq = 6006;
    /**
     * Generated from protobuf enum <code>CmdTakeRogueEndlessActivityPointRewardScRsp = 6010;</code>
     */
    const CmdTakeRogueEndlessActivityPointRewardScRsp = 6010;
    /**
     * Generated from protobuf enum <code>CmdTakeRogueEndlessActivityAllBonusRewardScRsp = 6003;</code>
     */
    const CmdTakeRogueEndlessActivityAllBonusRewardScRsp = 6003;

    private static $valueToName = [
        self::CmdRogueEndlessNone => 'CmdRogueEndlessNone',
        self::CmdTakeRogueEndlessActivityPointRewardCsReq => 'CmdTakeRogueEndlessActivityPointRewardCsReq',
        self::CmdEnterRogueEndlessActivityStageCsReq => 'CmdEnterRogueEndlessActivityStageCsReq',
        self::CmdRogueEndlessActivityBattleEndScNotify => 'CmdRogueEndlessActivityBattleEndScNotify',
        self::CmdEnterRogueEndlessActivityStageScRsp => 'CmdEnterRogueEndlessActivityStageScRsp',
        self::CmdTakeRogueEndlessActivityAllBonusRewardCsReq => 'CmdTakeRogueEndlessActivityAllBonusRewardCsReq',
        self::CmdGetRogueEndlessActivityDataScRsp => 'CmdGetRogueEndlessActivityDataScRsp',
        self::CmdGetRogueEndlessActivityDataCsReq => 'CmdGetRogueEndlessActivityDataCsReq',
        self::CmdTakeRogueEndlessActivityPointRewardScRsp => 'CmdTakeRogueEndlessActivityPointRewardScRsp',
        self::CmdTakeRogueEndlessActivityAllBonusRewardScRsp => 'CmdTakeRogueEndlessActivityAllBonusRewardScRsp',
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
