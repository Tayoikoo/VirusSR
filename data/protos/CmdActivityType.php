<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * OOCDHGFCJBK
 *
 * Protobuf type <code>CmdActivityType</code>
 */
class CmdActivityType
{
    /**
     * Generated from protobuf enum <code>CmdActivityTypeNone = 0;</code>
     */
    const CmdActivityTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdTakeLoginActivityRewardScRsp = 2627;</code>
     */
    const CmdTakeLoginActivityRewardScRsp = 2627;
    /**
     * Generated from protobuf enum <code>CmdGetMaterialSubmitActivityDataCsReq = 2675;</code>
     */
    const CmdGetMaterialSubmitActivityDataCsReq = 2675;
    /**
     * Generated from protobuf enum <code>CmdTakeLoginActivityRewardCsReq = 2684;</code>
     */
    const CmdTakeLoginActivityRewardCsReq = 2684;
    /**
     * Generated from protobuf enum <code>CmdTakeMaterialSubmitActivityRewardCsReq = 2653;</code>
     */
    const CmdTakeMaterialSubmitActivityRewardCsReq = 2653;
    /**
     * Generated from protobuf enum <code>CmdTakeTrialActivityRewardScRsp = 2699;</code>
     */
    const CmdTakeTrialActivityRewardScRsp = 2699;
    /**
     * Generated from protobuf enum <code>CmdTakeTrialActivityRewardCsReq = 2672;</code>
     */
    const CmdTakeTrialActivityRewardCsReq = 2672;
    /**
     * Generated from protobuf enum <code>CmdSubmitMaterialSubmitActivityMaterialScRsp = 2607;</code>
     */
    const CmdSubmitMaterialSubmitActivityMaterialScRsp = 2607;
    /**
     * Generated from protobuf enum <code>CmdTakeMaterialSubmitActivityRewardScRsp = 2690;</code>
     */
    const CmdTakeMaterialSubmitActivityRewardScRsp = 2690;
    /**
     * Generated from protobuf enum <code>CmdStartTrialActivityCsReq = 2603;</code>
     */
    const CmdStartTrialActivityCsReq = 2603;
    /**
     * Generated from protobuf enum <code>CmdEnterTrialActivityStageCsReq = 2645;</code>
     */
    const CmdEnterTrialActivityStageCsReq = 2645;
    /**
     * Generated from protobuf enum <code>CmdEnterTrialActivityStageScRsp = 2664;</code>
     */
    const CmdEnterTrialActivityStageScRsp = 2664;
    /**
     * Generated from protobuf enum <code>CmdLeaveTrialActivityCsReq = 2661;</code>
     */
    const CmdLeaveTrialActivityCsReq = 2661;
    /**
     * Generated from protobuf enum <code>CmdGetLoginActivityCsReq = 2636;</code>
     */
    const CmdGetLoginActivityCsReq = 2636;
    /**
     * Generated from protobuf enum <code>CmdSubmitMaterialSubmitActivityMaterialCsReq = 2626;</code>
     */
    const CmdSubmitMaterialSubmitActivityMaterialCsReq = 2626;
    /**
     * Generated from protobuf enum <code>CmdCurTrialActivityScNotify = 2633;</code>
     */
    const CmdCurTrialActivityScNotify = 2633;
    /**
     * Generated from protobuf enum <code>CmdStartTrialActivityScRsp = 2640;</code>
     */
    const CmdStartTrialActivityScRsp = 2640;
    /**
     * Generated from protobuf enum <code>CmdLeaveTrialActivityScRsp = 2630;</code>
     */
    const CmdLeaveTrialActivityScRsp = 2630;
    /**
     * Generated from protobuf enum <code>CmdGetActivityScheduleConfigCsReq = 2667;</code>
     */
    const CmdGetActivityScheduleConfigCsReq = 2667;
    /**
     * Generated from protobuf enum <code>CmdGetTrialActivityDataScRsp = 2692;</code>
     */
    const CmdGetTrialActivityDataScRsp = 2692;
    /**
     * Generated from protobuf enum <code>CmdGetTrialActivityDataCsReq = 2694;</code>
     */
    const CmdGetTrialActivityDataCsReq = 2694;
    /**
     * Generated from protobuf enum <code>CmdGetLoginActivityScRsp = 2695;</code>
     */
    const CmdGetLoginActivityScRsp = 2695;
    /**
     * Generated from protobuf enum <code>CmdGetActivityScheduleConfigScRsp = 2628;</code>
     */
    const CmdGetActivityScheduleConfigScRsp = 2628;
    /**
     * Generated from protobuf enum <code>CmdTrialActivityDataChangeScNotify = 2660;</code>
     */
    const CmdTrialActivityDataChangeScNotify = 2660;
    /**
     * Generated from protobuf enum <code>CmdGetMaterialSubmitActivityDataScRsp = 2619;</code>
     */
    const CmdGetMaterialSubmitActivityDataScRsp = 2619;

    private static $valueToName = [
        self::CmdActivityTypeNone => 'CmdActivityTypeNone',
        self::CmdTakeLoginActivityRewardScRsp => 'CmdTakeLoginActivityRewardScRsp',
        self::CmdGetMaterialSubmitActivityDataCsReq => 'CmdGetMaterialSubmitActivityDataCsReq',
        self::CmdTakeLoginActivityRewardCsReq => 'CmdTakeLoginActivityRewardCsReq',
        self::CmdTakeMaterialSubmitActivityRewardCsReq => 'CmdTakeMaterialSubmitActivityRewardCsReq',
        self::CmdTakeTrialActivityRewardScRsp => 'CmdTakeTrialActivityRewardScRsp',
        self::CmdTakeTrialActivityRewardCsReq => 'CmdTakeTrialActivityRewardCsReq',
        self::CmdSubmitMaterialSubmitActivityMaterialScRsp => 'CmdSubmitMaterialSubmitActivityMaterialScRsp',
        self::CmdTakeMaterialSubmitActivityRewardScRsp => 'CmdTakeMaterialSubmitActivityRewardScRsp',
        self::CmdStartTrialActivityCsReq => 'CmdStartTrialActivityCsReq',
        self::CmdEnterTrialActivityStageCsReq => 'CmdEnterTrialActivityStageCsReq',
        self::CmdEnterTrialActivityStageScRsp => 'CmdEnterTrialActivityStageScRsp',
        self::CmdLeaveTrialActivityCsReq => 'CmdLeaveTrialActivityCsReq',
        self::CmdGetLoginActivityCsReq => 'CmdGetLoginActivityCsReq',
        self::CmdSubmitMaterialSubmitActivityMaterialCsReq => 'CmdSubmitMaterialSubmitActivityMaterialCsReq',
        self::CmdCurTrialActivityScNotify => 'CmdCurTrialActivityScNotify',
        self::CmdStartTrialActivityScRsp => 'CmdStartTrialActivityScRsp',
        self::CmdLeaveTrialActivityScRsp => 'CmdLeaveTrialActivityScRsp',
        self::CmdGetActivityScheduleConfigCsReq => 'CmdGetActivityScheduleConfigCsReq',
        self::CmdGetTrialActivityDataScRsp => 'CmdGetTrialActivityDataScRsp',
        self::CmdGetTrialActivityDataCsReq => 'CmdGetTrialActivityDataCsReq',
        self::CmdGetLoginActivityScRsp => 'CmdGetLoginActivityScRsp',
        self::CmdGetActivityScheduleConfigScRsp => 'CmdGetActivityScheduleConfigScRsp',
        self::CmdTrialActivityDataChangeScNotify => 'CmdTrialActivityDataChangeScNotify',
        self::CmdGetMaterialSubmitActivityDataScRsp => 'CmdGetMaterialSubmitActivityDataScRsp',
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

