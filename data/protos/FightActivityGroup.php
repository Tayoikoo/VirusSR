<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FightActivityGroup</code>
 */
class FightActivityGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 PassedMaxDifficultyLevel = 13;</code>
     */
    protected $PassedMaxDifficultyLevel = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 TakenDifficultyLevelRewardList = 12;</code>
     */
    private $TakenDifficultyLevelRewardList;
    /**
     * Generated from protobuf field <code>uint32 GroupId = 6;</code>
     */
    protected $GroupId = 0;
    /**
     * Generated from protobuf field <code>uint32 EndlessMaxWave = 4;</code>
     */
    protected $EndlessMaxWave = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $PassedMaxDifficultyLevel
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $TakenDifficultyLevelRewardList
     *     @type int $GroupId
     *     @type int $EndlessMaxWave
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 PassedMaxDifficultyLevel = 13;</code>
     * @return int
     */
    public function getPassedMaxDifficultyLevel()
    {
        return $this->PassedMaxDifficultyLevel;
    }

    /**
     * Generated from protobuf field <code>uint32 PassedMaxDifficultyLevel = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setPassedMaxDifficultyLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->PassedMaxDifficultyLevel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 TakenDifficultyLevelRewardList = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTakenDifficultyLevelRewardList()
    {
        return $this->TakenDifficultyLevelRewardList;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 TakenDifficultyLevelRewardList = 12;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTakenDifficultyLevelRewardList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->TakenDifficultyLevelRewardList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 GroupId = 6;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->GroupId;
    }

    /**
     * Generated from protobuf field <code>uint32 GroupId = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->GroupId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 EndlessMaxWave = 4;</code>
     * @return int
     */
    public function getEndlessMaxWave()
    {
        return $this->EndlessMaxWave;
    }

    /**
     * Generated from protobuf field <code>uint32 EndlessMaxWave = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setEndlessMaxWave($var)
    {
        GPBUtil::checkUint32($var);
        $this->EndlessMaxWave = $var;

        return $this;
    }

}

