<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * GFFCFDJJHND
 *
 * Protobuf type <code>CmdEvolveBuildType</code>
 */
class CmdEvolveBuildType
{
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildNone = 0;</code>
     */
    const CmdEvolveBuildNone = 0;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildReRandomStageCsReq = 7128;</code>
     */
    const CmdEvolveBuildReRandomStageCsReq = 7128;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildStartStageScRsp = 7149;</code>
     */
    const CmdEvolveBuildStartStageScRsp = 7149;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildShopAbilityDownScRsp = 7111;</code>
     */
    const CmdEvolveBuildShopAbilityDownScRsp = 7111;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildShopAbilityDownCsReq = 7140;</code>
     */
    const CmdEvolveBuildShopAbilityDownCsReq = 7140;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildStartLevelScRsp = 7123;</code>
     */
    const CmdEvolveBuildStartLevelScRsp = 7123;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildShopAbilityUpCsReq = 7117;</code>
     */
    const CmdEvolveBuildShopAbilityUpCsReq = 7117;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildStartLevelCsReq = 7130;</code>
     */
    const CmdEvolveBuildStartLevelCsReq = 7130;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildFinishScNotify = 7145;</code>
     */
    const CmdEvolveBuildFinishScNotify = 7145;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildQueryInfoCsReq = 7112;</code>
     */
    const CmdEvolveBuildQueryInfoCsReq = 7112;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildCoinNotify = 7114;</code>
     */
    const CmdEvolveBuildCoinNotify = 7114;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildTakeExpRewardScRsp = 7135;</code>
     */
    const CmdEvolveBuildTakeExpRewardScRsp = 7135;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildLeaveCsReq = 7147;</code>
     */
    const CmdEvolveBuildLeaveCsReq = 7147;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildStartStageCsReq = 7115;</code>
     */
    const CmdEvolveBuildStartStageCsReq = 7115;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildGiveupCsReq = 7109;</code>
     */
    const CmdEvolveBuildGiveupCsReq = 7109;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildShopAbilityUpScRsp = 7104;</code>
     */
    const CmdEvolveBuildShopAbilityUpScRsp = 7104;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildTakeExpRewardCsReq = 7106;</code>
     */
    const CmdEvolveBuildTakeExpRewardCsReq = 7106;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildReRandomStageScRsp = 7110;</code>
     */
    const CmdEvolveBuildReRandomStageScRsp = 7110;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildUnlockInfoNotify = 7142;</code>
     */
    const CmdEvolveBuildUnlockInfoNotify = 7142;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildShopAbilityResetCsReq = 7118;</code>
     */
    const CmdEvolveBuildShopAbilityResetCsReq = 7118;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildGiveupScRsp = 7143;</code>
     */
    const CmdEvolveBuildGiveupScRsp = 7143;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildQueryInfoScRsp = 7150;</code>
     */
    const CmdEvolveBuildQueryInfoScRsp = 7150;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildLeaveScRsp = 7146;</code>
     */
    const CmdEvolveBuildLeaveScRsp = 7146;
    /**
     * Generated from protobuf enum <code>CmdEvolveBuildShopAbilityResetScRsp = 7122;</code>
     */
    const CmdEvolveBuildShopAbilityResetScRsp = 7122;

    private static $valueToName = [
        self::CmdEvolveBuildNone => 'CmdEvolveBuildNone',
        self::CmdEvolveBuildReRandomStageCsReq => 'CmdEvolveBuildReRandomStageCsReq',
        self::CmdEvolveBuildStartStageScRsp => 'CmdEvolveBuildStartStageScRsp',
        self::CmdEvolveBuildShopAbilityDownScRsp => 'CmdEvolveBuildShopAbilityDownScRsp',
        self::CmdEvolveBuildShopAbilityDownCsReq => 'CmdEvolveBuildShopAbilityDownCsReq',
        self::CmdEvolveBuildStartLevelScRsp => 'CmdEvolveBuildStartLevelScRsp',
        self::CmdEvolveBuildShopAbilityUpCsReq => 'CmdEvolveBuildShopAbilityUpCsReq',
        self::CmdEvolveBuildStartLevelCsReq => 'CmdEvolveBuildStartLevelCsReq',
        self::CmdEvolveBuildFinishScNotify => 'CmdEvolveBuildFinishScNotify',
        self::CmdEvolveBuildQueryInfoCsReq => 'CmdEvolveBuildQueryInfoCsReq',
        self::CmdEvolveBuildCoinNotify => 'CmdEvolveBuildCoinNotify',
        self::CmdEvolveBuildTakeExpRewardScRsp => 'CmdEvolveBuildTakeExpRewardScRsp',
        self::CmdEvolveBuildLeaveCsReq => 'CmdEvolveBuildLeaveCsReq',
        self::CmdEvolveBuildStartStageCsReq => 'CmdEvolveBuildStartStageCsReq',
        self::CmdEvolveBuildGiveupCsReq => 'CmdEvolveBuildGiveupCsReq',
        self::CmdEvolveBuildShopAbilityUpScRsp => 'CmdEvolveBuildShopAbilityUpScRsp',
        self::CmdEvolveBuildTakeExpRewardCsReq => 'CmdEvolveBuildTakeExpRewardCsReq',
        self::CmdEvolveBuildReRandomStageScRsp => 'CmdEvolveBuildReRandomStageScRsp',
        self::CmdEvolveBuildUnlockInfoNotify => 'CmdEvolveBuildUnlockInfoNotify',
        self::CmdEvolveBuildShopAbilityResetCsReq => 'CmdEvolveBuildShopAbilityResetCsReq',
        self::CmdEvolveBuildGiveupScRsp => 'CmdEvolveBuildGiveupScRsp',
        self::CmdEvolveBuildQueryInfoScRsp => 'CmdEvolveBuildQueryInfoScRsp',
        self::CmdEvolveBuildLeaveScRsp => 'CmdEvolveBuildLeaveScRsp',
        self::CmdEvolveBuildShopAbilityResetScRsp => 'CmdEvolveBuildShopAbilityResetScRsp',
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

