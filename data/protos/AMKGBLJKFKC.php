<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AMKGBLJKFKC</code>
 */
class AMKGBLJKFKC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 kdmdmeofpfo = 12;</code>
     */
    private $kdmdmeofpfo;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $kdmdmeofpfo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 kdmdmeofpfo = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKdmdmeofpfo()
    {
        return $this->kdmdmeofpfo;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 kdmdmeofpfo = 12;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKdmdmeofpfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->kdmdmeofpfo = $arr;

        return $this;
    }

}

