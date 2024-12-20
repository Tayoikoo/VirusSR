<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MLFPJOENOJP (2526)
 *
 * Generated from protobuf message <code>TakeMultipleExpeditionRewardScRsp</code>
 */
class TakeMultipleExpeditionRewardScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .ItemList jlgdcnhnkkb = 9;</code>
     */
    private $jlgdcnhnkkb;
    /**
     * Generated from protobuf field <code>.ItemList extra_reward = 1;</code>
     */
    protected $extra_reward = null;
    /**
     * Generated from protobuf field <code>.ItemList reward = 7;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>repeated .ItemList dkmcblihgkh = 5;</code>
     */
    private $dkmcblihgkh;
    /**
     * Generated from protobuf field <code>repeated uint32 reward_expedition = 13;</code>
     */
    private $reward_expedition;
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\ItemList>|\Google\Protobuf\Internal\RepeatedField $jlgdcnhnkkb
     *     @type \ItemList $extra_reward
     *     @type \ItemList $reward
     *     @type array<\ItemList>|\Google\Protobuf\Internal\RepeatedField $dkmcblihgkh
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $reward_expedition
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .ItemList jlgdcnhnkkb = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJlgdcnhnkkb()
    {
        return $this->jlgdcnhnkkb;
    }

    /**
     * Generated from protobuf field <code>repeated .ItemList jlgdcnhnkkb = 9;</code>
     * @param array<\ItemList>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJlgdcnhnkkb($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ItemList::class);
        $this->jlgdcnhnkkb = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList extra_reward = 1;</code>
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
     * Generated from protobuf field <code>.ItemList extra_reward = 1;</code>
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
     * Generated from protobuf field <code>.ItemList reward = 7;</code>
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
     * Generated from protobuf field <code>.ItemList reward = 7;</code>
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
     * Generated from protobuf field <code>repeated .ItemList dkmcblihgkh = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDkmcblihgkh()
    {
        return $this->dkmcblihgkh;
    }

    /**
     * Generated from protobuf field <code>repeated .ItemList dkmcblihgkh = 5;</code>
     * @param array<\ItemList>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDkmcblihgkh($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ItemList::class);
        $this->dkmcblihgkh = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 reward_expedition = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRewardExpedition()
    {
        return $this->reward_expedition;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 reward_expedition = 13;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRewardExpedition($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->reward_expedition = $arr;

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

}

