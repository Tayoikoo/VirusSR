<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HOGJAEFBOFP (7135)
 *
 * Generated from protobuf message <code>EvolveBuildTakeExpRewardScRsp</code>
 */
class EvolveBuildTakeExpRewardScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.ItemList reward = 8;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>uint32 cbfncmiaonh = 14;</code>
     */
    protected $cbfncmiaonh = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \ItemList $reward
     *     @type int $cbfncmiaonh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
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

    /**
     * Generated from protobuf field <code>.ItemList reward = 8;</code>
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
     * Generated from protobuf field <code>.ItemList reward = 8;</code>
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
     * Generated from protobuf field <code>uint32 cbfncmiaonh = 14;</code>
     * @return int
     */
    public function getCbfncmiaonh()
    {
        return $this->cbfncmiaonh;
    }

    /**
     * Generated from protobuf field <code>uint32 cbfncmiaonh = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setCbfncmiaonh($var)
    {
        GPBUtil::checkUint32($var);
        $this->cbfncmiaonh = $var;

        return $this;
    }

}

