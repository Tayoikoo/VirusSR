<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * ELFNPNMOPJH
 *
 * Protobuf type <code>CmdLobbyType</code>
 */
class CmdLobbyType
{
    /**
     * Generated from protobuf enum <code>CmdLobbyTypeNone = 0;</code>
     */
    const CmdLobbyTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdLobbyBeginCsReq = 7365;</code>
     */
    const CmdLobbyBeginCsReq = 7365;
    /**
     * Generated from protobuf enum <code>CmdLobbyInviteScRsp = 7360;</code>
     */
    const CmdLobbyInviteScRsp = 7360;
    /**
     * Generated from protobuf enum <code>CmdLobbySyncInfoScNotify = 7395;</code>
     */
    const CmdLobbySyncInfoScNotify = 7395;
    /**
     * Generated from protobuf enum <code>CmdLobbyInviteCsReq = 7378;</code>
     */
    const CmdLobbyInviteCsReq = 7378;
    /**
     * Generated from protobuf enum <code>CmdLobbyKickOutScRsp = 7396;</code>
     */
    const CmdLobbyKickOutScRsp = 7396;
    /**
     * Generated from protobuf enum <code>CmdLobbyQuitCsReq = 7398;</code>
     */
    const CmdLobbyQuitCsReq = 7398;
    /**
     * Generated from protobuf enum <code>CmdLobbyQuitScRsp = 7363;</code>
     */
    const CmdLobbyQuitScRsp = 7363;
    /**
     * Generated from protobuf enum <code>CmdLobbyCreateScRsp = 7400;</code>
     */
    const CmdLobbyCreateScRsp = 7400;
    /**
     * Generated from protobuf enum <code>CmdLobbyKickOutCsReq = 7397;</code>
     */
    const CmdLobbyKickOutCsReq = 7397;
    /**
     * Generated from protobuf enum <code>CmdLobbyModifyPlayerInfoScRsp = 7393;</code>
     */
    const CmdLobbyModifyPlayerInfoScRsp = 7393;
    /**
     * Generated from protobuf enum <code>CmdLobbyGetInfoCsReq = 7354;</code>
     */
    const CmdLobbyGetInfoCsReq = 7354;
    /**
     * Generated from protobuf enum <code>CmdLobbyGetInfoScRsp = 7390;</code>
     */
    const CmdLobbyGetInfoScRsp = 7390;
    /**
     * Generated from protobuf enum <code>CmdLobbyModifyPlayerInfoCsReq = 7359;</code>
     */
    const CmdLobbyModifyPlayerInfoCsReq = 7359;
    /**
     * Generated from protobuf enum <code>CmdLobbyBeginScRsp = 7399;</code>
     */
    const CmdLobbyBeginScRsp = 7399;
    /**
     * Generated from protobuf enum <code>CmdLobbyInviteScNotify = 7367;</code>
     */
    const CmdLobbyInviteScNotify = 7367;
    /**
     * Generated from protobuf enum <code>CmdLobbyJoinCsReq = 7380;</code>
     */
    const CmdLobbyJoinCsReq = 7380;
    /**
     * Generated from protobuf enum <code>CmdLobbyJoinScRsp = 7373;</code>
     */
    const CmdLobbyJoinScRsp = 7373;
    /**
     * Generated from protobuf enum <code>CmdLobbyCreateCsReq = 7362;</code>
     */
    const CmdLobbyCreateCsReq = 7362;

    private static $valueToName = [
        self::CmdLobbyTypeNone => 'CmdLobbyTypeNone',
        self::CmdLobbyBeginCsReq => 'CmdLobbyBeginCsReq',
        self::CmdLobbyInviteScRsp => 'CmdLobbyInviteScRsp',
        self::CmdLobbySyncInfoScNotify => 'CmdLobbySyncInfoScNotify',
        self::CmdLobbyInviteCsReq => 'CmdLobbyInviteCsReq',
        self::CmdLobbyKickOutScRsp => 'CmdLobbyKickOutScRsp',
        self::CmdLobbyQuitCsReq => 'CmdLobbyQuitCsReq',
        self::CmdLobbyQuitScRsp => 'CmdLobbyQuitScRsp',
        self::CmdLobbyCreateScRsp => 'CmdLobbyCreateScRsp',
        self::CmdLobbyKickOutCsReq => 'CmdLobbyKickOutCsReq',
        self::CmdLobbyModifyPlayerInfoScRsp => 'CmdLobbyModifyPlayerInfoScRsp',
        self::CmdLobbyGetInfoCsReq => 'CmdLobbyGetInfoCsReq',
        self::CmdLobbyGetInfoScRsp => 'CmdLobbyGetInfoScRsp',
        self::CmdLobbyModifyPlayerInfoCsReq => 'CmdLobbyModifyPlayerInfoCsReq',
        self::CmdLobbyBeginScRsp => 'CmdLobbyBeginScRsp',
        self::CmdLobbyInviteScNotify => 'CmdLobbyInviteScNotify',
        self::CmdLobbyJoinCsReq => 'CmdLobbyJoinCsReq',
        self::CmdLobbyJoinScRsp => 'CmdLobbyJoinScRsp',
        self::CmdLobbyCreateCsReq => 'CmdLobbyCreateCsReq',
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

