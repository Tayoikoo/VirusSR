<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BattleRogueMagicInfo</code>
 */
class BattleRogueMagicInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.BattleRogueMagicModifierInfo bgfhgkmpfnh = 1;</code>
     */
    protected $bgfhgkmpfnh = null;
    /**
     * Generated from protobuf field <code>.BattleRogueMagicDetailInfo detail_info = 2;</code>
     */
    protected $detail_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \BattleRogueMagicModifierInfo $bgfhgkmpfnh
     *     @type \BattleRogueMagicDetailInfo $detail_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.BattleRogueMagicModifierInfo bgfhgkmpfnh = 1;</code>
     * @return \BattleRogueMagicModifierInfo|null
     */
    public function getBgfhgkmpfnh()
    {
        return $this->bgfhgkmpfnh;
    }

    public function hasBgfhgkmpfnh()
    {
        return isset($this->bgfhgkmpfnh);
    }

    public function clearBgfhgkmpfnh()
    {
        unset($this->bgfhgkmpfnh);
    }

    /**
     * Generated from protobuf field <code>.BattleRogueMagicModifierInfo bgfhgkmpfnh = 1;</code>
     * @param \BattleRogueMagicModifierInfo $var
     * @return $this
     */
    public function setBgfhgkmpfnh($var)
    {
        GPBUtil::checkMessage($var, \BattleRogueMagicModifierInfo::class);
        $this->bgfhgkmpfnh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.BattleRogueMagicDetailInfo detail_info = 2;</code>
     * @return \BattleRogueMagicDetailInfo|null
     */
    public function getDetailInfo()
    {
        return $this->detail_info;
    }

    public function hasDetailInfo()
    {
        return isset($this->detail_info);
    }

    public function clearDetailInfo()
    {
        unset($this->detail_info);
    }

    /**
     * Generated from protobuf field <code>.BattleRogueMagicDetailInfo detail_info = 2;</code>
     * @param \BattleRogueMagicDetailInfo $var
     * @return $this
     */
    public function setDetailInfo($var)
    {
        GPBUtil::checkMessage($var, \BattleRogueMagicDetailInfo::class);
        $this->detail_info = $var;

        return $this;
    }

}

