<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BFEJLAJIPNG</code>
 */
class BFEJLAJIPNG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 avatar_id_list = 11;</code>
     */
    private $avatar_id_list;
    /**
     * Generated from protobuf field <code>.ItemCostData rogue_revive_cost = 8;</code>
     */
    protected $rogue_revive_cost = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $avatar_id_list
     *     @type \ItemCostData $rogue_revive_cost
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 avatar_id_list = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarIdList()
    {
        return $this->avatar_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 avatar_id_list = 11;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->avatar_id_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemCostData rogue_revive_cost = 8;</code>
     * @return \ItemCostData|null
     */
    public function getRogueReviveCost()
    {
        return $this->rogue_revive_cost;
    }

    public function hasRogueReviveCost()
    {
        return isset($this->rogue_revive_cost);
    }

    public function clearRogueReviveCost()
    {
        unset($this->rogue_revive_cost);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData rogue_revive_cost = 8;</code>
     * @param \ItemCostData $var
     * @return $this
     */
    public function setRogueReviveCost($var)
    {
        GPBUtil::checkMessage($var, \ItemCostData::class);
        $this->rogue_revive_cost = $var;

        return $this;
    }

}
