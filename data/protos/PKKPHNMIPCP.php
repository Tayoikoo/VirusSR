<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>PKKPHNMIPCP</code>
 */
class PKKPHNMIPCP
{
    /**
     * Generated from protobuf enum <code>CmdMessageTypeNone = 0;</code>
     */
    const CmdMessageTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdGetNpcMessageGroupScRsp = 2720;</code>
     */
    const CmdGetNpcMessageGroupScRsp = 2720;
    /**
     * Generated from protobuf enum <code>CmdFinishSectionIdScRsp = 2737;</code>
     */
    const CmdFinishSectionIdScRsp = 2737;
    /**
     * Generated from protobuf enum <code>CmdFinishItemIdScRsp = 2753;</code>
     */
    const CmdFinishItemIdScRsp = 2753;
    /**
     * Generated from protobuf enum <code>CmdFinishPerformSectionIdCsReq = 2780;</code>
     */
    const CmdFinishPerformSectionIdCsReq = 2780;
    /**
     * Generated from protobuf enum <code>CmdGetNpcStatusCsReq = 2703;</code>
     */
    const CmdGetNpcStatusCsReq = 2703;
    /**
     * Generated from protobuf enum <code>CmdFinishItemIdCsReq = 2739;</code>
     */
    const CmdFinishItemIdCsReq = 2739;
    /**
     * Generated from protobuf enum <code>CmdFinishSectionIdCsReq = 2734;</code>
     */
    const CmdFinishSectionIdCsReq = 2734;
    /**
     * Generated from protobuf enum <code>CmdGetNpcMessageGroupCsReq = 2759;</code>
     */
    const CmdGetNpcMessageGroupCsReq = 2759;
    /**
     * Generated from protobuf enum <code>CmdFinishPerformSectionIdScRsp = 2716;</code>
     */
    const CmdFinishPerformSectionIdScRsp = 2716;
    /**
     * Generated from protobuf enum <code>CmdGetNpcStatusScRsp = 2746;</code>
     */
    const CmdGetNpcStatusScRsp = 2746;

    private static $valueToName = [
        self::CmdMessageTypeNone => 'CmdMessageTypeNone',
        self::CmdGetNpcMessageGroupScRsp => 'CmdGetNpcMessageGroupScRsp',
        self::CmdFinishSectionIdScRsp => 'CmdFinishSectionIdScRsp',
        self::CmdFinishItemIdScRsp => 'CmdFinishItemIdScRsp',
        self::CmdFinishPerformSectionIdCsReq => 'CmdFinishPerformSectionIdCsReq',
        self::CmdGetNpcStatusCsReq => 'CmdGetNpcStatusCsReq',
        self::CmdFinishItemIdCsReq => 'CmdFinishItemIdCsReq',
        self::CmdFinishSectionIdCsReq => 'CmdFinishSectionIdCsReq',
        self::CmdGetNpcMessageGroupCsReq => 'CmdGetNpcMessageGroupCsReq',
        self::CmdFinishPerformSectionIdScRsp => 'CmdFinishPerformSectionIdScRsp',
        self::CmdGetNpcStatusScRsp => 'CmdGetNpcStatusScRsp',
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

