<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>JFPDGBHDFLN</code>
 */
class JFPDGBHDFLN
{
    /**
     * Generated from protobuf enum <code>CmdFantasticStoryActivityTypeNone = 0;</code>
     */
    const CmdFantasticStoryActivityTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdEnterFantasticStoryActivityStageScRsp = 4939;</code>
     */
    const CmdEnterFantasticStoryActivityStageScRsp = 4939;
    /**
     * Generated from protobuf enum <code>CmdFinishChapterScNotify = 4903;</code>
     */
    const CmdFinishChapterScNotify = 4903;
    /**
     * Generated from protobuf enum <code>CmdEnterFantasticStoryActivityStageCsReq = 4946;</code>
     */
    const CmdEnterFantasticStoryActivityStageCsReq = 4946;
    /**
     * Generated from protobuf enum <code>CmdGetFantasticStoryActivityDataScRsp = 4920;</code>
     */
    const CmdGetFantasticStoryActivityDataScRsp = 4920;
    /**
     * Generated from protobuf enum <code>CmdGetFantasticStoryActivityDataCsReq = 4959;</code>
     */
    const CmdGetFantasticStoryActivityDataCsReq = 4959;
    /**
     * Generated from protobuf enum <code>CmdFantasticStoryActivityBattleEndScNotify = 4953;</code>
     */
    const CmdFantasticStoryActivityBattleEndScNotify = 4953;

    private static $valueToName = [
        self::CmdFantasticStoryActivityTypeNone => 'CmdFantasticStoryActivityTypeNone',
        self::CmdEnterFantasticStoryActivityStageScRsp => 'CmdEnterFantasticStoryActivityStageScRsp',
        self::CmdFinishChapterScNotify => 'CmdFinishChapterScNotify',
        self::CmdEnterFantasticStoryActivityStageCsReq => 'CmdEnterFantasticStoryActivityStageCsReq',
        self::CmdGetFantasticStoryActivityDataScRsp => 'CmdGetFantasticStoryActivityDataScRsp',
        self::CmdGetFantasticStoryActivityDataCsReq => 'CmdGetFantasticStoryActivityDataCsReq',
        self::CmdFantasticStoryActivityBattleEndScNotify => 'CmdFantasticStoryActivityBattleEndScNotify',
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
