<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * JINBPAPJGKK
 *
 * Protobuf type <code>CmdRelicSmartWearType</code>
 */
class CmdRelicSmartWearType
{
    /**
     * Generated from protobuf enum <code>CmdRelicSmartWearTypeNone = 0;</code>
     */
    const CmdRelicSmartWearTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdRelicSmartWearGetPlanCsReq = 8270;</code>
     */
    const CmdRelicSmartWearGetPlanCsReq = 8270;
    /**
     * Generated from protobuf enum <code>CmdRelicSmartWearDeletePlanCsReq = 8255;</code>
     */
    const CmdRelicSmartWearDeletePlanCsReq = 8255;
    /**
     * Generated from protobuf enum <code>CmdRelicSmartWearGetPlanScRsp = 8265;</code>
     */
    const CmdRelicSmartWearGetPlanScRsp = 8265;
    /**
     * Generated from protobuf enum <code>CmdRelicSmartWearAddPlanScRsp = 8253;</code>
     */
    const CmdRelicSmartWearAddPlanScRsp = 8253;
    /**
     * Generated from protobuf enum <code>CmdRelicSmartWearUpdatePlanScRsp = 8256;</code>
     */
    const CmdRelicSmartWearUpdatePlanScRsp = 8256;
    /**
     * Generated from protobuf enum <code>CmdRelicSmartWearUpdatePlanCsReq = 8267;</code>
     */
    const CmdRelicSmartWearUpdatePlanCsReq = 8267;
    /**
     * Generated from protobuf enum <code>CmdRelicSmartWearAddPlanCsReq = 8257;</code>
     */
    const CmdRelicSmartWearAddPlanCsReq = 8257;
    /**
     * Generated from protobuf enum <code>CmdRelicSmartWearDeletePlanScRsp = 8260;</code>
     */
    const CmdRelicSmartWearDeletePlanScRsp = 8260;

    private static $valueToName = [
        self::CmdRelicSmartWearTypeNone => 'CmdRelicSmartWearTypeNone',
        self::CmdRelicSmartWearGetPlanCsReq => 'CmdRelicSmartWearGetPlanCsReq',
        self::CmdRelicSmartWearDeletePlanCsReq => 'CmdRelicSmartWearDeletePlanCsReq',
        self::CmdRelicSmartWearGetPlanScRsp => 'CmdRelicSmartWearGetPlanScRsp',
        self::CmdRelicSmartWearAddPlanScRsp => 'CmdRelicSmartWearAddPlanScRsp',
        self::CmdRelicSmartWearUpdatePlanScRsp => 'CmdRelicSmartWearUpdatePlanScRsp',
        self::CmdRelicSmartWearUpdatePlanCsReq => 'CmdRelicSmartWearUpdatePlanCsReq',
        self::CmdRelicSmartWearAddPlanCsReq => 'CmdRelicSmartWearAddPlanCsReq',
        self::CmdRelicSmartWearDeletePlanScRsp => 'CmdRelicSmartWearDeletePlanScRsp',
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
