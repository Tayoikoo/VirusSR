<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BDDMEABELEC (6627)
 *
 * Generated from protobuf message <code>EnterStrongChallengeActivityStageScRsp</code>
 */
class EnterStrongChallengeActivityStageScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 11;</code>
     */
    protected $battle_info = null;
    /**
     * Generated from protobuf field <code>uint32 stage_id = 14;</code>
     */
    protected $stage_id = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \SceneBattleInfo $battle_info
     *     @type int $stage_id
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 11;</code>
     * @return \SceneBattleInfo|null
     */
    public function getBattleInfo()
    {
        return $this->battle_info;
    }

    public function hasBattleInfo()
    {
        return isset($this->battle_info);
    }

    public function clearBattleInfo()
    {
        unset($this->battle_info);
    }

    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 11;</code>
     * @param \SceneBattleInfo $var
     * @return $this
     */
    public function setBattleInfo($var)
    {
        GPBUtil::checkMessage($var, \SceneBattleInfo::class);
        $this->battle_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 stage_id = 14;</code>
     * @return int
     */
    public function getStageId()
    {
        return $this->stage_id;
    }

    /**
     * Generated from protobuf field <code>uint32 stage_id = 14;</code>
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
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
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

