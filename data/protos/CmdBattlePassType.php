<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * JJDFBHFHKJG
 *
 * Protobuf type <code>CmdBattlePassType</code>
 */
class CmdBattlePassType
{
    /**
     * Generated from protobuf enum <code>CmdBattlePassTypeNone = 0;</code>
     */
    const CmdBattlePassTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdBuyBpLevelCsReq = 3028;</code>
     */
    const CmdBuyBpLevelCsReq = 3028;
    /**
     * Generated from protobuf enum <code>CmdBuyBpLevelScRsp = 3052;</code>
     */
    const CmdBuyBpLevelScRsp = 3052;
    /**
     * Generated from protobuf enum <code>CmdTakeAllRewardScRsp = 3024;</code>
     */
    const CmdTakeAllRewardScRsp = 3024;
    /**
     * Generated from protobuf enum <code>CmdBattlePassInfoNotify = 3036;</code>
     */
    const CmdBattlePassInfoNotify = 3036;
    /**
     * Generated from protobuf enum <code>CmdTakeBpRewardCsReq = 3027;</code>
     */
    const CmdTakeBpRewardCsReq = 3027;
    /**
     * Generated from protobuf enum <code>CmdTakeBpRewardScRsp = 3067;</code>
     */
    const CmdTakeBpRewardScRsp = 3067;
    /**
     * Generated from protobuf enum <code>CmdTakeAllRewardCsReq = 3074;</code>
     */
    const CmdTakeAllRewardCsReq = 3074;

    private static $valueToName = [
        self::CmdBattlePassTypeNone => 'CmdBattlePassTypeNone',
        self::CmdBuyBpLevelCsReq => 'CmdBuyBpLevelCsReq',
        self::CmdBuyBpLevelScRsp => 'CmdBuyBpLevelScRsp',
        self::CmdTakeAllRewardScRsp => 'CmdTakeAllRewardScRsp',
        self::CmdBattlePassInfoNotify => 'CmdBattlePassInfoNotify',
        self::CmdTakeBpRewardCsReq => 'CmdTakeBpRewardCsReq',
        self::CmdTakeBpRewardScRsp => 'CmdTakeBpRewardScRsp',
        self::CmdTakeAllRewardCsReq => 'CmdTakeAllRewardCsReq',
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

