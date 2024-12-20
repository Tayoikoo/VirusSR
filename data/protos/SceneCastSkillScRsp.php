<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BBBJBIIBOEO (1428)
 *
 * Generated from protobuf message <code>SceneCastSkillScRsp</code>
 */
class SceneCastSkillScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 5;</code>
     */
    protected $battle_info = null;
    /**
     * Generated from protobuf field <code>uint32 attacked_group_id = 2;</code>
     */
    protected $attacked_group_id = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .HitMonsterBattleInfo monster_battle_info = 15;</code>
     */
    private $monster_battle_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \SceneBattleInfo $battle_info
     *     @type int $attacked_group_id
     *     @type int $retcode
     *     @type array<\HitMonsterBattleInfo>|\Google\Protobuf\Internal\RepeatedField $monster_battle_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 5;</code>
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
     * Generated from protobuf field <code>.SceneBattleInfo battle_info = 5;</code>
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
     * Generated from protobuf field <code>uint32 attacked_group_id = 2;</code>
     * @return int
     */
    public function getAttackedGroupId()
    {
        return $this->attacked_group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 attacked_group_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAttackedGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->attacked_group_id = $var;

        return $this;
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
     * Generated from protobuf field <code>repeated .HitMonsterBattleInfo monster_battle_info = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMonsterBattleInfo()
    {
        return $this->monster_battle_info;
    }

    /**
     * Generated from protobuf field <code>repeated .HitMonsterBattleInfo monster_battle_info = 15;</code>
     * @param array<\HitMonsterBattleInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMonsterBattleInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \HitMonsterBattleInfo::class);
        $this->monster_battle_info = $arr;

        return $this;
    }

}
