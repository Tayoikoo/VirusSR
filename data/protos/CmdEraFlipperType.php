<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * DNKDKMABMLF
 *
 * Protobuf type <code>CmdEraFlipperType</code>
 */
class CmdEraFlipperType
{
    /**
     * Generated from protobuf enum <code>CmdEraFlipperTypeNone = 0;</code>
     */
    const CmdEraFlipperTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdEnterEraFlipperRegionCsReq = 6559;</code>
     */
    const CmdEnterEraFlipperRegionCsReq = 6559;
    /**
     * Generated from protobuf enum <code>CmdEraFlipperDataChangeScNotify = 6597;</code>
     */
    const CmdEraFlipperDataChangeScNotify = 6597;
    /**
     * Generated from protobuf enum <code>CmdResetEraFlipperDataCsReq = 6565;</code>
     */
    const CmdResetEraFlipperDataCsReq = 6565;
    /**
     * Generated from protobuf enum <code>CmdChangeEraFlipperDataScRsp = 6573;</code>
     */
    const CmdChangeEraFlipperDataScRsp = 6573;
    /**
     * Generated from protobuf enum <code>CmdResetEraFlipperDataScRsp = 6599;</code>
     */
    const CmdResetEraFlipperDataScRsp = 6599;
    /**
     * Generated from protobuf enum <code>CmdChangeEraFlipperDataCsReq = 6580;</code>
     */
    const CmdChangeEraFlipperDataCsReq = 6580;
    /**
     * Generated from protobuf enum <code>CmdGetEraFlipperDataCsReq = 6562;</code>
     */
    const CmdGetEraFlipperDataCsReq = 6562;
    /**
     * Generated from protobuf enum <code>CmdGetEraFlipperDataScRsp = 6600;</code>
     */
    const CmdGetEraFlipperDataScRsp = 6600;
    /**
     * Generated from protobuf enum <code>CmdEnterEraFlipperRegionScRsp = 6593;</code>
     */
    const CmdEnterEraFlipperRegionScRsp = 6593;

    private static $valueToName = [
        self::CmdEraFlipperTypeNone => 'CmdEraFlipperTypeNone',
        self::CmdEnterEraFlipperRegionCsReq => 'CmdEnterEraFlipperRegionCsReq',
        self::CmdEraFlipperDataChangeScNotify => 'CmdEraFlipperDataChangeScNotify',
        self::CmdResetEraFlipperDataCsReq => 'CmdResetEraFlipperDataCsReq',
        self::CmdChangeEraFlipperDataScRsp => 'CmdChangeEraFlipperDataScRsp',
        self::CmdResetEraFlipperDataScRsp => 'CmdResetEraFlipperDataScRsp',
        self::CmdChangeEraFlipperDataCsReq => 'CmdChangeEraFlipperDataCsReq',
        self::CmdGetEraFlipperDataCsReq => 'CmdGetEraFlipperDataCsReq',
        self::CmdGetEraFlipperDataScRsp => 'CmdGetEraFlipperDataScRsp',
        self::CmdEnterEraFlipperRegionScRsp => 'CmdEnterEraFlipperRegionScRsp',
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

