<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BFDMEAFKMGJ</code>
 */
class BFDMEAFKMGJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 HGKBJCEFLGJ = 14;</code>
     */
    protected $HGKBJCEFLGJ = 0;
    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 1;</code>
     */
    protected $OMBLHJDKEJA = 0;
    /**
     * Generated from protobuf field <code>uint32 KIFKNCCBFPC = 4;</code>
     */
    protected $KIFKNCCBFPC = 0;
    /**
     * Generated from protobuf field <code>uint32 MFJIBHIMMEL = 6;</code>
     */
    protected $MFJIBHIMMEL = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $HGKBJCEFLGJ
     *     @type int $OMBLHJDKEJA
     *     @type int $KIFKNCCBFPC
     *     @type int $MFJIBHIMMEL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 HGKBJCEFLGJ = 14;</code>
     * @return int
     */
    public function getHGKBJCEFLGJ()
    {
        return $this->HGKBJCEFLGJ;
    }

    /**
     * Generated from protobuf field <code>uint32 HGKBJCEFLGJ = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setHGKBJCEFLGJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->HGKBJCEFLGJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 1;</code>
     * @return int
     */
    public function getOMBLHJDKEJA()
    {
        return $this->OMBLHJDKEJA;
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOMBLHJDKEJA($var)
    {
        GPBUtil::checkUint32($var);
        $this->OMBLHJDKEJA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 KIFKNCCBFPC = 4;</code>
     * @return int
     */
    public function getKIFKNCCBFPC()
    {
        return $this->KIFKNCCBFPC;
    }

    /**
     * Generated from protobuf field <code>uint32 KIFKNCCBFPC = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setKIFKNCCBFPC($var)
    {
        GPBUtil::checkUint32($var);
        $this->KIFKNCCBFPC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 MFJIBHIMMEL = 6;</code>
     * @return int
     */
    public function getMFJIBHIMMEL()
    {
        return $this->MFJIBHIMMEL;
    }

    /**
     * Generated from protobuf field <code>uint32 MFJIBHIMMEL = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMFJIBHIMMEL($var)
    {
        GPBUtil::checkUint32($var);
        $this->MFJIBHIMMEL = $var;

        return $this;
    }

}

