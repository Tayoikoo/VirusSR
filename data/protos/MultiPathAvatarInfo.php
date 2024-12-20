<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MultiPathAvatarInfo</code>
 */
class MultiPathAvatarInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 rank = 5;</code>
     */
    protected $rank = 0;
    /**
     * Generated from protobuf field <code>.MultiPathAvatarType avatar_id = 3;</code>
     */
    protected $avatar_id = 0;
    /**
     * Generated from protobuf field <code>uint32 path_equipment_id = 6;</code>
     */
    protected $path_equipment_id = 0;
    /**
     * Generated from protobuf field <code>repeated .AvatarSkillTree multi_path_skill_tree = 13;</code>
     */
    private $multi_path_skill_tree;
    /**
     * Generated from protobuf field <code>repeated .EquipRelic equip_relic_list = 9;</code>
     */
    private $equip_relic_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $rank
     *     @type int $avatar_id
     *     @type int $path_equipment_id
     *     @type array<\AvatarSkillTree>|\Google\Protobuf\Internal\RepeatedField $multi_path_skill_tree
     *     @type array<\EquipRelic>|\Google\Protobuf\Internal\RepeatedField $equip_relic_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 rank = 5;</code>
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Generated from protobuf field <code>uint32 rank = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRank($var)
    {
        GPBUtil::checkUint32($var);
        $this->rank = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MultiPathAvatarType avatar_id = 3;</code>
     * @return int
     */
    public function getAvatarId()
    {
        return $this->avatar_id;
    }

    /**
     * Generated from protobuf field <code>.MultiPathAvatarType avatar_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarId($var)
    {
        GPBUtil::checkEnum($var, \MultiPathAvatarType::class);
        $this->avatar_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 path_equipment_id = 6;</code>
     * @return int
     */
    public function getPathEquipmentId()
    {
        return $this->path_equipment_id;
    }

    /**
     * Generated from protobuf field <code>uint32 path_equipment_id = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPathEquipmentId($var)
    {
        GPBUtil::checkUint32($var);
        $this->path_equipment_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .AvatarSkillTree multi_path_skill_tree = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMultiPathSkillTree()
    {
        return $this->multi_path_skill_tree;
    }

    /**
     * Generated from protobuf field <code>repeated .AvatarSkillTree multi_path_skill_tree = 13;</code>
     * @param array<\AvatarSkillTree>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMultiPathSkillTree($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AvatarSkillTree::class);
        $this->multi_path_skill_tree = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .EquipRelic equip_relic_list = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEquipRelicList()
    {
        return $this->equip_relic_list;
    }

    /**
     * Generated from protobuf field <code>repeated .EquipRelic equip_relic_list = 9;</code>
     * @param array<\EquipRelic>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEquipRelicList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \EquipRelic::class);
        $this->equip_relic_list = $arr;

        return $this;
    }

}

