<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * DPAGHHBGNKB
 *
 * Protobuf type <code>CmdTextJoinType</code>
 */
class CmdTextJoinType
{
    /**
     * Generated from protobuf enum <code>CmdTextJoinTypeNone = 0;</code>
     */
    const CmdTextJoinTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdTextJoinBatchSaveCsReq = 3867;</code>
     */
    const CmdTextJoinBatchSaveCsReq = 3867;
    /**
     * Generated from protobuf enum <code>CmdTextJoinQueryScRsp = 3827;</code>
     */
    const CmdTextJoinQueryScRsp = 3827;
    /**
     * Generated from protobuf enum <code>CmdTextJoinSaveCsReq = 3836;</code>
     */
    const CmdTextJoinSaveCsReq = 3836;
    /**
     * Generated from protobuf enum <code>CmdTextJoinSaveScRsp = 3895;</code>
     */
    const CmdTextJoinSaveScRsp = 3895;
    /**
     * Generated from protobuf enum <code>CmdTextJoinBatchSaveScRsp = 3828;</code>
     */
    const CmdTextJoinBatchSaveScRsp = 3828;
    /**
     * Generated from protobuf enum <code>CmdTextJoinQueryCsReq = 3884;</code>
     */
    const CmdTextJoinQueryCsReq = 3884;

    private static $valueToName = [
        self::CmdTextJoinTypeNone => 'CmdTextJoinTypeNone',
        self::CmdTextJoinBatchSaveCsReq => 'CmdTextJoinBatchSaveCsReq',
        self::CmdTextJoinQueryScRsp => 'CmdTextJoinQueryScRsp',
        self::CmdTextJoinSaveCsReq => 'CmdTextJoinSaveCsReq',
        self::CmdTextJoinSaveScRsp => 'CmdTextJoinSaveScRsp',
        self::CmdTextJoinBatchSaveScRsp => 'CmdTextJoinBatchSaveScRsp',
        self::CmdTextJoinQueryCsReq => 'CmdTextJoinQueryCsReq',
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
