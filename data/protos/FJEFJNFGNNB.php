<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>FJEFJNFGNNB</code>
 */
class FJEFJNFGNNB
{
    /**
     * Generated from protobuf enum <code>ContentPackageStatus_None = 0;</code>
     */
    const ContentPackageStatus_None = 0;
    /**
     * Generated from protobuf enum <code>ContentPackageStatus_Init = 1;</code>
     */
    const ContentPackageStatus_Init = 1;
    /**
     * Generated from protobuf enum <code>ContentPackageStatus_Doing = 2;</code>
     */
    const ContentPackageStatus_Doing = 2;
    /**
     * Generated from protobuf enum <code>ContentPackageStatus_Finished = 3;</code>
     */
    const ContentPackageStatus_Finished = 3;
    /**
     * Generated from protobuf enum <code>ContentPackageStatus_Release = 4;</code>
     */
    const ContentPackageStatus_Release = 4;

    private static $valueToName = [
        self::ContentPackageStatus_None => 'ContentPackageStatus_None',
        self::ContentPackageStatus_Init => 'ContentPackageStatus_Init',
        self::ContentPackageStatus_Doing => 'ContentPackageStatus_Doing',
        self::ContentPackageStatus_Finished => 'ContentPackageStatus_Finished',
        self::ContentPackageStatus_Release => 'ContentPackageStatus_Release',
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

