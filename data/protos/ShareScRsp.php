<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DHDLBANOOOI (4195)
 *
 * Generated from protobuf message <code>ShareScRsp</code>
 */
class ShareScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList reward = 13;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>.LNAGMOLCNOH hiapnjhnjgm = 3;</code>
     */
    protected $hiapnjhnjgm = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $reward
     *     @type \LNAGMOLCNOH $hiapnjhnjgm
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 13;</code>
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
     * Generated from protobuf field <code>.ItemList reward = 13;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setReward($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.LNAGMOLCNOH hiapnjhnjgm = 3;</code>
     * @return \LNAGMOLCNOH|null
     */
    public function getHiapnjhnjgm()
    {
        return $this->hiapnjhnjgm;
    }

    public function hasHiapnjhnjgm()
    {
        return isset($this->hiapnjhnjgm);
    }

    public function clearHiapnjhnjgm()
    {
        unset($this->hiapnjhnjgm);
    }

    /**
     * Generated from protobuf field <code>.LNAGMOLCNOH hiapnjhnjgm = 3;</code>
     * @param \LNAGMOLCNOH $var
     * @return $this
     */
    public function setHiapnjhnjgm($var)
    {
        GPBUtil::checkMessage($var, \LNAGMOLCNOH::class);
        $this->hiapnjhnjgm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

