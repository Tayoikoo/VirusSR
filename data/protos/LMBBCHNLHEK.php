<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LMBBCHNLHEK</code>
 */
class LMBBCHNLHEK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemCostData AJKLOMDDOON = 14;</code>
     */
    protected $AJKLOMDDOON = null;
    /**
     * Generated from protobuf field <code>.PBPDBCCFBGH EBKNNOPMDCG = 15;</code>
     */
    protected $EBKNNOPMDCG = null;
    /**
     * Generated from protobuf field <code>.ItemCostData item_cost_list = 3;</code>
     */
    protected $item_cost_list = null;
    /**
     * Generated from protobuf field <code>bool COGDMNGBNLJ = 6;</code>
     */
    protected $COGDMNGBNLJ = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemCostData $AJKLOMDDOON
     *     @type \PBPDBCCFBGH $EBKNNOPMDCG
     *     @type \ItemCostData $item_cost_list
     *     @type bool $COGDMNGBNLJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData AJKLOMDDOON = 14;</code>
     * @return \ItemCostData|null
     */
    public function getAJKLOMDDOON()
    {
        return $this->AJKLOMDDOON;
    }

    public function hasAJKLOMDDOON()
    {
        return isset($this->AJKLOMDDOON);
    }

    public function clearAJKLOMDDOON()
    {
        unset($this->AJKLOMDDOON);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData AJKLOMDDOON = 14;</code>
     * @param \ItemCostData $var
     * @return $this
     */
    public function setAJKLOMDDOON($var)
    {
        GPBUtil::checkMessage($var, \ItemCostData::class);
        $this->AJKLOMDDOON = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PBPDBCCFBGH EBKNNOPMDCG = 15;</code>
     * @return \PBPDBCCFBGH|null
     */
    public function getEBKNNOPMDCG()
    {
        return $this->EBKNNOPMDCG;
    }

    public function hasEBKNNOPMDCG()
    {
        return isset($this->EBKNNOPMDCG);
    }

    public function clearEBKNNOPMDCG()
    {
        unset($this->EBKNNOPMDCG);
    }

    /**
     * Generated from protobuf field <code>.PBPDBCCFBGH EBKNNOPMDCG = 15;</code>
     * @param \PBPDBCCFBGH $var
     * @return $this
     */
    public function setEBKNNOPMDCG($var)
    {
        GPBUtil::checkMessage($var, \PBPDBCCFBGH::class);
        $this->EBKNNOPMDCG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemCostData item_cost_list = 3;</code>
     * @return \ItemCostData|null
     */
    public function getItemCostList()
    {
        return $this->item_cost_list;
    }

    public function hasItemCostList()
    {
        return isset($this->item_cost_list);
    }

    public function clearItemCostList()
    {
        unset($this->item_cost_list);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData item_cost_list = 3;</code>
     * @param \ItemCostData $var
     * @return $this
     */
    public function setItemCostList($var)
    {
        GPBUtil::checkMessage($var, \ItemCostData::class);
        $this->item_cost_list = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool COGDMNGBNLJ = 6;</code>
     * @return bool
     */
    public function getCOGDMNGBNLJ()
    {
        return $this->COGDMNGBNLJ;
    }

    /**
     * Generated from protobuf field <code>bool COGDMNGBNLJ = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setCOGDMNGBNLJ($var)
    {
        GPBUtil::checkBool($var);
        $this->COGDMNGBNLJ = $var;

        return $this;
    }

}
