<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * AIABJKPDKPN
 *
 * Protobuf type <code>CmdRogueModifierType</code>
 */
class CmdRogueModifierType
{
    /**
     * Generated from protobuf enum <code>CmdRogueModifierTypeNone = 0;</code>
     */
    const CmdRogueModifierTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdRogueModifierAddNotify = 5384;</code>
     */
    const CmdRogueModifierAddNotify = 5384;
    /**
     * Generated from protobuf enum <code>CmdRogueModifierUpdateNotify = 5374;</code>
     */
    const CmdRogueModifierUpdateNotify = 5374;
    /**
     * Generated from protobuf enum <code>CmdRogueModifierSelectCellScRsp = 5367;</code>
     */
    const CmdRogueModifierSelectCellScRsp = 5367;
    /**
     * Generated from protobuf enum <code>CmdRogueModifierStageStartNotify = 5393;</code>
     */
    const CmdRogueModifierStageStartNotify = 5393;
    /**
     * Generated from protobuf enum <code>CmdRogueModifierDelNotify = 5324;</code>
     */
    const CmdRogueModifierDelNotify = 5324;
    /**
     * Generated from protobuf enum <code>CmdRogueModifierSelectCellCsReq = 5327;</code>
     */
    const CmdRogueModifierSelectCellCsReq = 5327;

    private static $valueToName = [
        self::CmdRogueModifierTypeNone => 'CmdRogueModifierTypeNone',
        self::CmdRogueModifierAddNotify => 'CmdRogueModifierAddNotify',
        self::CmdRogueModifierUpdateNotify => 'CmdRogueModifierUpdateNotify',
        self::CmdRogueModifierSelectCellScRsp => 'CmdRogueModifierSelectCellScRsp',
        self::CmdRogueModifierStageStartNotify => 'CmdRogueModifierStageStartNotify',
        self::CmdRogueModifierDelNotify => 'CmdRogueModifierDelNotify',
        self::CmdRogueModifierSelectCellCsReq => 'CmdRogueModifierSelectCellCsReq',
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

