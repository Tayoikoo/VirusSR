<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>StrongChallengeActivityData</code>
 */
class StrongChallengeActivityData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 stage_id = 4;</code>
     */
    protected $stage_id = 0;
    /**
     * Generated from protobuf field <code>.StrongChallengeAvatarData fnelbpffamh = 10;</code>
     */
    protected $fnelbpffamh = null;
    /**
     * Generated from protobuf field <code>uint32 max_score = 11;</code>
     */
    protected $max_score = 0;
    /**
     * Generated from protobuf field <code>uint32 panel_id = 12;</code>
     */
    protected $panel_id = 0;
    /**
     * Generated from protobuf field <code>uint32 dpocofibbko = 5;</code>
     */
    protected $dpocofibbko = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $stage_id
     *     @type \StrongChallengeAvatarData $fnelbpffamh
     *     @type int $max_score
     *     @type int $panel_id
     *     @type int $dpocofibbko
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 stage_id = 4;</code>
     * @return int
     */
    public function getStageId()
    {
        return $this->stage_id;
    }

    /**
     * Generated from protobuf field <code>uint32 stage_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStageId($var)
    {
        GPBUtil::checkUint32($var);
        $this->stage_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.StrongChallengeAvatarData fnelbpffamh = 10;</code>
     * @return \StrongChallengeAvatarData|null
     */
    public function getFnelbpffamh()
    {
        return $this->fnelbpffamh;
    }

    public function hasFnelbpffamh()
    {
        return isset($this->fnelbpffamh);
    }

    public function clearFnelbpffamh()
    {
        unset($this->fnelbpffamh);
    }

    /**
     * Generated from protobuf field <code>.StrongChallengeAvatarData fnelbpffamh = 10;</code>
     * @param \StrongChallengeAvatarData $var
     * @return $this
     */
    public function setFnelbpffamh($var)
    {
        GPBUtil::checkMessage($var, \StrongChallengeAvatarData::class);
        $this->fnelbpffamh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max_score = 11;</code>
     * @return int
     */
    public function getMaxScore()
    {
        return $this->max_score;
    }

    /**
     * Generated from protobuf field <code>uint32 max_score = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 panel_id = 12;</code>
     * @return int
     */
    public function getPanelId()
    {
        return $this->panel_id;
    }

    /**
     * Generated from protobuf field <code>uint32 panel_id = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setPanelId($var)
    {
        GPBUtil::checkUint32($var);
        $this->panel_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dpocofibbko = 5;</code>
     * @return int
     */
    public function getDpocofibbko()
    {
        return $this->dpocofibbko;
    }

    /**
     * Generated from protobuf field <code>uint32 dpocofibbko = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDpocofibbko($var)
    {
        GPBUtil::checkUint32($var);
        $this->dpocofibbko = $var;

        return $this;
    }

}

