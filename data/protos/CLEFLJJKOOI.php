<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CLEFLJJKOOI</code>
 */
class CLEFLJJKOOI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 JPFMOBHIECA = 8;</code>
     */
    protected $JPFMOBHIECA = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $JPFMOBHIECA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 JPFMOBHIECA = 8;</code>
     * @return int
     */
    public function getJPFMOBHIECA()
    {
        return $this->JPFMOBHIECA;
    }

    /**
     * Generated from protobuf field <code>uint32 JPFMOBHIECA = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setJPFMOBHIECA($var)
    {
        GPBUtil::checkUint32($var);
        $this->JPFMOBHIECA = $var;

        return $this;
    }

}
