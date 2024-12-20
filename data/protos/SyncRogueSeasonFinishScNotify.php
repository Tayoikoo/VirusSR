<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ENAODGOELIO (1813)
 *
 * Generated from protobuf message <code>SyncRogueSeasonFinishScNotify</code>
 */
class SyncRogueSeasonFinishScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.RogueScoreRewardInfo aliiifglpda = 13;</code>
     */
    protected $aliiifglpda = null;
    /**
     * Generated from protobuf field <code>.RogueFinishInfo rogue_finish_info = 5;</code>
     */
    protected $rogue_finish_info = null;
    /**
     * Generated from protobuf field <code>bool belnaehamco = 8;</code>
     */
    protected $belnaehamco = false;
    /**
     * Generated from protobuf field <code>.LineupInfo lineup = 11;</code>
     */
    protected $lineup = null;
    /**
     * Generated from protobuf field <code>.SceneInfo scene = 10;</code>
     */
    protected $scene = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RogueScoreRewardInfo $aliiifglpda
     *     @type \RogueFinishInfo $rogue_finish_info
     *     @type bool $belnaehamco
     *     @type \LineupInfo $lineup
     *     @type \SceneInfo $scene
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.RogueScoreRewardInfo aliiifglpda = 13;</code>
     * @return \RogueScoreRewardInfo|null
     */
    public function getAliiifglpda()
    {
        return $this->aliiifglpda;
    }

    public function hasAliiifglpda()
    {
        return isset($this->aliiifglpda);
    }

    public function clearAliiifglpda()
    {
        unset($this->aliiifglpda);
    }

    /**
     * Generated from protobuf field <code>.RogueScoreRewardInfo aliiifglpda = 13;</code>
     * @param \RogueScoreRewardInfo $var
     * @return $this
     */
    public function setAliiifglpda($var)
    {
        GPBUtil::checkMessage($var, \RogueScoreRewardInfo::class);
        $this->aliiifglpda = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RogueFinishInfo rogue_finish_info = 5;</code>
     * @return \RogueFinishInfo|null
     */
    public function getRogueFinishInfo()
    {
        return $this->rogue_finish_info;
    }

    public function hasRogueFinishInfo()
    {
        return isset($this->rogue_finish_info);
    }

    public function clearRogueFinishInfo()
    {
        unset($this->rogue_finish_info);
    }

    /**
     * Generated from protobuf field <code>.RogueFinishInfo rogue_finish_info = 5;</code>
     * @param \RogueFinishInfo $var
     * @return $this
     */
    public function setRogueFinishInfo($var)
    {
        GPBUtil::checkMessage($var, \RogueFinishInfo::class);
        $this->rogue_finish_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool belnaehamco = 8;</code>
     * @return bool
     */
    public function getBelnaehamco()
    {
        return $this->belnaehamco;
    }

    /**
     * Generated from protobuf field <code>bool belnaehamco = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setBelnaehamco($var)
    {
        GPBUtil::checkBool($var);
        $this->belnaehamco = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.LineupInfo lineup = 11;</code>
     * @return \LineupInfo|null
     */
    public function getLineup()
    {
        return $this->lineup;
    }

    public function hasLineup()
    {
        return isset($this->lineup);
    }

    public function clearLineup()
    {
        unset($this->lineup);
    }

    /**
     * Generated from protobuf field <code>.LineupInfo lineup = 11;</code>
     * @param \LineupInfo $var
     * @return $this
     */
    public function setLineup($var)
    {
        GPBUtil::checkMessage($var, \LineupInfo::class);
        $this->lineup = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.SceneInfo scene = 10;</code>
     * @return \SceneInfo|null
     */
    public function getScene()
    {
        return $this->scene;
    }

    public function hasScene()
    {
        return isset($this->scene);
    }

    public function clearScene()
    {
        unset($this->scene);
    }

    /**
     * Generated from protobuf field <code>.SceneInfo scene = 10;</code>
     * @param \SceneInfo $var
     * @return $this
     */
    public function setScene($var)
    {
        GPBUtil::checkMessage($var, \SceneInfo::class);
        $this->scene = $var;

        return $this;
    }

}

