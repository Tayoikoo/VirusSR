<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>OHOAGKFLOEE</code>
 */
class OHOAGKFLOEE
{
    /**
     * Generated from protobuf enum <code>CmdTrackPhotoActivityTypeNone = 0;</code>
     */
    const CmdTrackPhotoActivityTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdSettleTrackPhotoStageCsReq = 7559;</code>
     */
    const CmdSettleTrackPhotoStageCsReq = 7559;
    /**
     * Generated from protobuf enum <code>CmdStartTrackPhotoStageScRsp = 7552;</code>
     */
    const CmdStartTrackPhotoStageScRsp = 7552;
    /**
     * Generated from protobuf enum <code>CmdSettleTrackPhotoStageScRsp = 7558;</code>
     */
    const CmdSettleTrackPhotoStageScRsp = 7558;
    /**
     * Generated from protobuf enum <code>CmdQuitTrackPhotoStageScRsp = 7557;</code>
     */
    const CmdQuitTrackPhotoStageScRsp = 7557;
    /**
     * Generated from protobuf enum <code>CmdQuitTrackPhotoStageCsReq = 7560;</code>
     */
    const CmdQuitTrackPhotoStageCsReq = 7560;
    /**
     * Generated from protobuf enum <code>CmdGetTrackPhotoActivityDataCsReq = 7556;</code>
     */
    const CmdGetTrackPhotoActivityDataCsReq = 7556;
    /**
     * Generated from protobuf enum <code>CmdGetTrackPhotoActivityDataScRsp = 7555;</code>
     */
    const CmdGetTrackPhotoActivityDataScRsp = 7555;
    /**
     * Generated from protobuf enum <code>CmdStartTrackPhotoStageCsReq = 7551;</code>
     */
    const CmdStartTrackPhotoStageCsReq = 7551;

    private static $valueToName = [
        self::CmdTrackPhotoActivityTypeNone => 'CmdTrackPhotoActivityTypeNone',
        self::CmdSettleTrackPhotoStageCsReq => 'CmdSettleTrackPhotoStageCsReq',
        self::CmdStartTrackPhotoStageScRsp => 'CmdStartTrackPhotoStageScRsp',
        self::CmdSettleTrackPhotoStageScRsp => 'CmdSettleTrackPhotoStageScRsp',
        self::CmdQuitTrackPhotoStageScRsp => 'CmdQuitTrackPhotoStageScRsp',
        self::CmdQuitTrackPhotoStageCsReq => 'CmdQuitTrackPhotoStageCsReq',
        self::CmdGetTrackPhotoActivityDataCsReq => 'CmdGetTrackPhotoActivityDataCsReq',
        self::CmdGetTrackPhotoActivityDataScRsp => 'CmdGetTrackPhotoActivityDataScRsp',
        self::CmdStartTrackPhotoStageCsReq => 'CmdStartTrackPhotoStageCsReq',
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
