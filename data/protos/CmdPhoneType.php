<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * PIOKOKKIGFL
 *
 * Protobuf type <code>CmdPhoneType</code>
 */
class CmdPhoneType
{
    /**
     * Generated from protobuf enum <code>CmdPhoneTypeNone = 0;</code>
     */
    const CmdPhoneTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdSelectPhoneThemeScRsp = 5152;</code>
     */
    const CmdSelectPhoneThemeScRsp = 5152;
    /**
     * Generated from protobuf enum <code>CmdUnlockPhoneThemeScNotify = 5174;</code>
     */
    const CmdUnlockPhoneThemeScNotify = 5174;
    /**
     * Generated from protobuf enum <code>CmdSelectPhoneThemeCsReq = 5128;</code>
     */
    const CmdSelectPhoneThemeCsReq = 5128;
    /**
     * Generated from protobuf enum <code>CmdSelectChatBubbleScRsp = 5127;</code>
     */
    const CmdSelectChatBubbleScRsp = 5127;
    /**
     * Generated from protobuf enum <code>CmdUnlockChatBubbleScNotify = 5167;</code>
     */
    const CmdUnlockChatBubbleScNotify = 5167;
    /**
     * Generated from protobuf enum <code>CmdGetPhoneDataCsReq = 5136;</code>
     */
    const CmdGetPhoneDataCsReq = 5136;
    /**
     * Generated from protobuf enum <code>CmdSelectChatBubbleCsReq = 5184;</code>
     */
    const CmdSelectChatBubbleCsReq = 5184;
    /**
     * Generated from protobuf enum <code>CmdGetPhoneDataScRsp = 5195;</code>
     */
    const CmdGetPhoneDataScRsp = 5195;

    private static $valueToName = [
        self::CmdPhoneTypeNone => 'CmdPhoneTypeNone',
        self::CmdSelectPhoneThemeScRsp => 'CmdSelectPhoneThemeScRsp',
        self::CmdUnlockPhoneThemeScNotify => 'CmdUnlockPhoneThemeScNotify',
        self::CmdSelectPhoneThemeCsReq => 'CmdSelectPhoneThemeCsReq',
        self::CmdSelectChatBubbleScRsp => 'CmdSelectChatBubbleScRsp',
        self::CmdUnlockChatBubbleScNotify => 'CmdUnlockChatBubbleScNotify',
        self::CmdGetPhoneDataCsReq => 'CmdGetPhoneDataCsReq',
        self::CmdSelectChatBubbleCsReq => 'CmdSelectChatBubbleCsReq',
        self::CmdGetPhoneDataScRsp => 'CmdGetPhoneDataScRsp',
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

