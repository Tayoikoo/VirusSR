<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>PHFIJAMPDGI</code>
 */
class PHFIJAMPDGI
{
    /**
     * Generated from protobuf enum <code>ChangeStoryLineAction_None = 0;</code>
     */
    const ChangeStoryLineAction_None = 0;
    /**
     * Generated from protobuf enum <code>ChangeStoryLineAction_FinishAction = 1;</code>
     */
    const ChangeStoryLineAction_FinishAction = 1;
    /**
     * Generated from protobuf enum <code>ChangeStoryLineAction_Client = 2;</code>
     */
    const ChangeStoryLineAction_Client = 2;
    /**
     * Generated from protobuf enum <code>ChangeStoryLineAction_CustomOP = 3;</code>
     */
    const ChangeStoryLineAction_CustomOP = 3;

    private static $valueToName = [
        self::ChangeStoryLineAction_None => 'ChangeStoryLineAction_None',
        self::ChangeStoryLineAction_FinishAction => 'ChangeStoryLineAction_FinishAction',
        self::ChangeStoryLineAction_Client => 'ChangeStoryLineAction_Client',
        self::ChangeStoryLineAction_CustomOP => 'ChangeStoryLineAction_CustomOP',
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
