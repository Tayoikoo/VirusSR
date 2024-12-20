<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RogueBuffEnhanceInfo</code>
 */
class RogueBuffEnhanceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float cebbblfacbe = 8;</code>
     */
    protected $cebbblfacbe = 0.0;
    /**
     * Generated from protobuf field <code>.ItemCostData cost_data = 15;</code>
     */
    protected $cost_data = null;
    /**
     * Generated from protobuf field <code>uint32 buff_id = 14;</code>
     */
    protected $buff_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $cebbblfacbe
     *     @type \ItemCostData $cost_data
     *     @type int $buff_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>float cebbblfacbe = 8;</code>
     * @return float
     */
    public function getCebbblfacbe()
    {
        return $this->cebbblfacbe;
    }

    /**
     * Generated from protobuf field <code>float cebbblfacbe = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setCebbblfacbe($var)
    {
        GPBUtil::checkFloat($var);
        $this->cebbblfacbe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemCostData cost_data = 15;</code>
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
     * Generated from protobuf field <code>.ItemCostData cost_data = 15;</code>
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
     * Generated from protobuf field <code>uint32 buff_id = 14;</code>
     * @return int
     */
    public function getBuffId()
    {
        return $this->buff_id;
    }

    /**
     * Generated from protobuf field <code>uint32 buff_id = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setBuffId($var)
    {
        GPBUtil::checkUint32($var);
        $this->buff_id = $var;

        return $this;
    }

}
