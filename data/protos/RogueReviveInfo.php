<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RogueReviveInfo</code>
 */
class RogueReviveInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 clgnbcjagcl = 15;</code>
     */
    protected $clgnbcjagcl = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 ggnjhinnbkh = 7;</code>
     */
    private $ggnjhinnbkh;
    /**
     * Generated from protobuf field <code>uint32 nbdneodpgol = 10;</code>
     */
    protected $nbdneodpgol = 0;
    /**
     * Generated from protobuf field <code>.ItemCostData rogue_revive_cost = 13;</code>
     */
    protected $rogue_revive_cost = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $clgnbcjagcl
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $ggnjhinnbkh
     *     @type int $nbdneodpgol
     *     @type \ItemCostData $rogue_revive_cost
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 clgnbcjagcl = 15;</code>
     * @return int
     */
    public function getClgnbcjagcl()
    {
        return $this->clgnbcjagcl;
    }

    /**
     * Generated from protobuf field <code>uint32 clgnbcjagcl = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setClgnbcjagcl($var)
    {
        GPBUtil::checkUint32($var);
        $this->clgnbcjagcl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ggnjhinnbkh = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGgnjhinnbkh()
    {
        return $this->ggnjhinnbkh;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ggnjhinnbkh = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGgnjhinnbkh($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->ggnjhinnbkh = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 nbdneodpgol = 10;</code>
     * @return int
     */
    public function getNbdneodpgol()
    {
        return $this->nbdneodpgol;
    }

    /**
     * Generated from protobuf field <code>uint32 nbdneodpgol = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setNbdneodpgol($var)
    {
        GPBUtil::checkUint32($var);
        $this->nbdneodpgol = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemCostData rogue_revive_cost = 13;</code>
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
     * Generated from protobuf field <code>.ItemCostData rogue_revive_cost = 13;</code>
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

