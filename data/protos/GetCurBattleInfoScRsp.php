<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JPDJAGLHCOA (128)
 *
 * Generated from protobuf message <code>GetCurBattleInfoScRsp</code>
 */
class GetCurBattleInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 oejahhkbkng = 1;</code>
     */
    protected $oejahhkbkng = 0;
    /**
     * Generated from protobuf field <code>.AetherDivideBattleInfo aether_battle_info = 7;</code>
     */
    protected $aether_battle_info = null;
    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 6;</code>
     */
    protected $battle_info = null;
    /**
     * Generated from protobuf field <code>.BattleEndStatus last_end_status = 9;</code>
     */
    protected $last_end_status = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $oejahhkbkng
     *     @type \AetherDivideBattleInfo $aether_battle_info
     *     @type \SceneBattleInfo $battle_info
     *     @type int $last_end_status
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 oejahhkbkng = 1;</code>
     * @return int
     */
    public function getOejahhkbkng()
    {
        return $this->oejahhkbkng;
    }

    /**
     * Generated from protobuf field <code>uint32 oejahhkbkng = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOejahhkbkng($var)
    {
        GPBUtil::checkUint32($var);
        $this->oejahhkbkng = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AetherDivideBattleInfo aether_battle_info = 7;</code>
     * @return \AetherDivideBattleInfo|null
     */
    public function getAetherBattleInfo()
    {
        return $this->aether_battle_info;
    }

    public function hasAetherBattleInfo()
    {
        return isset($this->aether_battle_info);
    }

    public function clearAetherBattleInfo()
    {
        unset($this->aether_battle_info);
    }

    /**
     * Generated from protobuf field <code>.AetherDivideBattleInfo aether_battle_info = 7;</code>
     * @param \AetherDivideBattleInfo $var
     * @return $this
     */
    public function setAetherBattleInfo($var)
    {
        GPBUtil::checkMessage($var, \AetherDivideBattleInfo::class);
        $this->aether_battle_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 6;</code>
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
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 6;</code>
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
     * Generated from protobuf field <code>.BattleEndStatus last_end_status = 9;</code>
     * @return int
     */
    public function getLastEndStatus()
    {
        return $this->last_end_status;
    }

    /**
     * Generated from protobuf field <code>.BattleEndStatus last_end_status = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setLastEndStatus($var)
    {
        GPBUtil::checkEnum($var, \BattleEndStatus::class);
        $this->last_end_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
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

