<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BKHKANAMLJN</code>
 */
class BKHKANAMLJN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .ICBBDBLCJAF FCMOFHKFAIG = 9;</code>
     */
    private $FCMOFHKFAIG;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\ICBBDBLCJAF>|\Google\Protobuf\Internal\RepeatedField $FCMOFHKFAIG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .ICBBDBLCJAF FCMOFHKFAIG = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFCMOFHKFAIG()
    {
        return $this->FCMOFHKFAIG;
    }

    /**
     * Generated from protobuf field <code>repeated .ICBBDBLCJAF FCMOFHKFAIG = 9;</code>
     * @param array<\ICBBDBLCJAF>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFCMOFHKFAIG($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ICBBDBLCJAF::class);
        $this->FCMOFHKFAIG = $arr;

        return $this;
    }

}
