<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OGGILCEKBIE (1328)
 *
 * Generated from protobuf message <code>QuickStartCocoonStageScRsp</code>
 */
class QuickStartCocoonStageScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 dfpaikajkal = 1;</code>
     */
    protected $dfpaikajkal = 0;
    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 15;</code>
     */
    protected $battle_info = null;
    /**
     * Generated from protobuf field <code>uint32 wave = 10;</code>
     */
    protected $wave = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $dfpaikajkal
     *     @type \SceneBattleInfo $battle_info
     *     @type int $wave
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 dfpaikajkal = 1;</code>
     * @return int
     */
    public function getDfpaikajkal()
    {
        return $this->dfpaikajkal;
    }

    /**
     * Generated from protobuf field <code>uint32 dfpaikajkal = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDfpaikajkal($var)
    {
        GPBUtil::checkUint32($var);
        $this->dfpaikajkal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 15;</code>
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
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 15;</code>
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
     * Generated from protobuf field <code>uint32 wave = 10;</code>
     * @return int
     */
    public function getWave()
    {
        return $this->wave;
    }

    /**
     * Generated from protobuf field <code>uint32 wave = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setWave($var)
    {
        GPBUtil::checkUint32($var);
        $this->wave = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
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

