<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IGBNDAHOHED</code>
 */
class IGBNDAHOHED extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.IAMINGHLBDJ mobjjpmiaab = 11;</code>
     */
    protected $mobjjpmiaab = null;
    /**
     * Generated from protobuf field <code>.ItemCostData cost_data = 6;</code>
     */
    protected $cost_data = null;
    /**
     * Generated from protobuf field <code>.ItemCostData mgkbnfokmkj = 7;</code>
     */
    protected $mgkbnfokmkj = null;
    /**
     * Generated from protobuf field <code>bool onaignfolfj = 14;</code>
     */
    protected $onaignfolfj = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \IAMINGHLBDJ $mobjjpmiaab
     *     @type \ItemCostData $cost_data
     *     @type \ItemCostData $mgkbnfokmkj
     *     @type bool $onaignfolfj
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.IAMINGHLBDJ mobjjpmiaab = 11;</code>
     * @return \IAMINGHLBDJ|null
     */
    public function getMobjjpmiaab()
    {
        return $this->mobjjpmiaab;
    }

    public function hasMobjjpmiaab()
    {
        return isset($this->mobjjpmiaab);
    }

    public function clearMobjjpmiaab()
    {
        unset($this->mobjjpmiaab);
    }

    /**
     * Generated from protobuf field <code>.IAMINGHLBDJ mobjjpmiaab = 11;</code>
     * @param \IAMINGHLBDJ $var
     * @return $this
     */
    public function setMobjjpmiaab($var)
    {
        GPBUtil::checkMessage($var, \IAMINGHLBDJ::class);
        $this->mobjjpmiaab = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemCostData cost_data = 6;</code>
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
     * Generated from protobuf field <code>.ItemCostData cost_data = 6;</code>
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
     * Generated from protobuf field <code>.ItemCostData mgkbnfokmkj = 7;</code>
     * @return \ItemCostData|null
     */
    public function getMgkbnfokmkj()
    {
        return $this->mgkbnfokmkj;
    }

    public function hasMgkbnfokmkj()
    {
        return isset($this->mgkbnfokmkj);
    }

    public function clearMgkbnfokmkj()
    {
        unset($this->mgkbnfokmkj);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData mgkbnfokmkj = 7;</code>
     * @param \ItemCostData $var
     * @return $this
     */
    public function setMgkbnfokmkj($var)
    {
        GPBUtil::checkMessage($var, \ItemCostData::class);
        $this->mgkbnfokmkj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool onaignfolfj = 14;</code>
     * @return bool
     */
    public function getOnaignfolfj()
    {
        return $this->onaignfolfj;
    }

    /**
     * Generated from protobuf field <code>bool onaignfolfj = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setOnaignfolfj($var)
    {
        GPBUtil::checkBool($var);
        $this->onaignfolfj = $var;

        return $this;
    }

}
