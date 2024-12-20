<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HJLGLGNFAJM (7753)
 *
 * Generated from protobuf message <code>RogueMagicReviveAvatarScRsp</code>
 */
class RogueMagicReviveAvatarScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemCostData rogue_revive_cost = 7;</code>
     */
    protected $rogue_revive_cost = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemCostData $rogue_revive_cost
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData rogue_revive_cost = 7;</code>
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
     * Generated from protobuf field <code>.ItemCostData rogue_revive_cost = 7;</code>
     * @param \ItemCostData $var
     * @return $this
     */
    public function setRogueReviveCost($var)
    {
        GPBUtil::checkMessage($var, \ItemCostData::class);
        $this->rogue_revive_cost = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

