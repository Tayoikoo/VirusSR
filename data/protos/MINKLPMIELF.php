<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MINKLPMIELF</code>
 */
class MINKLPMIELF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .NDHNEMIJPFO lcllikpffop = 7;</code>
     */
    private $lcllikpffop;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\NDHNEMIJPFO>|\Google\Protobuf\Internal\RepeatedField $lcllikpffop
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .NDHNEMIJPFO lcllikpffop = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLcllikpffop()
    {
        return $this->lcllikpffop;
    }

    /**
     * Generated from protobuf field <code>repeated .NDHNEMIJPFO lcllikpffop = 7;</code>
     * @param array<\NDHNEMIJPFO>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLcllikpffop($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \NDHNEMIJPFO::class);
        $this->lcllikpffop = $arr;

        return $this;
    }

}
