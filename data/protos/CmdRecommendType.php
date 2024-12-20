<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * DJANENLMJEO
 *
 * Protobuf type <code>CmdRecommendType</code>
 */
class CmdRecommendType
{
    /**
     * Generated from protobuf enum <code>CMD_RECOMMEND_TYPE_NONE = 0;</code>
     */
    const CMD_RECOMMEND_TYPE_NONE = 0;
    /**
     * Generated from protobuf enum <code>CmdGetBigDataRecommendScRsp = 2443;</code>
     */
    const CmdGetBigDataRecommendScRsp = 2443;
    /**
     * Generated from protobuf enum <code>CmdGetChallengeRecommendLineupListScRsp = 2449;</code>
     */
    const CmdGetChallengeRecommendLineupListScRsp = 2449;
    /**
     * Generated from protobuf enum <code>CmdRelicAvatarRecommendScRsp = 2423;</code>
     */
    const CmdRelicAvatarRecommendScRsp = 2423;
    /**
     * Generated from protobuf enum <code>CmdRelicRecommendScRsp = 2450;</code>
     */
    const CmdRelicRecommendScRsp = 2450;
    /**
     * Generated from protobuf enum <code>CmdGetChallengeRecommendLineupListCsReq = 2415;</code>
     */
    const CmdGetChallengeRecommendLineupListCsReq = 2415;
    /**
     * Generated from protobuf enum <code>CmdRelicAvatarRecommendCsReq = 2430;</code>
     */
    const CmdRelicAvatarRecommendCsReq = 2430;
    /**
     * Generated from protobuf enum <code>CmdRelicRecommendCsReq = 2412;</code>
     */
    const CmdRelicRecommendCsReq = 2412;
    /**
     * Generated from protobuf enum <code>CmdGetBigDataRecommendCsReq = 2409;</code>
     */
    const CmdGetBigDataRecommendCsReq = 2409;

    private static $valueToName = [
        self::CMD_RECOMMEND_TYPE_NONE => 'CMD_RECOMMEND_TYPE_NONE',
        self::CmdGetBigDataRecommendScRsp => 'CmdGetBigDataRecommendScRsp',
        self::CmdGetChallengeRecommendLineupListScRsp => 'CmdGetChallengeRecommendLineupListScRsp',
        self::CmdRelicAvatarRecommendScRsp => 'CmdRelicAvatarRecommendScRsp',
        self::CmdRelicRecommendScRsp => 'CmdRelicRecommendScRsp',
        self::CmdGetChallengeRecommendLineupListCsReq => 'CmdGetChallengeRecommendLineupListCsReq',
        self::CmdRelicAvatarRecommendCsReq => 'CmdRelicAvatarRecommendCsReq',
        self::CmdRelicRecommendCsReq => 'CmdRelicRecommendCsReq',
        self::CmdGetBigDataRecommendCsReq => 'CmdGetBigDataRecommendCsReq',
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

