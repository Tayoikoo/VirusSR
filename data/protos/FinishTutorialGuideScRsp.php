<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FinishTutorialGuideScRsp (1643)
 *
 * Generated from protobuf message <code>FinishTutorialGuideScRsp</code>
 */
class FinishTutorialGuideScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList Reward = 12;</code>
     */
    protected $Reward = null;
    /**
     * Generated from protobuf field <code>.TutorialGuide TutorialGuide = 10;</code>
     */
    protected $TutorialGuide = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $Reward
     *     @type \TutorialGuide $TutorialGuide
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList Reward = 12;</code>
     * @return \ItemList|null
     */
    public function getReward()
    {
        return $this->Reward;
    }

    public function hasReward()
    {
        return isset($this->Reward);
    }

    public function clearReward()
    {
        unset($this->Reward);
    }

    /**
     * Generated from protobuf field <code>.ItemList Reward = 12;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setReward($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->Reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.TutorialGuide TutorialGuide = 10;</code>
     * @return \TutorialGuide|null
     */
    public function getTutorialGuide()
    {
        return $this->TutorialGuide;
    }

    public function hasTutorialGuide()
    {
        return isset($this->TutorialGuide);
    }

    public function clearTutorialGuide()
    {
        unset($this->TutorialGuide);
    }

    /**
     * Generated from protobuf field <code>.TutorialGuide TutorialGuide = 10;</code>
     * @param \TutorialGuide $var
     * @return $this
     */
    public function setTutorialGuide($var)
    {
        GPBUtil::checkMessage($var, \TutorialGuide::class);
        $this->TutorialGuide = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
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

