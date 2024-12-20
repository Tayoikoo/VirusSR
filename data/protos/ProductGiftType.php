<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * Protobuf type <code>ProductGiftType</code>
 */
class ProductGiftType
{
    /**
     * Generated from protobuf enum <code>PRODUCT_GIFT_NONE = 0;</code>
     */
    const PRODUCT_GIFT_NONE = 0;
    /**
     * Generated from protobuf enum <code>PRODUCT_GIFT_COIN = 1;</code>
     */
    const PRODUCT_GIFT_COIN = 1;
    /**
     * Generated from protobuf enum <code>PRODUCT_GIFT_MONTH_CARD = 2;</code>
     */
    const PRODUCT_GIFT_MONTH_CARD = 2;
    /**
     * Generated from protobuf enum <code>PRODUCT_GIFT_BP_68 = 3;</code>
     */
    const PRODUCT_GIFT_BP_68 = 3;
    /**
     * Generated from protobuf enum <code>PRODUCT_GIFT_BP_128 = 4;</code>
     */
    const PRODUCT_GIFT_BP_128 = 4;
    /**
     * Generated from protobuf enum <code>PRODUCT_GIFT_BP68_UPGRADE_128 = 5;</code>
     */
    const PRODUCT_GIFT_BP68_UPGRADE_128 = 5;
    /**
     * Generated from protobuf enum <code>PRODUCT_GIFT_POINT_CARD = 6;</code>
     */
    const PRODUCT_GIFT_POINT_CARD = 6;
    /**
     * Generated from protobuf enum <code>PRODUCT_GIFT_PS_PRE_ORDER_1 = 7;</code>
     */
    const PRODUCT_GIFT_PS_PRE_ORDER_1 = 7;
    /**
     * Generated from protobuf enum <code>PRODUCT_GIFT_PS_PRE_ORDER_2 = 8;</code>
     */
    const PRODUCT_GIFT_PS_PRE_ORDER_2 = 8;
    /**
     * Generated from protobuf enum <code>PRODUCT_GIFT_GOOGLE_POINTS_100 = 9;</code>
     */
    const PRODUCT_GIFT_GOOGLE_POINTS_100 = 9;
    /**
     * Generated from protobuf enum <code>PRODUCT_GIFT_GOOGLE_POINTS_150 = 10;</code>
     */
    const PRODUCT_GIFT_GOOGLE_POINTS_150 = 10;
    /**
     * Generated from protobuf enum <code>PRODUCT_GIFT_PS_POINT_CARD_030 = 11;</code>
     */
    const PRODUCT_GIFT_PS_POINT_CARD_030 = 11;
    /**
     * Generated from protobuf enum <code>PRODUCT_GIFT_PS_POINT_CARD_050 = 12;</code>
     */
    const PRODUCT_GIFT_PS_POINT_CARD_050 = 12;
    /**
     * Generated from protobuf enum <code>PRODUCT_GIFT_PS_POINT_CARD_100 = 13;</code>
     */
    const PRODUCT_GIFT_PS_POINT_CARD_100 = 13;

    private static $valueToName = [
        self::PRODUCT_GIFT_NONE => 'PRODUCT_GIFT_NONE',
        self::PRODUCT_GIFT_COIN => 'PRODUCT_GIFT_COIN',
        self::PRODUCT_GIFT_MONTH_CARD => 'PRODUCT_GIFT_MONTH_CARD',
        self::PRODUCT_GIFT_BP_68 => 'PRODUCT_GIFT_BP_68',
        self::PRODUCT_GIFT_BP_128 => 'PRODUCT_GIFT_BP_128',
        self::PRODUCT_GIFT_BP68_UPGRADE_128 => 'PRODUCT_GIFT_BP68_UPGRADE_128',
        self::PRODUCT_GIFT_POINT_CARD => 'PRODUCT_GIFT_POINT_CARD',
        self::PRODUCT_GIFT_PS_PRE_ORDER_1 => 'PRODUCT_GIFT_PS_PRE_ORDER_1',
        self::PRODUCT_GIFT_PS_PRE_ORDER_2 => 'PRODUCT_GIFT_PS_PRE_ORDER_2',
        self::PRODUCT_GIFT_GOOGLE_POINTS_100 => 'PRODUCT_GIFT_GOOGLE_POINTS_100',
        self::PRODUCT_GIFT_GOOGLE_POINTS_150 => 'PRODUCT_GIFT_GOOGLE_POINTS_150',
        self::PRODUCT_GIFT_PS_POINT_CARD_030 => 'PRODUCT_GIFT_PS_POINT_CARD_030',
        self::PRODUCT_GIFT_PS_POINT_CARD_050 => 'PRODUCT_GIFT_PS_POINT_CARD_050',
        self::PRODUCT_GIFT_PS_POINT_CARD_100 => 'PRODUCT_GIFT_PS_POINT_CARD_100',
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
