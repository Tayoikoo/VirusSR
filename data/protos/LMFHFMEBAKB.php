<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>LMFHFMEBAKB</code>
 */
class LMFHFMEBAKB
{
    /**
     * Generated from protobuf enum <code>CHESS_ROGUE_DICE_FIXED = 0;</code>
     */
    const CHESS_ROGUE_DICE_FIXED = 0;
    /**
     * Generated from protobuf enum <code>CHESS_ROGUE_DICE_EDITABLE = 1;</code>
     */
    const CHESS_ROGUE_DICE_EDITABLE = 1;

    private static $valueToName = [
        self::CHESS_ROGUE_DICE_FIXED => 'CHESS_ROGUE_DICE_FIXED',
        self::CHESS_ROGUE_DICE_EDITABLE => 'CHESS_ROGUE_DICE_EDITABLE',
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

