<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RogueAvatarReviveCost</code>
 */
class RogueAvatarReviveCost extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemCostData rogue_revive_cost = 1;</code>
     */
    protected $rogue_revive_cost = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemCostData $rogue_revive_cost
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData rogue_revive_cost = 1;</code>
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
     * Generated from protobuf field <code>.ItemCostData rogue_revive_cost = 1;</code>
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
