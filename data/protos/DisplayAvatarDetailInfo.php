<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DisplayAvatarDetailInfo</code>
 */
class DisplayAvatarDetailInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 Rank = 15;</code>
     */
    protected $Rank = 0;
    /**
     * Generated from protobuf field <code>uint32 Pos = 12;</code>
     */
    protected $Pos = 0;
    /**
     * Generated from protobuf field <code>repeated .DisplayRelicInfo RelicList = 1;</code>
     */
    private $RelicList;
    /**
     * Generated from protobuf field <code>uint32 Promotion = 6;</code>
     */
    protected $Promotion = 0;
    /**
     * Generated from protobuf field <code>repeated .AvatarSkillTree SkilltreeList = 9;</code>
     */
    private $SkilltreeList;
    /**
     * Generated from protobuf field <code>uint32 Exp = 8;</code>
     */
    protected $Exp = 0;
    /**
     * Generated from protobuf field <code>uint32 AvatarId = 14;</code>
     */
    protected $AvatarId = 0;
    /**
     * Generated from protobuf field <code>uint32 Level = 2;</code>
     */
    protected $Level = 0;
    /**
     * Generated from protobuf field <code>.DisplayEquipmentInfo Equipment = 13;</code>
     */
    protected $Equipment = null;
    /**
     * Generated from protobuf field <code>uint32 DressedSkinId = 10;</code>
     */
    protected $DressedSkinId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Rank
     *     @type int $Pos
     *     @type array<\DisplayRelicInfo>|\Google\Protobuf\Internal\RepeatedField $RelicList
     *     @type int $Promotion
     *     @type array<\AvatarSkillTree>|\Google\Protobuf\Internal\RepeatedField $SkilltreeList
     *     @type int $Exp
     *     @type int $AvatarId
     *     @type int $Level
     *     @type \DisplayEquipmentInfo $Equipment
     *     @type int $DressedSkinId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 Rank = 15;</code>
     * @return int
     */
    public function getRank()
    {
        return $this->Rank;
    }

    /**
     * Generated from protobuf field <code>uint32 Rank = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setRank($var)
    {
        GPBUtil::checkUint32($var);
        $this->Rank = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Pos = 12;</code>
     * @return int
     */
    public function getPos()
    {
        return $this->Pos;
    }

    /**
     * Generated from protobuf field <code>uint32 Pos = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setPos($var)
    {
        GPBUtil::checkUint32($var);
        $this->Pos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .DisplayRelicInfo RelicList = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRelicList()
    {
        return $this->RelicList;
    }

    /**
     * Generated from protobuf field <code>repeated .DisplayRelicInfo RelicList = 1;</code>
     * @param array<\DisplayRelicInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRelicList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \DisplayRelicInfo::class);
        $this->RelicList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Promotion = 6;</code>
     * @return int
     */
    public function getPromotion()
    {
        return $this->Promotion;
    }

    /**
     * Generated from protobuf field <code>uint32 Promotion = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPromotion($var)
    {
        GPBUtil::checkUint32($var);
        $this->Promotion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .AvatarSkillTree SkilltreeList = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSkilltreeList()
    {
        return $this->SkilltreeList;
    }

    /**
     * Generated from protobuf field <code>repeated .AvatarSkillTree SkilltreeList = 9;</code>
     * @param array<\AvatarSkillTree>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSkilltreeList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AvatarSkillTree::class);
        $this->SkilltreeList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Exp = 8;</code>
     * @return int
     */
    public function getExp()
    {
        return $this->Exp;
    }

    /**
     * Generated from protobuf field <code>uint32 Exp = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setExp($var)
    {
        GPBUtil::checkUint32($var);
        $this->Exp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AvatarId = 14;</code>
     * @return int
     */
    public function getAvatarId()
    {
        return $this->AvatarId;
    }

    /**
     * Generated from protobuf field <code>uint32 AvatarId = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarId($var)
    {
        GPBUtil::checkUint32($var);
        $this->AvatarId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Level = 2;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * Generated from protobuf field <code>uint32 Level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->Level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.DisplayEquipmentInfo Equipment = 13;</code>
     * @return \DisplayEquipmentInfo|null
     */
    public function getEquipment()
    {
        return $this->Equipment;
    }

    public function hasEquipment()
    {
        return isset($this->Equipment);
    }

    public function clearEquipment()
    {
        unset($this->Equipment);
    }

    /**
     * Generated from protobuf field <code>.DisplayEquipmentInfo Equipment = 13;</code>
     * @param \DisplayEquipmentInfo $var
     * @return $this
     */
    public function setEquipment($var)
    {
        GPBUtil::checkMessage($var, \DisplayEquipmentInfo::class);
        $this->Equipment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DressedSkinId = 10;</code>
     * @return int
     */
    public function getDressedSkinId()
    {
        return $this->DressedSkinId;
    }

    /**
     * Generated from protobuf field <code>uint32 DressedSkinId = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setDressedSkinId($var)
    {
        GPBUtil::checkUint32($var);
        $this->DressedSkinId = $var;

        return $this;
    }

}

