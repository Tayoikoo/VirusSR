<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GNJHGKLKPEF (325)
 *
 * Generated from protobuf message <code>RankUpAvatarCsReq</code>
 */
class RankUpAvatarCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemCostData cost_data = 5;</code>
     */
    protected $cost_data = null;
    /**
     * Generated from protobuf field <code>uint32 avatar_id = 7;</code>
     */
    protected $avatar_id = 0;
    /**
     * Generated from protobuf field <code>uint32 rank = 11;</code>
     */
    protected $rank = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemCostData $cost_data
     *     @type int $avatar_id
     *     @type int $rank
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData cost_data = 5;</code>
     * @return \ItemCostData|null
     */
    public function getCostData()
    {
        return $this->cost_data;
    }

    public function hasCostData()
    {
        return isset($this->cost_data);
    }

    public function clearCostData()
    {
        unset($this->cost_data);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData cost_data = 5;</code>
     * @param \ItemCostData $var
     * @return $this
     */
    public function setCostData($var)
    {
        GPBUtil::checkMessage($var, \ItemCostData::class);
        $this->cost_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 avatar_id = 7;</code>
     * @return int
     */
    public function getAvatarId()
    {
        return $this->avatar_id;
    }

    /**
     * Generated from protobuf field <code>uint32 avatar_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarId($var)
    {
        GPBUtil::checkUint32($var);
        $this->avatar_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rank = 11;</code>
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Generated from protobuf field <code>uint32 rank = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setRank($var)
    {
        GPBUtil::checkUint32($var);
        $this->rank = $var;

        return $this;
    }

}

