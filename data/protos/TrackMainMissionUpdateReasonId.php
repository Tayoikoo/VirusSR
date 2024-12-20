<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>TrackMainMissionUpdateReasonId</code>
 */
class TrackMainMissionUpdateReasonId
{
    /**
     * Generated from protobuf enum <code>TRACK_MAIN_MISSION_UPDATE_NONE = 0;</code>
     */
    const TRACK_MAIN_MISSION_UPDATE_NONE = 0;
    /**
     * Generated from protobuf enum <code>TRACK_MAIN_MISSION_UPDATE_AUTO = 1;</code>
     */
    const TRACK_MAIN_MISSION_UPDATE_AUTO = 1;
    /**
     * Generated from protobuf enum <code>TRACK_MAIN_MISSION_UPDATE_MANUAL = 2;</code>
     */
    const TRACK_MAIN_MISSION_UPDATE_MANUAL = 2;
    /**
     * Generated from protobuf enum <code>TRACK_MAIN_MISSION_UPDATE_LOGIN_REPORT = 3;</code>
     */
    const TRACK_MAIN_MISSION_UPDATE_LOGIN_REPORT = 3;

    private static $valueToName = [
        self::TRACK_MAIN_MISSION_UPDATE_NONE => 'TRACK_MAIN_MISSION_UPDATE_NONE',
        self::TRACK_MAIN_MISSION_UPDATE_AUTO => 'TRACK_MAIN_MISSION_UPDATE_AUTO',
        self::TRACK_MAIN_MISSION_UPDATE_MANUAL => 'TRACK_MAIN_MISSION_UPDATE_MANUAL',
        self::TRACK_MAIN_MISSION_UPDATE_LOGIN_REPORT => 'TRACK_MAIN_MISSION_UPDATE_LOGIN_REPORT',
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
