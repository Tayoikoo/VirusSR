<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>OCGPEDHNDBD</code>
 */
class OCGPEDHNDBD
{
    /**
     * Generated from protobuf enum <code>CmdExpeditionTypeNone = 0;</code>
     */
    const CmdExpeditionTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdTakeMultipleExpeditionRewardCsReq = 2519;</code>
     */
    const CmdTakeMultipleExpeditionRewardCsReq = 2519;
    /**
     * Generated from protobuf enum <code>CmdCancelActivityExpeditionCsReq = 2574;</code>
     */
    const CmdCancelActivityExpeditionCsReq = 2574;
    /**
     * Generated from protobuf enum <code>CmdAcceptActivityExpeditionScRsp = 2547;</code>
     */
    const CmdAcceptActivityExpeditionScRsp = 2547;
    /**
     * Generated from protobuf enum <code>CmdGetExpeditionDataScRsp = 2520;</code>
     */
    const CmdGetExpeditionDataScRsp = 2520;
    /**
     * Generated from protobuf enum <code>CmdExpeditionDataChangeScNotify = 2580;</code>
     */
    const CmdExpeditionDataChangeScNotify = 2580;
    /**
     * Generated from protobuf enum <code>CmdTakeMultipleActivityExpeditionRewardCsReq = 2525;</code>
     */
    const CmdTakeMultipleActivityExpeditionRewardCsReq = 2525;
    /**
     * Generated from protobuf enum <code>CmdTakeExpeditionRewardScRsp = 2537;</code>
     */
    const CmdTakeExpeditionRewardScRsp = 2537;
    /**
     * Generated from protobuf enum <code>CmdAcceptExpeditionScRsp = 2546;</code>
     */
    const CmdAcceptExpeditionScRsp = 2546;
    /**
     * Generated from protobuf enum <code>CmdCancelExpeditionScRsp = 2553;</code>
     */
    const CmdCancelExpeditionScRsp = 2553;
    /**
     * Generated from protobuf enum <code>CmdAcceptMultipleExpeditionCsReq = 2590;</code>
     */
    const CmdAcceptMultipleExpeditionCsReq = 2590;
    /**
     * Generated from protobuf enum <code>CmdAcceptActivityExpeditionCsReq = 2516;</code>
     */
    const CmdAcceptActivityExpeditionCsReq = 2516;
    /**
     * Generated from protobuf enum <code>CmdTakeActivityExpeditionRewardCsReq = 2575;</code>
     */
    const CmdTakeActivityExpeditionRewardCsReq = 2575;
    /**
     * Generated from protobuf enum <code>CmdAcceptMultipleExpeditionScRsp = 2579;</code>
     */
    const CmdAcceptMultipleExpeditionScRsp = 2579;
    /**
     * Generated from protobuf enum <code>CmdCancelActivityExpeditionScRsp = 2530;</code>
     */
    const CmdCancelActivityExpeditionScRsp = 2530;
    /**
     * Generated from protobuf enum <code>CmdTakeMultipleExpeditionRewardScRsp = 2561;</code>
     */
    const CmdTakeMultipleExpeditionRewardScRsp = 2561;
    /**
     * Generated from protobuf enum <code>CmdCancelExpeditionCsReq = 2539;</code>
     */
    const CmdCancelExpeditionCsReq = 2539;
    /**
     * Generated from protobuf enum <code>CmdTakeExpeditionRewardCsReq = 2534;</code>
     */
    const CmdTakeExpeditionRewardCsReq = 2534;
    /**
     * Generated from protobuf enum <code>CmdAcceptExpeditionCsReq = 2503;</code>
     */
    const CmdAcceptExpeditionCsReq = 2503;
    /**
     * Generated from protobuf enum <code>CmdTakeActivityExpeditionRewardScRsp = 2548;</code>
     */
    const CmdTakeActivityExpeditionRewardScRsp = 2548;
    /**
     * Generated from protobuf enum <code>CmdTakeMultipleActivityExpeditionRewardScRsp = 2529;</code>
     */
    const CmdTakeMultipleActivityExpeditionRewardScRsp = 2529;
    /**
     * Generated from protobuf enum <code>CmdGetExpeditionDataCsReq = 2559;</code>
     */
    const CmdGetExpeditionDataCsReq = 2559;

    private static $valueToName = [
        self::CmdExpeditionTypeNone => 'CmdExpeditionTypeNone',
        self::CmdTakeMultipleExpeditionRewardCsReq => 'CmdTakeMultipleExpeditionRewardCsReq',
        self::CmdCancelActivityExpeditionCsReq => 'CmdCancelActivityExpeditionCsReq',
        self::CmdAcceptActivityExpeditionScRsp => 'CmdAcceptActivityExpeditionScRsp',
        self::CmdGetExpeditionDataScRsp => 'CmdGetExpeditionDataScRsp',
        self::CmdExpeditionDataChangeScNotify => 'CmdExpeditionDataChangeScNotify',
        self::CmdTakeMultipleActivityExpeditionRewardCsReq => 'CmdTakeMultipleActivityExpeditionRewardCsReq',
        self::CmdTakeExpeditionRewardScRsp => 'CmdTakeExpeditionRewardScRsp',
        self::CmdAcceptExpeditionScRsp => 'CmdAcceptExpeditionScRsp',
        self::CmdCancelExpeditionScRsp => 'CmdCancelExpeditionScRsp',
        self::CmdAcceptMultipleExpeditionCsReq => 'CmdAcceptMultipleExpeditionCsReq',
        self::CmdAcceptActivityExpeditionCsReq => 'CmdAcceptActivityExpeditionCsReq',
        self::CmdTakeActivityExpeditionRewardCsReq => 'CmdTakeActivityExpeditionRewardCsReq',
        self::CmdAcceptMultipleExpeditionScRsp => 'CmdAcceptMultipleExpeditionScRsp',
        self::CmdCancelActivityExpeditionScRsp => 'CmdCancelActivityExpeditionScRsp',
        self::CmdTakeMultipleExpeditionRewardScRsp => 'CmdTakeMultipleExpeditionRewardScRsp',
        self::CmdCancelExpeditionCsReq => 'CmdCancelExpeditionCsReq',
        self::CmdTakeExpeditionRewardCsReq => 'CmdTakeExpeditionRewardCsReq',
        self::CmdAcceptExpeditionCsReq => 'CmdAcceptExpeditionCsReq',
        self::CmdTakeActivityExpeditionRewardScRsp => 'CmdTakeActivityExpeditionRewardScRsp',
        self::CmdTakeMultipleActivityExpeditionRewardScRsp => 'CmdTakeMultipleActivityExpeditionRewardScRsp',
        self::CmdGetExpeditionDataCsReq => 'CmdGetExpeditionDataCsReq',
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

