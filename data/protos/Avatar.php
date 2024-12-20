<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Avatar</code>
 */
class Avatar extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 first_met_time_stamp = 7;</code>
     */
    protected $first_met_time_stamp = 0;
    /**
     * Generated from protobuf field <code>repeated .EquipRelic equip_relic_list = 8;</code>
     */
    private $equip_relic_list;
    /**
     * Generated from protobuf field <code>uint32 exp = 1;</code>
     */
    protected $exp = 0;
    /**
     * Generated from protobuf field <code>uint32 equipment_unique_id = 12;</code>
     */
    protected $equipment_unique_id = 0;
    /**
     * Generated from protobuf field <code>uint32 rank = 15;</code>
     */
    protected $rank = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>repeated .AvatarSkillTree skilltree_list = 4;</code>
     */
    private $skilltree_list;
    /**
     * Generated from protobuf field <code>bool is_marked = 5;</code>
     */
    protected $is_marked = false;
    /**
     * Generated from protobuf field <code>repeated uint32 has_taken_reward_level_list = 11;</code>
     */
    private $has_taken_reward_level_list;
    /**
     * Generated from protobuf field <code>uint32 dressed_skin_id = 13;</code>
     */
    protected $dressed_skin_id = 0;
    /**
     * Generated from protobuf field <code>uint32 promotion = 14;</code>
     */
    protected $promotion = 0;
    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 9;</code>
     */
    protected $base_avatar_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $first_met_time_stamp
     *     @type array<\EquipRelic>|\Google\Protobuf\Internal\RepeatedField $equip_relic_list
     *     @type int $exp
     *     @type int $equipment_unique_id
     *     @type int $rank
     *     @type int $level
     *     @type array<\AvatarSkillTree>|\Google\Protobuf\Internal\RepeatedField $skilltree_list
     *     @type bool $is_marked
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $has_taken_reward_level_list
     *     @type int $dressed_skin_id
     *     @type int $promotion
     *     @type int $base_avatar_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 first_met_time_stamp = 7;</code>
     * @return int|string
     */
    public function getFirstMetTimeStamp()
    {
        return $this->first_met_time_stamp;
    }

    /**
     * Generated from protobuf field <code>uint64 first_met_time_stamp = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFirstMetTimeStamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->first_met_time_stamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .EquipRelic equip_relic_list = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEquipRelicList()
    {
        return $this->equip_relic_list;
    }

    /**
     * Generated from protobuf field <code>repeated .EquipRelic equip_relic_list = 8;</code>
     * @param array<\EquipRelic>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEquipRelicList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \EquipRelic::class);
        $this->equip_relic_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 1;</code>
     * @return int
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setExp($var)
    {
        GPBUtil::checkUint32($var);
        $this->exp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 equipment_unique_id = 12;</code>
     * @return int
     */
    public function getEquipmentUniqueId()
    {
        return $this->equipment_unique_id;
    }

    /**
     * Generated from protobuf field <code>uint32 equipment_unique_id = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setEquipmentUniqueId($var)
    {
        GPBUtil::checkUint32($var);
        $this->equipment_unique_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rank = 15;</code>
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Generated from protobuf field <code>uint32 rank = 15;</code>
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
     * Generated from protobuf field <code>uint32 level = 2;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .AvatarSkillTree skilltree_list = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSkilltreeList()
    {
        return $this->skilltree_list;
    }

    /**
     * Generated from protobuf field <code>repeated .AvatarSkillTree skilltree_list = 4;</code>
     * @param array<\AvatarSkillTree>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSkilltreeList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AvatarSkillTree::class);
        $this->skilltree_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_marked = 5;</code>
     * @return bool
     */
    public function getIsMarked()
    {
        return $this->is_marked;
    }

    /**
     * Generated from protobuf field <code>bool is_marked = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsMarked($var)
    {
        GPBUtil::checkBool($var);
        $this->is_marked = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 has_taken_reward_level_list = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHasTakenRewardLevelList()
    {
        return $this->has_taken_reward_level_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 has_taken_reward_level_list = 11;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHasTakenRewardLevelList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->has_taken_reward_level_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dressed_skin_id = 13;</code>
     * @return int
     */
    public function getDressedSkinId()
    {
        return $this->dressed_skin_id;
    }

    /**
     * Generated from protobuf field <code>uint32 dressed_skin_id = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setDressedSkinId($var)
    {
        GPBUtil::checkUint32($var);
        $this->dressed_skin_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 promotion = 14;</code>
     * @return int
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * Generated from protobuf field <code>uint32 promotion = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setPromotion($var)
    {
        GPBUtil::checkUint32($var);
        $this->promotion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 9;</code>
     * @return int
     */
    public function getBaseAvatarId()
    {
        return $this->base_avatar_id;
    }

    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setBaseAvatarId($var)
    {
        GPBUtil::checkUint32($var);
        $this->base_avatar_id = $var;

        return $this;
    }

}

