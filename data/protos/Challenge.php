<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Challenge</code>
 */
class Challenge extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 score_id = 7;</code>
     */
    protected $score_id = 0;
    /**
     * Generated from protobuf field <code>bool bgfekhfmeih = 12;</code>
     */
    protected $bgfekhfmeih = false;
    /**
     * Generated from protobuf field <code>uint32 challenge_id = 3;</code>
     */
    protected $challenge_id = 0;
    /**
     * Generated from protobuf field <code>.ChallengeExtInfo ext_info = 11;</code>
     */
    protected $ext_info = null;
    /**
     * Generated from protobuf field <code>uint32 score_two = 2;</code>
     */
    protected $score_two = 0;
    /**
     * Generated from protobuf field <code>uint32 record_id = 1;</code>
     */
    protected $record_id = 0;
    /**
     * Generated from protobuf field <code>uint32 taken_reward = 6;</code>
     */
    protected $taken_reward = 0;
    /**
     * Generated from protobuf field <code>uint32 star = 13;</code>
     */
    protected $star = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $score_id
     *     @type bool $bgfekhfmeih
     *     @type int $challenge_id
     *     @type \ChallengeExtInfo $ext_info
     *     @type int $score_two
     *     @type int $record_id
     *     @type int $taken_reward
     *     @type int $star
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 score_id = 7;</code>
     * @return int
     */
    public function getScoreId()
    {
        return $this->score_id;
    }

    /**
     * Generated from protobuf field <code>uint32 score_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setScoreId($var)
    {
        GPBUtil::checkUint32($var);
        $this->score_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool bgfekhfmeih = 12;</code>
     * @return bool
     */
    public function getBgfekhfmeih()
    {
        return $this->bgfekhfmeih;
    }

    /**
     * Generated from protobuf field <code>bool bgfekhfmeih = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setBgfekhfmeih($var)
    {
        GPBUtil::checkBool($var);
        $this->bgfekhfmeih = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_id = 3;</code>
     * @return int
     */
    public function getChallengeId()
    {
        return $this->challenge_id;
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setChallengeId($var)
    {
        GPBUtil::checkUint32($var);
        $this->challenge_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ChallengeExtInfo ext_info = 11;</code>
     * @return \ChallengeExtInfo|null
     */
    public function getExtInfo()
    {
        return $this->ext_info;
    }

    public function hasExtInfo()
    {
        return isset($this->ext_info);
    }

    public function clearExtInfo()
    {
        unset($this->ext_info);
    }

    /**
     * Generated from protobuf field <code>.ChallengeExtInfo ext_info = 11;</code>
     * @param \ChallengeExtInfo $var
     * @return $this
     */
    public function setExtInfo($var)
    {
        GPBUtil::checkMessage($var, \ChallengeExtInfo::class);
        $this->ext_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 score_two = 2;</code>
     * @return int
     */
    public function getScoreTwo()
    {
        return $this->score_two;
    }

    /**
     * Generated from protobuf field <code>uint32 score_two = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setScoreTwo($var)
    {
        GPBUtil::checkUint32($var);
        $this->score_two = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 record_id = 1;</code>
     * @return int
     */
    public function getRecordId()
    {
        return $this->record_id;
    }

    /**
     * Generated from protobuf field <code>uint32 record_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRecordId($var)
    {
        GPBUtil::checkUint32($var);
        $this->record_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 taken_reward = 6;</code>
     * @return int
     */
    public function getTakenReward()
    {
        return $this->taken_reward;
    }

    /**
     * Generated from protobuf field <code>uint32 taken_reward = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setTakenReward($var)
    {
        GPBUtil::checkUint32($var);
        $this->taken_reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 star = 13;</code>
     * @return int
     */
    public function getStar()
    {
        return $this->star;
    }

    /**
     * Generated from protobuf field <code>uint32 star = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setStar($var)
    {
        GPBUtil::checkUint32($var);
        $this->star = $var;

        return $this;
    }

}

