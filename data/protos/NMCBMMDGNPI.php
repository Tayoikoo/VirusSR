<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NMCBMMDGNPI</code>
 */
class NMCBMMDGNPI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 group_id = 14;</code>
     */
    protected $group_id = 0;
    /**
     * Generated from protobuf field <code>uint32 DKJBDCJJJEH = 3;</code>
     */
    protected $DKJBDCJJJEH = 0;
    protected $challenge_stt_case;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ChallengeStatistics $challenge_default
     *     @type \ChallengeStoryStatistics $challenge_story
     *     @type \ChallengeBossStatistics $challenge_boss
     *     @type int $group_id
     *     @type int $DKJBDCJJJEH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ChallengeStatistics challenge_default = 1408;</code>
     * @return \ChallengeStatistics|null
     */
    public function getChallengeDefault()
    {
        return $this->readOneof(1408);
    }

    public function hasChallengeDefault()
    {
        return $this->hasOneof(1408);
    }

    /**
     * Generated from protobuf field <code>.ChallengeStatistics challenge_default = 1408;</code>
     * @param \ChallengeStatistics $var
     * @return $this
     */
    public function setChallengeDefault($var)
    {
        GPBUtil::checkMessage($var, \ChallengeStatistics::class);
        $this->writeOneof(1408, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ChallengeStoryStatistics challenge_story = 1373;</code>
     * @return \ChallengeStoryStatistics|null
     */
    public function getChallengeStory()
    {
        return $this->readOneof(1373);
    }

    public function hasChallengeStory()
    {
        return $this->hasOneof(1373);
    }

    /**
     * Generated from protobuf field <code>.ChallengeStoryStatistics challenge_story = 1373;</code>
     * @param \ChallengeStoryStatistics $var
     * @return $this
     */
    public function setChallengeStory($var)
    {
        GPBUtil::checkMessage($var, \ChallengeStoryStatistics::class);
        $this->writeOneof(1373, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ChallengeBossStatistics challenge_boss = 360;</code>
     * @return \ChallengeBossStatistics|null
     */
    public function getChallengeBoss()
    {
        return $this->readOneof(360);
    }

    public function hasChallengeBoss()
    {
        return $this->hasOneof(360);
    }

    /**
     * Generated from protobuf field <code>.ChallengeBossStatistics challenge_boss = 360;</code>
     * @param \ChallengeBossStatistics $var
     * @return $this
     */
    public function setChallengeBoss($var)
    {
        GPBUtil::checkMessage($var, \ChallengeBossStatistics::class);
        $this->writeOneof(360, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 14;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 14;</code>
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
     * Generated from protobuf field <code>uint32 DKJBDCJJJEH = 3;</code>
     * @return int
     */
    public function getDKJBDCJJJEH()
    {
        return $this->DKJBDCJJJEH;
    }

    /**
     * Generated from protobuf field <code>uint32 DKJBDCJJJEH = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDKJBDCJJJEH($var)
    {
        GPBUtil::checkUint32($var);
        $this->DKJBDCJJJEH = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getChallengeSttCase()
    {
        return $this->whichOneof("challenge_stt_case");
    }

}

