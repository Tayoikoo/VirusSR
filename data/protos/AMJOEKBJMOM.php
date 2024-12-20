<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>AMJOEKBJMOM</code>
 */
class AMJOEKBJMOM
{
    /**
     * Generated from protobuf enum <code>ENTER_SCENE_REASON_NONE = 0;</code>
     */
    const ENTER_SCENE_REASON_NONE = 0;
    /**
     * Generated from protobuf enum <code>ENTER_SCENE_REASON_CHALLENGE_TIMEOUT = 1;</code>
     */
    const ENTER_SCENE_REASON_CHALLENGE_TIMEOUT = 1;
    /**
     * Generated from protobuf enum <code>ENTER_SCENE_REASON_ROGUE_TIMEOUT = 2;</code>
     */
    const ENTER_SCENE_REASON_ROGUE_TIMEOUT = 2;
    /**
     * Generated from protobuf enum <code>ENTER_SCENE_REASON_CHANGE_STORYLINE = 3;</code>
     */
    const ENTER_SCENE_REASON_CHANGE_STORYLINE = 3;
    /**
     * Generated from protobuf enum <code>ENTER_SCENE_REASON_DIMENSION_MERGE = 4;</code>
     */
    const ENTER_SCENE_REASON_DIMENSION_MERGE = 4;

    private static $valueToName = [
        self::ENTER_SCENE_REASON_NONE => 'ENTER_SCENE_REASON_NONE',
        self::ENTER_SCENE_REASON_CHALLENGE_TIMEOUT => 'ENTER_SCENE_REASON_CHALLENGE_TIMEOUT',
        self::ENTER_SCENE_REASON_ROGUE_TIMEOUT => 'ENTER_SCENE_REASON_ROGUE_TIMEOUT',
        self::ENTER_SCENE_REASON_CHANGE_STORYLINE => 'ENTER_SCENE_REASON_CHANGE_STORYLINE',
        self::ENTER_SCENE_REASON_DIMENSION_MERGE => 'ENTER_SCENE_REASON_DIMENSION_MERGE',
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
