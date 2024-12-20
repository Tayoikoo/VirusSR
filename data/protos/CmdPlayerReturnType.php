<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * GLCOKCILEPE
 *
 * Protobuf type <code>CmdPlayerReturnType</code>
 */
class CmdPlayerReturnType
{
    /**
     * Generated from protobuf enum <code>CmdPlayerReturnTypeNone = 0;</code>
     */
    const CmdPlayerReturnTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdPlayerReturnTakeRewardCsReq = 4552;</code>
     */
    const CmdPlayerReturnTakeRewardCsReq = 4552;
    /**
     * Generated from protobuf enum <code>CmdPlayerReturnSignCsReq = 4595;</code>
     */
    const CmdPlayerReturnSignCsReq = 4595;
    /**
     * Generated from protobuf enum <code>CmdPlayerReturnStartScNotify = 4536;</code>
     */
    const CmdPlayerReturnStartScNotify = 4536;
    /**
     * Generated from protobuf enum <code>CmdPlayerReturnTakeRewardScRsp = 4574;</code>
     */
    const CmdPlayerReturnTakeRewardScRsp = 4574;
    /**
     * Generated from protobuf enum <code>CmdPlayerReturnTakePointRewardScRsp = 4528;</code>
     */
    const CmdPlayerReturnTakePointRewardScRsp = 4528;
    /**
     * Generated from protobuf enum <code>CmdPlayerReturnTakePointRewardCsReq = 4567;</code>
     */
    const CmdPlayerReturnTakePointRewardCsReq = 4567;
    /**
     * Generated from protobuf enum <code>CmdPlayerReturnInfoQueryCsReq = 4524;</code>
     */
    const CmdPlayerReturnInfoQueryCsReq = 4524;
    /**
     * Generated from protobuf enum <code>CmdPlayerReturnInfoQueryScRsp = 4593;</code>
     */
    const CmdPlayerReturnInfoQueryScRsp = 4593;
    /**
     * Generated from protobuf enum <code>CmdPlayerReturnPointChangeScNotify = 4527;</code>
     */
    const CmdPlayerReturnPointChangeScNotify = 4527;
    /**
     * Generated from protobuf enum <code>CmdPlayerReturnForceFinishScNotify = 4534;</code>
     */
    const CmdPlayerReturnForceFinishScNotify = 4534;
    /**
     * Generated from protobuf enum <code>CmdPlayerReturnSignScRsp = 4584;</code>
     */
    const CmdPlayerReturnSignScRsp = 4584;

    private static $valueToName = [
        self::CmdPlayerReturnTypeNone => 'CmdPlayerReturnTypeNone',
        self::CmdPlayerReturnTakeRewardCsReq => 'CmdPlayerReturnTakeRewardCsReq',
        self::CmdPlayerReturnSignCsReq => 'CmdPlayerReturnSignCsReq',
        self::CmdPlayerReturnStartScNotify => 'CmdPlayerReturnStartScNotify',
        self::CmdPlayerReturnTakeRewardScRsp => 'CmdPlayerReturnTakeRewardScRsp',
        self::CmdPlayerReturnTakePointRewardScRsp => 'CmdPlayerReturnTakePointRewardScRsp',
        self::CmdPlayerReturnTakePointRewardCsReq => 'CmdPlayerReturnTakePointRewardCsReq',
        self::CmdPlayerReturnInfoQueryCsReq => 'CmdPlayerReturnInfoQueryCsReq',
        self::CmdPlayerReturnInfoQueryScRsp => 'CmdPlayerReturnInfoQueryScRsp',
        self::CmdPlayerReturnPointChangeScNotify => 'CmdPlayerReturnPointChangeScNotify',
        self::CmdPlayerReturnForceFinishScNotify => 'CmdPlayerReturnForceFinishScNotify',
        self::CmdPlayerReturnSignScRsp => 'CmdPlayerReturnSignScRsp',
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

