<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * IJNLGMIKEEC
 *
 * Protobuf type <code>CmdSummonActivityType</code>
 */
class CmdSummonActivityType
{
    /**
     * Generated from protobuf enum <code>CmdSummonActivityTypeNone = 0;</code>
     */
    const CmdSummonActivityTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdGetSummonActivityDataCsReq = 7569;</code>
     */
    const CmdGetSummonActivityDataCsReq = 7569;
    /**
     * Generated from protobuf enum <code>CmdEnterSummonActivityStageCsReq = 7563;</code>
     */
    const CmdEnterSummonActivityStageCsReq = 7563;
    /**
     * Generated from protobuf enum <code>CmdSummonActivityBattleEndScNotify = 7561;</code>
     */
    const CmdSummonActivityBattleEndScNotify = 7561;
    /**
     * Generated from protobuf enum <code>CmdGetSummonActivityDataScRsp = 7570;</code>
     */
    const CmdGetSummonActivityDataScRsp = 7570;
    /**
     * Generated from protobuf enum <code>CmdEnterSummonActivityStageScRsp = 7568;</code>
     */
    const CmdEnterSummonActivityStageScRsp = 7568;

    private static $valueToName = [
        self::CmdSummonActivityTypeNone => 'CmdSummonActivityTypeNone',
        self::CmdGetSummonActivityDataCsReq => 'CmdGetSummonActivityDataCsReq',
        self::CmdEnterSummonActivityStageCsReq => 'CmdEnterSummonActivityStageCsReq',
        self::CmdSummonActivityBattleEndScNotify => 'CmdSummonActivityBattleEndScNotify',
        self::CmdGetSummonActivityDataScRsp => 'CmdGetSummonActivityDataScRsp',
        self::CmdEnterSummonActivityStageScRsp => 'CmdEnterSummonActivityStageScRsp',
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
