<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KIFHBDGECED (3652)
 *
 * Generated from protobuf message <code>TakeFightActivityRewardScRsp</code>
 */
class TakeFightActivityRewardScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ibafdobbegd = 3;</code>
     */
    protected $ibafdobbegd = 0;
    /**
     * Generated from protobuf field <code>uint32 group_id = 6;</code>
     */
    protected $group_id = 0;
    /**
     * Generated from protobuf field <code>.ItemList reward = 7;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ibafdobbegd
     *     @type int $group_id
     *     @type \ItemList $reward
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ibafdobbegd = 3;</code>
     * @return int
     */
    public function getIbafdobbegd()
    {
        return $this->ibafdobbegd;
    }

    /**
     * Generated from protobuf field <code>uint32 ibafdobbegd = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIbafdobbegd($var)
    {
        GPBUtil::checkUint32($var);
        $this->ibafdobbegd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 6;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->group_id = $var;

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
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
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

