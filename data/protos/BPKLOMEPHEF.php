<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BPKLOMEPHEF</code>
 */
class BPKLOMEPHEF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 BFHBDHCFMFG = 1;</code>
     */
    private $BFHBDHCFMFG;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $BFHBDHCFMFG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 BFHBDHCFMFG = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBFHBDHCFMFG()
    {
        return $this->BFHBDHCFMFG;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 BFHBDHCFMFG = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBFHBDHCFMFG($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->BFHBDHCFMFG = $arr;

        return $this;
    }

}

