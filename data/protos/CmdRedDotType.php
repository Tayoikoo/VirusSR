<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * JFHPBANEDEG
 *
 * Protobuf type <code>CmdRedDotType</code>
 */
class CmdRedDotType
{
    /**
     * Generated from protobuf enum <code>CmdRedDotTypeNone = 0;</code>
     */
    const CmdRedDotTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdUpdateRedDotDataCsReq = 5984;</code>
     */
    const CmdUpdateRedDotDataCsReq = 5984;
    /**
     * Generated from protobuf enum <code>CmdGetSingleRedDotParamGroupScRsp = 5928;</code>
     */
    const CmdGetSingleRedDotParamGroupScRsp = 5928;
    /**
     * Generated from protobuf enum <code>CmdGetAllRedDotDataCsReq = 5936;</code>
     */
    const CmdGetAllRedDotDataCsReq = 5936;
    /**
     * Generated from protobuf enum <code>CmdGetAllRedDotDataScRsp = 5995;</code>
     */
    const CmdGetAllRedDotDataScRsp = 5995;
    /**
     * Generated from protobuf enum <code>CmdUpdateRedDotDataScRsp = 5927;</code>
     */
    const CmdUpdateRedDotDataScRsp = 5927;
    /**
     * Generated from protobuf enum <code>CmdGetSingleRedDotParamGroupCsReq = 5967;</code>
     */
    const CmdGetSingleRedDotParamGroupCsReq = 5967;

    private static $valueToName = [
        self::CmdRedDotTypeNone => 'CmdRedDotTypeNone',
        self::CmdUpdateRedDotDataCsReq => 'CmdUpdateRedDotDataCsReq',
        self::CmdGetSingleRedDotParamGroupScRsp => 'CmdGetSingleRedDotParamGroupScRsp',
        self::CmdGetAllRedDotDataCsReq => 'CmdGetAllRedDotDataCsReq',
        self::CmdGetAllRedDotDataScRsp => 'CmdGetAllRedDotDataScRsp',
        self::CmdUpdateRedDotDataScRsp => 'CmdUpdateRedDotDataScRsp',
        self::CmdGetSingleRedDotParamGroupCsReq => 'CmdGetSingleRedDotParamGroupCsReq',
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

