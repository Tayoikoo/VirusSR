<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>HPPPNLJICMP</code>
 */
class HPPPNLJICMP
{
    /**
     * Generated from protobuf enum <code>CmdRedDotTypeNone = 0;</code>
     */
    const CmdRedDotTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdUpdateRedDotDataScRsp = 5946;</code>
     */
    const CmdUpdateRedDotDataScRsp = 5946;
    /**
     * Generated from protobuf enum <code>CmdGetAllRedDotDataScRsp = 5920;</code>
     */
    const CmdGetAllRedDotDataScRsp = 5920;
    /**
     * Generated from protobuf enum <code>CmdGetSingleRedDotParamGroupCsReq = 5939;</code>
     */
    const CmdGetSingleRedDotParamGroupCsReq = 5939;
    /**
     * Generated from protobuf enum <code>CmdGetSingleRedDotParamGroupScRsp = 5953;</code>
     */
    const CmdGetSingleRedDotParamGroupScRsp = 5953;
    /**
     * Generated from protobuf enum <code>CmdGetAllRedDotDataCsReq = 5959;</code>
     */
    const CmdGetAllRedDotDataCsReq = 5959;
    /**
     * Generated from protobuf enum <code>CmdUpdateRedDotDataCsReq = 5903;</code>
     */
    const CmdUpdateRedDotDataCsReq = 5903;

    private static $valueToName = [
        self::CmdRedDotTypeNone => 'CmdRedDotTypeNone',
        self::CmdUpdateRedDotDataScRsp => 'CmdUpdateRedDotDataScRsp',
        self::CmdGetAllRedDotDataScRsp => 'CmdGetAllRedDotDataScRsp',
        self::CmdGetSingleRedDotParamGroupCsReq => 'CmdGetSingleRedDotParamGroupCsReq',
        self::CmdGetSingleRedDotParamGroupScRsp => 'CmdGetSingleRedDotParamGroupScRsp',
        self::CmdGetAllRedDotDataCsReq => 'CmdGetAllRedDotDataCsReq',
        self::CmdUpdateRedDotDataCsReq => 'CmdUpdateRedDotDataCsReq',
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

