<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OHAPPKCJOGA</code>
 */
class OHAPPKCJOGA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 DCOIKPEBLHO = 2;</code>
     */
    protected $DCOIKPEBLHO = 0;
    /**
     * Generated from protobuf field <code>.ItemList reward = 5;</code>
     */
    protected $reward = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $DCOIKPEBLHO
     *     @type \ItemList $reward
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DCOIKPEBLHO = 2;</code>
     * @return int
     */
    public function getDCOIKPEBLHO()
    {
        return $this->DCOIKPEBLHO;
    }

    /**
     * Generated from protobuf field <code>uint32 DCOIKPEBLHO = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDCOIKPEBLHO($var)
    {
        GPBUtil::checkUint32($var);
        $this->DCOIKPEBLHO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 5;</code>
     * @return \ItemList|null
     */
    public function getReward()
    {
        return $this->reward;
    }

    public function hasReward()
    {
        return isset($this->reward);
    }

    public function clearReward()
    {
        unset($this->reward);
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 5;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setReward($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->reward = $var;

        return $this;
    }

}

