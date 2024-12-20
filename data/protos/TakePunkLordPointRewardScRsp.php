<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HGDJKCIFBGD (3225)
 *
 * Generated from protobuf message <code>TakePunkLordPointRewardScRsp</code>
 */
class TakePunkLordPointRewardScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList reward = 14;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>bool hgoijnknioa = 6;</code>
     */
    protected $hgoijnknioa = false;
    /**
     * Generated from protobuf field <code>uint32 level = 12;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $reward
     *     @type bool $hgoijnknioa
     *     @type int $level
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 14;</code>
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
     * Generated from protobuf field <code>.ItemList reward = 14;</code>
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
     * Generated from protobuf field <code>bool hgoijnknioa = 6;</code>
     * @return bool
     */
    public function getHgoijnknioa()
    {
        return $this->hgoijnknioa;
    }

    /**
     * Generated from protobuf field <code>bool hgoijnknioa = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setHgoijnknioa($var)
    {
        GPBUtil::checkBool($var);
        $this->hgoijnknioa = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 12;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
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

