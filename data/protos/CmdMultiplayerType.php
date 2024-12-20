<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * MNIPCAPEIKH
 *
 * Protobuf type <code>CmdMultiplayerType</code>
 */
class CmdMultiplayerType
{
    /**
     * Generated from protobuf enum <code>CmdMultiplayerTypeNone = 0;</code>
     */
    const CmdMultiplayerTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdMultiplayerMatch3FinishScNotify = 1024;</code>
     */
    const CmdMultiplayerMatch3FinishScNotify = 1024;
    /**
     * Generated from protobuf enum <code>CmdMultiplayerFightGameStateCsReq = 1036;</code>
     */
    const CmdMultiplayerFightGameStateCsReq = 1036;
    /**
     * Generated from protobuf enum <code>CmdMultiplayerFightGameStateScRsp = 1095;</code>
     */
    const CmdMultiplayerFightGameStateScRsp = 1095;
    /**
     * Generated from protobuf enum <code>CmdMultiplayerGetFightGateCsReq = 1084;</code>
     */
    const CmdMultiplayerGetFightGateCsReq = 1084;
    /**
     * Generated from protobuf enum <code>CmdMultiplayerFightGameStartScNotify = 1052;</code>
     */
    const CmdMultiplayerFightGameStartScNotify = 1052;
    /**
     * Generated from protobuf enum <code>CmdMultiplayerFightGameFinishScNotify = 1074;</code>
     */
    const CmdMultiplayerFightGameFinishScNotify = 1074;
    /**
     * Generated from protobuf enum <code>CmdMultiplayerGetFightGateScRsp = 1027;</code>
     */
    const CmdMultiplayerGetFightGateScRsp = 1027;
    /**
     * Generated from protobuf enum <code>CmdMultiplayerFightGiveUpCsReq = 1067;</code>
     */
    const CmdMultiplayerFightGiveUpCsReq = 1067;
    /**
     * Generated from protobuf enum <code>CmdMultiplayerFightGiveUpScRsp = 1028;</code>
     */
    const CmdMultiplayerFightGiveUpScRsp = 1028;

    private static $valueToName = [
        self::CmdMultiplayerTypeNone => 'CmdMultiplayerTypeNone',
        self::CmdMultiplayerMatch3FinishScNotify => 'CmdMultiplayerMatch3FinishScNotify',
        self::CmdMultiplayerFightGameStateCsReq => 'CmdMultiplayerFightGameStateCsReq',
        self::CmdMultiplayerFightGameStateScRsp => 'CmdMultiplayerFightGameStateScRsp',
        self::CmdMultiplayerGetFightGateCsReq => 'CmdMultiplayerGetFightGateCsReq',
        self::CmdMultiplayerFightGameStartScNotify => 'CmdMultiplayerFightGameStartScNotify',
        self::CmdMultiplayerFightGameFinishScNotify => 'CmdMultiplayerFightGameFinishScNotify',
        self::CmdMultiplayerGetFightGateScRsp => 'CmdMultiplayerGetFightGateScRsp',
        self::CmdMultiplayerFightGiveUpCsReq => 'CmdMultiplayerFightGiveUpCsReq',
        self::CmdMultiplayerFightGiveUpScRsp => 'CmdMultiplayerFightGiveUpScRsp',
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
