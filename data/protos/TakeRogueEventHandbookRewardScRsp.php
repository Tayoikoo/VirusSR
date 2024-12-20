<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DOEJEEHNBCF (5679)
 *
 * Generated from protobuf message <code>TakeRogueEventHandbookRewardScRsp</code>
 */
class TakeRogueEventHandbookRewardScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.ItemList reward = 13;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>repeated uint32 gkmfiajmnlm = 11;</code>
     */
    private $gkmfiajmnlm;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \ItemList $reward
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $gkmfiajmnlm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
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
     * Generated from protobuf field <code>repeated uint32 gkmfiajmnlm = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGkmfiajmnlm()
    {
        return $this->gkmfiajmnlm;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 gkmfiajmnlm = 11;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGkmfiajmnlm($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->gkmfiajmnlm = $arr;

        return $this;
    }

}
