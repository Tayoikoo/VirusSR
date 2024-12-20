<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CellMonsterInfo</code>
 */
class CellMonsterInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .CellMonster cell_monster_list = 12;</code>
     */
    private $cell_monster_list;
    /**
     * Generated from protobuf field <code>bool confirm = 13;</code>
     */
    protected $confirm = false;
    /**
     * Generated from protobuf field <code>uint32 select_boss_id = 8;</code>
     */
    protected $select_boss_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\CellMonster>|\Google\Protobuf\Internal\RepeatedField $cell_monster_list
     *     @type bool $confirm
     *     @type int $select_boss_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .CellMonster cell_monster_list = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCellMonsterList()
    {
        return $this->cell_monster_list;
    }

    /**
     * Generated from protobuf field <code>repeated .CellMonster cell_monster_list = 12;</code>
     * @param array<\CellMonster>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCellMonsterList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CellMonster::class);
        $this->cell_monster_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool confirm = 13;</code>
     * @return bool
     */
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * Generated from protobuf field <code>bool confirm = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setConfirm($var)
    {
        GPBUtil::checkBool($var);
        $this->confirm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 select_boss_id = 8;</code>
     * @return int
     */
    public function getSelectBossId()
    {
        return $this->select_boss_id;
    }

    /**
     * Generated from protobuf field <code>uint32 select_boss_id = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setSelectBossId($var)
    {
        GPBUtil::checkUint32($var);
        $this->select_boss_id = $var;

        return $this;
    }

}

