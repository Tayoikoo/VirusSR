<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>LHOKLEOHKHD</code>
 */
class LHOKLEOHKHD
{
    /**
     * Generated from protobuf enum <code>CmdPlayerBoardTypeNone = 0;</code>
     */
    const CmdPlayerBoardTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdSetDisplayAvatarScRsp = 2853;</code>
     */
    const CmdSetDisplayAvatarScRsp = 2853;
    /**
     * Generated from protobuf enum <code>CmdGetPlayerBoardDataScRsp = 2820;</code>
     */
    const CmdGetPlayerBoardDataScRsp = 2820;
    /**
     * Generated from protobuf enum <code>CmdUnlockHeadIconScNotify = 2880;</code>
     */
    const CmdUnlockHeadIconScNotify = 2880;
    /**
     * Generated from protobuf enum <code>CmdSetIsDisplayAvatarInfoScRsp = 2837;</code>
     */
    const CmdSetIsDisplayAvatarInfoScRsp = 2837;
    /**
     * Generated from protobuf enum <code>CmdSetHeadIconScRsp = 2846;</code>
     */
    const CmdSetHeadIconScRsp = 2846;
    /**
     * Generated from protobuf enum <code>CmdSetAssistAvatarCsReq = 2874;</code>
     */
    const CmdSetAssistAvatarCsReq = 2874;
    /**
     * Generated from protobuf enum <code>CmdSetAssistAvatarScRsp = 2830;</code>
     */
    const CmdSetAssistAvatarScRsp = 2830;
    /**
     * Generated from protobuf enum <code>CmdSetHeadIconCsReq = 2803;</code>
     */
    const CmdSetHeadIconCsReq = 2803;
    /**
     * Generated from protobuf enum <code>CmdSetSignatureScRsp = 2847;</code>
     */
    const CmdSetSignatureScRsp = 2847;
    /**
     * Generated from protobuf enum <code>CmdSetSignatureCsReq = 2816;</code>
     */
    const CmdSetSignatureCsReq = 2816;
    /**
     * Generated from protobuf enum <code>CmdSetDisplayAvatarCsReq = 2839;</code>
     */
    const CmdSetDisplayAvatarCsReq = 2839;
    /**
     * Generated from protobuf enum <code>CmdGetPlayerBoardDataCsReq = 2859;</code>
     */
    const CmdGetPlayerBoardDataCsReq = 2859;
    /**
     * Generated from protobuf enum <code>CmdSetIsDisplayAvatarInfoCsReq = 2834;</code>
     */
    const CmdSetIsDisplayAvatarInfoCsReq = 2834;

    private static $valueToName = [
        self::CmdPlayerBoardTypeNone => 'CmdPlayerBoardTypeNone',
        self::CmdSetDisplayAvatarScRsp => 'CmdSetDisplayAvatarScRsp',
        self::CmdGetPlayerBoardDataScRsp => 'CmdGetPlayerBoardDataScRsp',
        self::CmdUnlockHeadIconScNotify => 'CmdUnlockHeadIconScNotify',
        self::CmdSetIsDisplayAvatarInfoScRsp => 'CmdSetIsDisplayAvatarInfoScRsp',
        self::CmdSetHeadIconScRsp => 'CmdSetHeadIconScRsp',
        self::CmdSetAssistAvatarCsReq => 'CmdSetAssistAvatarCsReq',
        self::CmdSetAssistAvatarScRsp => 'CmdSetAssistAvatarScRsp',
        self::CmdSetHeadIconCsReq => 'CmdSetHeadIconCsReq',
        self::CmdSetSignatureScRsp => 'CmdSetSignatureScRsp',
        self::CmdSetSignatureCsReq => 'CmdSetSignatureCsReq',
        self::CmdSetDisplayAvatarCsReq => 'CmdSetDisplayAvatarCsReq',
        self::CmdGetPlayerBoardDataCsReq => 'CmdGetPlayerBoardDataCsReq',
        self::CmdSetIsDisplayAvatarInfoCsReq => 'CmdSetIsDisplayAvatarInfoCsReq',
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

