<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * KHDDLFHACDF
 *
 * Protobuf type <code>CmdContentPackageType</code>
 */
class CmdContentPackageType
{
    /**
     * Generated from protobuf enum <code>CmdContentPackageTypeNone = 0;</code>
     */
    const CmdContentPackageTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdContentPackageGetDataScRsp = 7550;</code>
     */
    const CmdContentPackageGetDataScRsp = 7550;
    /**
     * Generated from protobuf enum <code>CmdContentPackageUnlockScRsp = 7515;</code>
     */
    const CmdContentPackageUnlockScRsp = 7515;
    /**
     * Generated from protobuf enum <code>CmdContentPackageGetDataCsReq = 7512;</code>
     */
    const CmdContentPackageGetDataCsReq = 7512;
    /**
     * Generated from protobuf enum <code>CmdContentPackageSyncDataScNotify = 7530;</code>
     */
    const CmdContentPackageSyncDataScNotify = 7530;
    /**
     * Generated from protobuf enum <code>CmdContentPackageUnlockCsReq = 7523;</code>
     */
    const CmdContentPackageUnlockCsReq = 7523;
    /**
     * Generated from protobuf enum <code>CmdContentPackageTransferScNotify = 7549;</code>
     */
    const CmdContentPackageTransferScNotify = 7549;

    private static $valueToName = [
        self::CmdContentPackageTypeNone => 'CmdContentPackageTypeNone',
        self::CmdContentPackageGetDataScRsp => 'CmdContentPackageGetDataScRsp',
        self::CmdContentPackageUnlockScRsp => 'CmdContentPackageUnlockScRsp',
        self::CmdContentPackageGetDataCsReq => 'CmdContentPackageGetDataCsReq',
        self::CmdContentPackageSyncDataScNotify => 'CmdContentPackageSyncDataScNotify',
        self::CmdContentPackageUnlockCsReq => 'CmdContentPackageUnlockCsReq',
        self::CmdContentPackageTransferScNotify => 'CmdContentPackageTransferScNotify',
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
