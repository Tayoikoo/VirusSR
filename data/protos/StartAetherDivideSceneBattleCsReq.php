<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PGLJDBNINOP (4867)
 *
 * Generated from protobuf message <code>StartAetherDivideSceneBattleCsReq</code>
 */
class StartAetherDivideSceneBattleCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 caster_id = 11;</code>
     */
    protected $caster_id = 0;
    /**
     * Generated from protobuf field <code>uint32 attacked_group_id = 5;</code>
     */
    protected $attacked_group_id = 0;
    /**
     * Generated from protobuf field <code>uint32 skill_index = 2;</code>
     */
    protected $skill_index = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 assist_monster_entity_id_list = 7;</code>
     */
    private $assist_monster_entity_id_list;
    /**
     * Generated from protobuf field <code>repeated .AssistMonsterEntityInfo assist_monster_entity_info = 8;</code>
     */
    private $assist_monster_entity_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $caster_id
     *     @type int $attacked_group_id
     *     @type int $skill_index
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $assist_monster_entity_id_list
     *     @type array<\AssistMonsterEntityInfo>|\Google\Protobuf\Internal\RepeatedField $assist_monster_entity_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 caster_id = 11;</code>
     * @return int
     */
    public function getCasterId()
    {
        return $this->caster_id;
    }

    /**
     * Generated from protobuf field <code>uint32 caster_id = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setCasterId($var)
    {
        GPBUtil::checkUint32($var);
        $this->caster_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 attacked_group_id = 5;</code>
     * @return int
     */
    public function getAttackedGroupId()
    {
        return $this->attacked_group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 attacked_group_id = 5;</code>
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
     * Generated from protobuf field <code>uint32 skill_index = 2;</code>
     * @return int
     */
    public function getSkillIndex()
    {
        return $this->skill_index;
    }

    /**
     * Generated from protobuf field <code>uint32 skill_index = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSkillIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->skill_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 assist_monster_entity_id_list = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssistMonsterEntityIdList()
    {
        return $this->assist_monster_entity_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 assist_monster_entity_id_list = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssistMonsterEntityIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->assist_monster_entity_id_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .AssistMonsterEntityInfo assist_monster_entity_info = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssistMonsterEntityInfo()
    {
        return $this->assist_monster_entity_info;
    }

    /**
     * Generated from protobuf field <code>repeated .AssistMonsterEntityInfo assist_monster_entity_info = 8;</code>
     * @param array<\AssistMonsterEntityInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssistMonsterEntityInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AssistMonsterEntityInfo::class);
        $this->assist_monster_entity_info = $arr;

        return $this;
    }

}
