<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>TrialActivityStatus</code>
 */
class TrialActivityStatus
{
    /**
     * Generated from protobuf enum <code>TRIAL_ACTIVITY_STATUS_NONE = 0;</code>
     */
    const TRIAL_ACTIVITY_STATUS_NONE = 0;
    /**
     * Generated from protobuf enum <code>TRIAL_ACTIVITY_STATUS_FINISH = 1;</code>
     */
    const TRIAL_ACTIVITY_STATUS_FINISH = 1;

    private static $valueToName = [
        self::TRIAL_ACTIVITY_STATUS_NONE => 'TRIAL_ACTIVITY_STATUS_NONE',
        self::TRIAL_ACTIVITY_STATUS_FINISH => 'TRIAL_ACTIVITY_STATUS_FINISH',
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

