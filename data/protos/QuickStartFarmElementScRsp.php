<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PKICEIJHCGN (1374)
 *
 * Generated from protobuf message <code>QuickStartFarmElementScRsp</code>
 */
class QuickStartFarmElementScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 8;</code>
     */
    protected $battle_info = null;
    /**
     * Generated from protobuf field <code>uint32 world_level = 15;</code>
     */
    protected $world_level = 0;
    /**
     * Generated from protobuf field <code>uint32 kidmdefnaak = 1;</code>
     */
    protected $kidmdefnaak = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \SceneBattleInfo $battle_info
     *     @type int $world_level
     *     @type int $kidmdefnaak
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
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
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 8;</code>
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
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 8;</code>
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
     * Generated from protobuf field <code>uint32 world_level = 15;</code>
     * @return int
     */
    public function getWorldLevel()
    {
        return $this->world_level;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setWorldLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->world_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 kidmdefnaak = 1;</code>
     * @return int
     */
    public function getKidmdefnaak()
    {
        return $this->kidmdefnaak;
    }

    /**
     * Generated from protobuf field <code>uint32 kidmdefnaak = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKidmdefnaak($var)
    {
        GPBUtil::checkUint32($var);
        $this->kidmdefnaak = $var;

        return $this;
    }

}

