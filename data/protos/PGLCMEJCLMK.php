<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PGLCMEJCLMK</code>
 */
class PGLCMEJCLMK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .OptionalReward PFJJFJKIANH = 15;</code>
     */
    private $PFJJFJKIANH;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\OptionalReward>|\Google\Protobuf\Internal\RepeatedField $PFJJFJKIANH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .OptionalReward PFJJFJKIANH = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPFJJFJKIANH()
    {
        return $this->PFJJFJKIANH;
    }

    /**
     * Generated from protobuf field <code>repeated .OptionalReward PFJJFJKIANH = 15;</code>
     * @param array<\OptionalReward>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPFJJFJKIANH($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \OptionalReward::class);
        $this->PFJJFJKIANH = $arr;

        return $this;
    }

}
