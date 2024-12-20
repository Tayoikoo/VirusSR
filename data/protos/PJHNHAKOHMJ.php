<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PJHNHAKOHMJ</code>
 */
class PJHNHAKOHMJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 skill_id = 1;</code>
     */
    protected $skill_id = 0;
    /**
     * Generated from protobuf field <code>double ekapbeehomb = 2;</code>
     */
    protected $ekapbeehomb = 0.0;
    /**
     * Generated from protobuf field <code>repeated uint32 battle_target_list = 3;</code>
     */
    private $battle_target_list;
    /**
     * Generated from protobuf field <code>double damage = 4;</code>
     */
    protected $damage = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $skill_id
     *     @type float $ekapbeehomb
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $battle_target_list
     *     @type float $damage
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 skill_id = 1;</code>
     * @return int
     */
    public function getSkillId()
    {
        return $this->skill_id;
    }

    /**
     * Generated from protobuf field <code>uint32 skill_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSkillId($var)
    {
        GPBUtil::checkUint32($var);
        $this->skill_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double ekapbeehomb = 2;</code>
     * @return float
     */
    public function getEkapbeehomb()
    {
        return $this->ekapbeehomb;
    }

    /**
     * Generated from protobuf field <code>double ekapbeehomb = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setEkapbeehomb($var)
    {
        GPBUtil::checkDouble($var);
        $this->ekapbeehomb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 battle_target_list = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBattleTargetList()
    {
        return $this->battle_target_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 battle_target_list = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBattleTargetList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->battle_target_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double damage = 4;</code>
     * @return float
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Generated from protobuf field <code>double damage = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDamage($var)
    {
        GPBUtil::checkDouble($var);
        $this->damage = $var;

        return $this;
    }

}
