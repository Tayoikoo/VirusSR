<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * LOEHIBBBIPG
 *
 * Protobuf type <code>CmdMusicRhythmType</code>
 */
class CmdMusicRhythmType
{
    /**
     * Generated from protobuf enum <code>CmdMusicRhythmTypeNone = 0;</code>
     */
    const CmdMusicRhythmTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdMusicRhythmStartLevelScRsp = 7593;</code>
     */
    const CmdMusicRhythmStartLevelScRsp = 7593;
    /**
     * Generated from protobuf enum <code>CmdMusicRhythmFinishLevelCsReq = 7591;</code>
     */
    const CmdMusicRhythmFinishLevelCsReq = 7591;
    /**
     * Generated from protobuf enum <code>CmdMusicRhythmStartLevelCsReq = 7576;</code>
     */
    const CmdMusicRhythmStartLevelCsReq = 7576;
    /**
     * Generated from protobuf enum <code>CmdMusicRhythmDataCsReq = 7573;</code>
     */
    const CmdMusicRhythmDataCsReq = 7573;
    /**
     * Generated from protobuf enum <code>CmdMusicRhythmFinishLevelScRsp = 7600;</code>
     */
    const CmdMusicRhythmFinishLevelScRsp = 7600;
    /**
     * Generated from protobuf enum <code>CmdMusicRhythmDataScRsp = 7585;</code>
     */
    const CmdMusicRhythmDataScRsp = 7585;
    /**
     * Generated from protobuf enum <code>CmdMusicRhythmUnlockSongNotify = 7597;</code>
     */
    const CmdMusicRhythmUnlockSongNotify = 7597;
    /**
     * Generated from protobuf enum <code>CmdMusicRhythmSaveSongConfigDataCsReq = 7596;</code>
     */
    const CmdMusicRhythmSaveSongConfigDataCsReq = 7596;
    /**
     * Generated from protobuf enum <code>CmdMusicRhythmMaxDifficultyLevelsUnlockNotify = 7580;</code>
     */
    const CmdMusicRhythmMaxDifficultyLevelsUnlockNotify = 7580;
    /**
     * Generated from protobuf enum <code>CmdMusicRhythmUnlockTrackScNotify = 7577;</code>
     */
    const CmdMusicRhythmUnlockTrackScNotify = 7577;
    /**
     * Generated from protobuf enum <code>CmdMusicRhythmSaveSongConfigDataScRsp = 7592;</code>
     */
    const CmdMusicRhythmSaveSongConfigDataScRsp = 7592;
    /**
     * Generated from protobuf enum <code>CmdMusicRhythmUnlockSongSfxScNotify = 7599;</code>
     */
    const CmdMusicRhythmUnlockSongSfxScNotify = 7599;

    private static $valueToName = [
        self::CmdMusicRhythmTypeNone => 'CmdMusicRhythmTypeNone',
        self::CmdMusicRhythmStartLevelScRsp => 'CmdMusicRhythmStartLevelScRsp',
        self::CmdMusicRhythmFinishLevelCsReq => 'CmdMusicRhythmFinishLevelCsReq',
        self::CmdMusicRhythmStartLevelCsReq => 'CmdMusicRhythmStartLevelCsReq',
        self::CmdMusicRhythmDataCsReq => 'CmdMusicRhythmDataCsReq',
        self::CmdMusicRhythmFinishLevelScRsp => 'CmdMusicRhythmFinishLevelScRsp',
        self::CmdMusicRhythmDataScRsp => 'CmdMusicRhythmDataScRsp',
        self::CmdMusicRhythmUnlockSongNotify => 'CmdMusicRhythmUnlockSongNotify',
        self::CmdMusicRhythmSaveSongConfigDataCsReq => 'CmdMusicRhythmSaveSongConfigDataCsReq',
        self::CmdMusicRhythmMaxDifficultyLevelsUnlockNotify => 'CmdMusicRhythmMaxDifficultyLevelsUnlockNotify',
        self::CmdMusicRhythmUnlockTrackScNotify => 'CmdMusicRhythmUnlockTrackScNotify',
        self::CmdMusicRhythmSaveSongConfigDataScRsp => 'CmdMusicRhythmSaveSongConfigDataScRsp',
        self::CmdMusicRhythmUnlockSongSfxScNotify => 'CmdMusicRhythmUnlockSongSfxScNotify',
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

