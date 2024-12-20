<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SceneMonsterWave</code>
 */
class SceneMonsterWave extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .ItemList olfgemadaco = 3;</code>
     */
    private $olfgemadaco;
    /**
     * Generated from protobuf field <code>uint32 battle_wave_id = 5;</code>
     */
    protected $battle_wave_id = 0;
    /**
     * Generated from protobuf field <code>repeated .SceneMonsterData monster_list = 1;</code>
     */
    private $monster_list;
    /**
     * Generated from protobuf field <code>uint32 battle_stage_id = 15;</code>
     */
    protected $battle_stage_id = 0;
    /**
     * Generated from protobuf field <code>.SceneMonsterWaveParam wave_param = 11;</code>
     */
    protected $wave_param = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\ItemList>|\Google\Protobuf\Internal\RepeatedField $olfgemadaco
     *     @type int $battle_wave_id
     *     @type array<\SceneMonsterData>|\Google\Protobuf\Internal\RepeatedField $monster_list
     *     @type int $battle_stage_id
     *     @type \SceneMonsterWaveParam $wave_param
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .ItemList olfgemadaco = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOlfgemadaco()
    {
        return $this->olfgemadaco;
    }

    /**
     * Generated from protobuf field <code>repeated .ItemList olfgemadaco = 3;</code>
     * @param array<\ItemList>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOlfgemadaco($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ItemList::class);
        $this->olfgemadaco = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 battle_wave_id = 5;</code>
     * @return int
     */
    public function getBattleWaveId()
    {
        return $this->battle_wave_id;
    }

    /**
     * Generated from protobuf field <code>uint32 battle_wave_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleWaveId($var)
    {
        GPBUtil::checkUint32($var);
        $this->battle_wave_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .SceneMonsterData monster_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMonsterList()
    {
        return $this->monster_list;
    }

    /**
     * Generated from protobuf field <code>repeated .SceneMonsterData monster_list = 1;</code>
     * @param array<\SceneMonsterData>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMonsterList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SceneMonsterData::class);
        $this->monster_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 battle_stage_id = 15;</code>
     * @return int
     */
    public function getBattleStageId()
    {
        return $this->battle_stage_id;
    }

    /**
     * Generated from protobuf field <code>uint32 battle_stage_id = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleStageId($var)
    {
        GPBUtil::checkUint32($var);
        $this->battle_stage_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.SceneMonsterWaveParam wave_param = 11;</code>
     * @return \SceneMonsterWaveParam|null
     */
    public function getWaveParam()
    {
        return $this->wave_param;
    }

    public function hasWaveParam()
    {
        return isset($this->wave_param);
    }

    public function clearWaveParam()
    {
        unset($this->wave_param);
    }

    /**
     * Generated from protobuf field <code>.SceneMonsterWaveParam wave_param = 11;</code>
     * @param \SceneMonsterWaveParam $var
     * @return $this
     */
    public function setWaveParam($var)
    {
        GPBUtil::checkMessage($var, \SceneMonsterWaveParam::class);
        $this->wave_param = $var;

        return $this;
    }

}
