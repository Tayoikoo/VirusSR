<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>IMAMBFPNGKE</code>
 */
class IMAMBFPNGKE
{
    /**
     * Generated from protobuf enum <code>CmdMapRotationTypeNone = 0;</code>
     */
    const CmdMapRotationTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdLeaveMapRotationRegionScNotify = 6848;</code>
     */
    const CmdLeaveMapRotationRegionScNotify = 6848;
    /**
     * Generated from protobuf enum <code>CmdEnterMapRotationRegionCsReq = 6859;</code>
     */
    const CmdEnterMapRotationRegionCsReq = 6859;
    /**
     * Generated from protobuf enum <code>CmdResetMapRotationRegionCsReq = 6830;</code>
     */
    const CmdResetMapRotationRegionCsReq = 6830;
    /**
     * Generated from protobuf enum <code>CmdRotateMapCsReq = 6834;</code>
     */
    const CmdRotateMapCsReq = 6834;
    /**
     * Generated from protobuf enum <code>CmdLeaveMapRotationRegionCsReq = 6880;</code>
     */
    const CmdLeaveMapRotationRegionCsReq = 6880;
    /**
     * Generated from protobuf enum <code>CmdRemoveRotaterScRsp = 6861;</code>
     */
    const CmdRemoveRotaterScRsp = 6861;
    /**
     * Generated from protobuf enum <code>CmdUpdateMapRotationDataScNotify = 6879;</code>
     */
    const CmdUpdateMapRotationDataScNotify = 6879;
    /**
     * Generated from protobuf enum <code>CmdDeployRotaterCsReq = 6839;</code>
     */
    const CmdDeployRotaterCsReq = 6839;
    /**
     * Generated from protobuf enum <code>CmdLeaveMapRotationRegionScRsp = 6816;</code>
     */
    const CmdLeaveMapRotationRegionScRsp = 6816;
    /**
     * Generated from protobuf enum <code>CmdInteractChargerScRsp = 6846;</code>
     */
    const CmdInteractChargerScRsp = 6846;
    /**
     * Generated from protobuf enum <code>CmdEnterMapRotationRegionScRsp = 6820;</code>
     */
    const CmdEnterMapRotationRegionScRsp = 6820;
    /**
     * Generated from protobuf enum <code>CmdDeployRotaterScRsp = 6853;</code>
     */
    const CmdDeployRotaterScRsp = 6853;
    /**
     * Generated from protobuf enum <code>CmdUpdateEnergyScNotify = 6890;</code>
     */
    const CmdUpdateEnergyScNotify = 6890;
    /**
     * Generated from protobuf enum <code>CmdResetMapRotationRegionScRsp = 6875;</code>
     */
    const CmdResetMapRotationRegionScRsp = 6875;
    /**
     * Generated from protobuf enum <code>CmdInteractChargerCsReq = 6803;</code>
     */
    const CmdInteractChargerCsReq = 6803;
    /**
     * Generated from protobuf enum <code>CmdGetMapRotationDataCsReq = 6847;</code>
     */
    const CmdGetMapRotationDataCsReq = 6847;
    /**
     * Generated from protobuf enum <code>CmdGetMapRotationDataScRsp = 6874;</code>
     */
    const CmdGetMapRotationDataScRsp = 6874;
    /**
     * Generated from protobuf enum <code>CmdRemoveRotaterCsReq = 6819;</code>
     */
    const CmdRemoveRotaterCsReq = 6819;
    /**
     * Generated from protobuf enum <code>CmdRotateMapScRsp = 6837;</code>
     */
    const CmdRotateMapScRsp = 6837;
    /**
     * Generated from protobuf enum <code>CmdUpdateRotaterScNotify = 6825;</code>
     */
    const CmdUpdateRotaterScNotify = 6825;

    private static $valueToName = [
        self::CmdMapRotationTypeNone => 'CmdMapRotationTypeNone',
        self::CmdLeaveMapRotationRegionScNotify => 'CmdLeaveMapRotationRegionScNotify',
        self::CmdEnterMapRotationRegionCsReq => 'CmdEnterMapRotationRegionCsReq',
        self::CmdResetMapRotationRegionCsReq => 'CmdResetMapRotationRegionCsReq',
        self::CmdRotateMapCsReq => 'CmdRotateMapCsReq',
        self::CmdLeaveMapRotationRegionCsReq => 'CmdLeaveMapRotationRegionCsReq',
        self::CmdRemoveRotaterScRsp => 'CmdRemoveRotaterScRsp',
        self::CmdUpdateMapRotationDataScNotify => 'CmdUpdateMapRotationDataScNotify',
        self::CmdDeployRotaterCsReq => 'CmdDeployRotaterCsReq',
        self::CmdLeaveMapRotationRegionScRsp => 'CmdLeaveMapRotationRegionScRsp',
        self::CmdInteractChargerScRsp => 'CmdInteractChargerScRsp',
        self::CmdEnterMapRotationRegionScRsp => 'CmdEnterMapRotationRegionScRsp',
        self::CmdDeployRotaterScRsp => 'CmdDeployRotaterScRsp',
        self::CmdUpdateEnergyScNotify => 'CmdUpdateEnergyScNotify',
        self::CmdResetMapRotationRegionScRsp => 'CmdResetMapRotationRegionScRsp',
        self::CmdInteractChargerCsReq => 'CmdInteractChargerCsReq',
        self::CmdGetMapRotationDataCsReq => 'CmdGetMapRotationDataCsReq',
        self::CmdGetMapRotationDataScRsp => 'CmdGetMapRotationDataScRsp',
        self::CmdRemoveRotaterCsReq => 'CmdRemoveRotaterCsReq',
        self::CmdRotateMapScRsp => 'CmdRotateMapScRsp',
        self::CmdUpdateRotaterScNotify => 'CmdUpdateRotaterScNotify',
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
