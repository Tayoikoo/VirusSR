<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * CFGDEHCCNGD
 *
 * Protobuf type <code>CmdPamMissionType</code>
 */
class CmdPamMissionType
{
    /**
     * Generated from protobuf enum <code>CmdPamMissionTypeNone = 0;</code>
     */
    const CmdPamMissionTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdSyncAcceptedPamMissionNotify = 4084;</code>
     */
    const CmdSyncAcceptedPamMissionNotify = 4084;
    /**
     * Generated from protobuf enum <code>CmdAcceptedPamMissionExpireCsReq = 4036;</code>
     */
    const CmdAcceptedPamMissionExpireCsReq = 4036;
    /**
     * Generated from protobuf enum <code>CmdAcceptedPamMissionExpireScRsp = 4095;</code>
     */
    const CmdAcceptedPamMissionExpireScRsp = 4095;

    private static $valueToName = [
        self::CmdPamMissionTypeNone => 'CmdPamMissionTypeNone',
        self::CmdSyncAcceptedPamMissionNotify => 'CmdSyncAcceptedPamMissionNotify',
        self::CmdAcceptedPamMissionExpireCsReq => 'CmdAcceptedPamMissionExpireCsReq',
        self::CmdAcceptedPamMissionExpireScRsp => 'CmdAcceptedPamMissionExpireScRsp',
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
