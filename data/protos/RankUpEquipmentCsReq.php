<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FJNNLGCPGGF (524)
 *
 * Generated from protobuf message <code>RankUpEquipmentCsReq</code>
 */
class RankUpEquipmentCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemCostData cost_data = 1;</code>
     */
    protected $cost_data = null;
    /**
     * Generated from protobuf field <code>uint32 equipment_unique_id = 7;</code>
     */
    protected $equipment_unique_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemCostData $cost_data
     *     @type int $equipment_unique_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData cost_data = 1;</code>
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
     * Generated from protobuf field <code>.ItemCostData cost_data = 1;</code>
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
     * Generated from protobuf field <code>uint32 equipment_unique_id = 7;</code>
     * @return int
     */
    public function getEquipmentUniqueId()
    {
        return $this->equipment_unique_id;
    }

    /**
     * Generated from protobuf field <code>uint32 equipment_unique_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setEquipmentUniqueId($var)
    {
        GPBUtil::checkUint32($var);
        $this->equipment_unique_id = $var;

        return $this;
    }

}

