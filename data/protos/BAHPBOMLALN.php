<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>BAHPBOMLALN</code>
 */
class BAHPBOMLALN
{
    /**
     * Generated from protobuf enum <code>CmdRaidTypeNone = 0;</code>
     */
    const CmdRaidTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdTakeChallengeRaidRewardScRsp = 2280;</code>
     */
    const CmdTakeChallengeRaidRewardScRsp = 2280;
    /**
     * Generated from protobuf enum <code>CmdDelSaveRaidScNotify = 2261;</code>
     */
    const CmdDelSaveRaidScNotify = 2261;
    /**
     * Generated from protobuf enum <code>CmdLeaveRaidCsReq = 2203;</code>
     */
    const CmdLeaveRaidCsReq = 2203;
    /**
     * Generated from protobuf enum <code>CmdGetAllSaveRaidCsReq = 2279;</code>
     */
    const CmdGetAllSaveRaidCsReq = 2279;
    /**
     * Generated from protobuf enum <code>CmdStartRaidScRsp = 2220;</code>
     */
    const CmdStartRaidScRsp = 2220;
    /**
     * Generated from protobuf enum <code>CmdRaidInfoNotify = 2239;</code>
     */
    const CmdRaidInfoNotify = 2239;
    /**
     * Generated from protobuf enum <code>CmdGetSaveRaidCsReq = 2248;</code>
     */
    const CmdGetSaveRaidCsReq = 2248;
    /**
     * Generated from protobuf enum <code>CmdSetClientRaidTargetCountScRsp = 2275;</code>
     */
    const CmdSetClientRaidTargetCountScRsp = 2275;
    /**
     * Generated from protobuf enum <code>CmdRaidKickByServerScNotify = 2225;</code>
     */
    const CmdRaidKickByServerScNotify = 2225;
    /**
     * Generated from protobuf enum <code>CmdGetAllSaveRaidScRsp = 2219;</code>
     */
    const CmdGetAllSaveRaidScRsp = 2219;
    /**
     * Generated from protobuf enum <code>CmdGetRaidInfoScRsp = 2274;</code>
     */
    const CmdGetRaidInfoScRsp = 2274;
    /**
     * Generated from protobuf enum <code>CmdGetSaveRaidScRsp = 2290;</code>
     */
    const CmdGetSaveRaidScRsp = 2290;
    /**
     * Generated from protobuf enum <code>CmdLeaveRaidScRsp = 2246;</code>
     */
    const CmdLeaveRaidScRsp = 2246;
    /**
     * Generated from protobuf enum <code>CmdSetClientRaidTargetCountCsReq = 2230;</code>
     */
    const CmdSetClientRaidTargetCountCsReq = 2230;
    /**
     * Generated from protobuf enum <code>CmdGetRaidInfoCsReq = 2247;</code>
     */
    const CmdGetRaidInfoCsReq = 2247;
    /**
     * Generated from protobuf enum <code>CmdChallengeRaidNotify = 2216;</code>
     */
    const CmdChallengeRaidNotify = 2216;
    /**
     * Generated from protobuf enum <code>CmdGetChallengeRaidInfoScRsp = 2234;</code>
     */
    const CmdGetChallengeRaidInfoScRsp = 2234;
    /**
     * Generated from protobuf enum <code>CmdTakeChallengeRaidRewardCsReq = 2237;</code>
     */
    const CmdTakeChallengeRaidRewardCsReq = 2237;
    /**
     * Generated from protobuf enum <code>CmdGetChallengeRaidInfoCsReq = 2253;</code>
     */
    const CmdGetChallengeRaidInfoCsReq = 2253;
    /**
     * Generated from protobuf enum <code>CmdStartRaidCsReq = 2259;</code>
     */
    const CmdStartRaidCsReq = 2259;

    private static $valueToName = [
        self::CmdRaidTypeNone => 'CmdRaidTypeNone',
        self::CmdTakeChallengeRaidRewardScRsp => 'CmdTakeChallengeRaidRewardScRsp',
        self::CmdDelSaveRaidScNotify => 'CmdDelSaveRaidScNotify',
        self::CmdLeaveRaidCsReq => 'CmdLeaveRaidCsReq',
        self::CmdGetAllSaveRaidCsReq => 'CmdGetAllSaveRaidCsReq',
        self::CmdStartRaidScRsp => 'CmdStartRaidScRsp',
        self::CmdRaidInfoNotify => 'CmdRaidInfoNotify',
        self::CmdGetSaveRaidCsReq => 'CmdGetSaveRaidCsReq',
        self::CmdSetClientRaidTargetCountScRsp => 'CmdSetClientRaidTargetCountScRsp',
        self::CmdRaidKickByServerScNotify => 'CmdRaidKickByServerScNotify',
        self::CmdGetAllSaveRaidScRsp => 'CmdGetAllSaveRaidScRsp',
        self::CmdGetRaidInfoScRsp => 'CmdGetRaidInfoScRsp',
        self::CmdGetSaveRaidScRsp => 'CmdGetSaveRaidScRsp',
        self::CmdLeaveRaidScRsp => 'CmdLeaveRaidScRsp',
        self::CmdSetClientRaidTargetCountCsReq => 'CmdSetClientRaidTargetCountCsReq',
        self::CmdGetRaidInfoCsReq => 'CmdGetRaidInfoCsReq',
        self::CmdChallengeRaidNotify => 'CmdChallengeRaidNotify',
        self::CmdGetChallengeRaidInfoScRsp => 'CmdGetChallengeRaidInfoScRsp',
        self::CmdTakeChallengeRaidRewardCsReq => 'CmdTakeChallengeRaidRewardCsReq',
        self::CmdGetChallengeRaidInfoCsReq => 'CmdGetChallengeRaidInfoCsReq',
        self::CmdStartRaidCsReq => 'CmdStartRaidCsReq',
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
