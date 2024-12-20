<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>SceneGroupRefreshType</code>
 */
class SceneGroupRefreshType
{
    /**
     * Generated from protobuf enum <code>SCENE_GROUP_REFRESH_TYPE_NONE = 0;</code>
     */
    const SCENE_GROUP_REFRESH_TYPE_NONE = 0;
    /**
     * Generated from protobuf enum <code>SCENE_GROUP_REFRESH_TYPE_LOADED = 1;</code>
     */
    const SCENE_GROUP_REFRESH_TYPE_LOADED = 1;
    /**
     * Generated from protobuf enum <code>SCENE_GROUP_REFRESH_TYPE_UNLOAD = 2;</code>
     */
    const SCENE_GROUP_REFRESH_TYPE_UNLOAD = 2;

    private static $valueToName = [
        self::SCENE_GROUP_REFRESH_TYPE_NONE => 'SCENE_GROUP_REFRESH_TYPE_NONE',
        self::SCENE_GROUP_REFRESH_TYPE_LOADED => 'SCENE_GROUP_REFRESH_TYPE_LOADED',
        self::SCENE_GROUP_REFRESH_TYPE_UNLOAD => 'SCENE_GROUP_REFRESH_TYPE_UNLOAD',
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

