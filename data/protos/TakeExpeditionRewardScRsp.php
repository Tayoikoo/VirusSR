<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IGCGEOBCCAE (2574)
 *
 * Generated from protobuf message <code>TakeExpeditionRewardScRsp</code>
 */
class TakeExpeditionRewardScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList reward = 3;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>.ItemList extra_reward = 12;</code>
     */
    protected $extra_reward = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 expedition_id = 6;</code>
     */
    protected $expedition_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $reward
     *     @type \ItemList $extra_reward
     *     @type int $retcode
     *     @type int $expedition_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 3;</code>
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
     * Generated from protobuf field <code>.ItemList reward = 3;</code>
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
     * Generated from protobuf field <code>.ItemList extra_reward = 12;</code>
     * @return \ItemList|null
     */
    public function getExtraReward()
    {
        return $this->extra_reward;
    }

    public function hasExtraReward()
    {
        return isset($this->extra_reward);
    }

    public function clearExtraReward()
    {
        unset($this->extra_reward);
    }

    /**
     * Generated from protobuf field <code>.ItemList extra_reward = 12;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setExtraReward($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->extra_reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
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
     * Generated from protobuf field <code>uint32 expedition_id = 6;</code>
     * @return int
     */
    public function getExpeditionId()
    {
        return $this->expedition_id;
    }

    /**
     * Generated from protobuf field <code>uint32 expedition_id = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setExpeditionId($var)
    {
        GPBUtil::checkUint32($var);
        $this->expedition_id = $var;

        return $this;
    }

}

