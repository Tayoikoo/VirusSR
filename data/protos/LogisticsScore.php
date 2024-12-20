<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LogisticsScore</code>
 */
class LogisticsScore extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 MaxScore = 1;</code>
     */
    protected $MaxScore = 0;
    /**
     * Generated from protobuf field <code>uint32 MapId = 4;</code>
     */
    protected $MapId = 0;
    /**
     * Generated from protobuf field <code>uint32 LastMaxScore = 14;</code>
     */
    protected $LastMaxScore = 0;
    /**
     * Generated from protobuf field <code>.ItemList Reward = 9;</code>
     */
    protected $Reward = null;
    /**
     * Generated from protobuf field <code>uint32 CurScore = 2;</code>
     */
    protected $CurScore = 0;
    /**
     * Generated from protobuf field <code>uint32 LastLevel = 11;</code>
     */
    protected $LastLevel = 0;
    /**
     * Generated from protobuf field <code>uint32 UnlockLevel = 10;</code>
     */
    protected $UnlockLevel = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $MaxScore
     *     @type int $MapId
     *     @type int $LastMaxScore
     *     @type \ItemList $Reward
     *     @type int $CurScore
     *     @type int $LastLevel
     *     @type int $UnlockLevel
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 MaxScore = 1;</code>
     * @return int
     */
    public function getMaxScore()
    {
        return $this->MaxScore;
    }

    /**
     * Generated from protobuf field <code>uint32 MaxScore = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->MaxScore = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 MapId = 4;</code>
     * @return int
     */
    public function getMapId()
    {
        return $this->MapId;
    }

    /**
     * Generated from protobuf field <code>uint32 MapId = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMapId($var)
    {
        GPBUtil::checkUint32($var);
        $this->MapId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LastMaxScore = 14;</code>
     * @return int
     */
    public function getLastMaxScore()
    {
        return $this->LastMaxScore;
    }

    /**
     * Generated from protobuf field <code>uint32 LastMaxScore = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setLastMaxScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->LastMaxScore = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList Reward = 9;</code>
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
     * Generated from protobuf field <code>.ItemList Reward = 9;</code>
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
     * Generated from protobuf field <code>uint32 CurScore = 2;</code>
     * @return int
     */
    public function getCurScore()
    {
        return $this->CurScore;
    }

    /**
     * Generated from protobuf field <code>uint32 CurScore = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCurScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->CurScore = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LastLevel = 11;</code>
     * @return int
     */
    public function getLastLevel()
    {
        return $this->LastLevel;
    }

    /**
     * Generated from protobuf field <code>uint32 LastLevel = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setLastLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->LastLevel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 UnlockLevel = 10;</code>
     * @return int
     */
    public function getUnlockLevel()
    {
        return $this->UnlockLevel;
    }

    /**
     * Generated from protobuf field <code>uint32 UnlockLevel = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setUnlockLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->UnlockLevel = $var;

        return $this;
    }

}

