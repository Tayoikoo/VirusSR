<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * OJNIPFHNOFN
 *
 * Protobuf type <code>CmdRogueEndless</code>
 */
class CmdRogueEndless
{
    /**
     * Generated from protobuf enum <code>CmdRogueEndlessNone = 0;</code>
     */
    const CmdRogueEndlessNone = 0;
    /**
     * Generated from protobuf enum <code>CmdTakeRogueEndlessActivityPointRewardScRsp = 6004;</code>
     */
    const CmdTakeRogueEndlessActivityPointRewardScRsp = 6004;
    /**
     * Generated from protobuf enum <code>CmdTakeRogueEndlessActivityAllBonusRewardScRsp = 6007;</code>
     */
    const CmdTakeRogueEndlessActivityAllBonusRewardScRsp = 6007;
    /**
     * Generated from protobuf enum <code>CmdRogueEndlessActivityBattleEndScNotify = 6001;</code>
     */
    const CmdRogueEndlessActivityBattleEndScNotify = 6001;
    /**
     * Generated from protobuf enum <code>CmdGetRogueEndlessActivityDataCsReq = 6009;</code>
     */
    const CmdGetRogueEndlessActivityDataCsReq = 6009;
    /**
     * Generated from protobuf enum <code>CmdEnterRogueEndlessActivityStageScRsp = 6008;</code>
     */
    const CmdEnterRogueEndlessActivityStageScRsp = 6008;
    /**
     * Generated from protobuf enum <code>CmdGetRogueEndlessActivityDataScRsp = 6010;</code>
     */
    const CmdGetRogueEndlessActivityDataScRsp = 6010;
    /**
     * Generated from protobuf enum <code>CmdTakeRogueEndlessActivityAllBonusRewardCsReq = 6002;</code>
     */
    const CmdTakeRogueEndlessActivityAllBonusRewardCsReq = 6002;
    /**
     * Generated from protobuf enum <code>CmdEnterRogueEndlessActivityStageCsReq = 6003;</code>
     */
    const CmdEnterRogueEndlessActivityStageCsReq = 6003;
    /**
     * Generated from protobuf enum <code>CmdTakeRogueEndlessActivityPointRewardCsReq = 6005;</code>
     */
    const CmdTakeRogueEndlessActivityPointRewardCsReq = 6005;

    private static $valueToName = [
        self::CmdRogueEndlessNone => 'CmdRogueEndlessNone',
        self::CmdTakeRogueEndlessActivityPointRewardScRsp => 'CmdTakeRogueEndlessActivityPointRewardScRsp',
        self::CmdTakeRogueEndlessActivityAllBonusRewardScRsp => 'CmdTakeRogueEndlessActivityAllBonusRewardScRsp',
        self::CmdRogueEndlessActivityBattleEndScNotify => 'CmdRogueEndlessActivityBattleEndScNotify',
        self::CmdGetRogueEndlessActivityDataCsReq => 'CmdGetRogueEndlessActivityDataCsReq',
        self::CmdEnterRogueEndlessActivityStageScRsp => 'CmdEnterRogueEndlessActivityStageScRsp',
        self::CmdGetRogueEndlessActivityDataScRsp => 'CmdGetRogueEndlessActivityDataScRsp',
        self::CmdTakeRogueEndlessActivityAllBonusRewardCsReq => 'CmdTakeRogueEndlessActivityAllBonusRewardCsReq',
        self::CmdEnterRogueEndlessActivityStageCsReq => 'CmdEnterRogueEndlessActivityStageCsReq',
        self::CmdTakeRogueEndlessActivityPointRewardCsReq => 'CmdTakeRogueEndlessActivityPointRewardCsReq',
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

