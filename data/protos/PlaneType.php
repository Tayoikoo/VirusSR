<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>PlaneType</code>
 */
class PlaneType
{
    /**
     * Generated from protobuf enum <code>PlaneUnknown = 0;</code>
     */
    const PlaneUnknown = 0;
    /**
     * Generated from protobuf enum <code>PlaneTown = 1;</code>
     */
    const PlaneTown = 1;
    /**
     * Generated from protobuf enum <code>PlaneMaze = 2;</code>
     */
    const PlaneMaze = 2;
    /**
     * Generated from protobuf enum <code>PlaneTrain = 3;</code>
     */
    const PlaneTrain = 3;
    /**
     * Generated from protobuf enum <code>PlaneChallenge = 4;</code>
     */
    const PlaneChallenge = 4;
    /**
     * Generated from protobuf enum <code>PlaneRogue = 5;</code>
     */
    const PlaneRogue = 5;
    /**
     * Generated from protobuf enum <code>PlaneRaid = 6;</code>
     */
    const PlaneRaid = 6;
    /**
     * Generated from protobuf enum <code>PlaneAetherDivide = 7;</code>
     */
    const PlaneAetherDivide = 7;
    /**
     * Generated from protobuf enum <code>PlaneTrialActivity = 8;</code>
     */
    const PlaneTrialActivity = 8;

    private static $valueToName = [
        self::PlaneUnknown => 'PlaneUnknown',
        self::PlaneTown => 'PlaneTown',
        self::PlaneMaze => 'PlaneMaze',
        self::PlaneTrain => 'PlaneTrain',
        self::PlaneChallenge => 'PlaneChallenge',
        self::PlaneRogue => 'PlaneRogue',
        self::PlaneRaid => 'PlaneRaid',
        self::PlaneAetherDivide => 'PlaneAetherDivide',
        self::PlaneTrialActivity => 'PlaneTrialActivity',
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
