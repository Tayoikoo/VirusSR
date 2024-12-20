<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KDOPKHGLNBP</code>
 */
class KDOPKHGLNBP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 bmcinbknmfp = 12;</code>
     */
    protected $bmcinbknmfp = 0;
    /**
     * Generated from protobuf field <code>bool ebapddabejo = 3;</code>
     */
    protected $ebapddabejo = false;
    /**
     * Generated from protobuf field <code>uint32 gddbplgkimf = 4;</code>
     */
    protected $gddbplgkimf = 0;
    /**
     * Generated from protobuf field <code>.ItemCostData cost_data = 2;</code>
     */
    protected $cost_data = null;
    /**
     * Generated from protobuf field <code>uint32 fadckclpeic = 7;</code>
     */
    protected $fadckclpeic = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $bmcinbknmfp
     *     @type bool $ebapddabejo
     *     @type int $gddbplgkimf
     *     @type \ItemCostData $cost_data
     *     @type int $fadckclpeic
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 bmcinbknmfp = 12;</code>
     * @return int
     */
    public function getBmcinbknmfp()
    {
        return $this->bmcinbknmfp;
    }

    /**
     * Generated from protobuf field <code>int32 bmcinbknmfp = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setBmcinbknmfp($var)
    {
        GPBUtil::checkInt32($var);
        $this->bmcinbknmfp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ebapddabejo = 3;</code>
     * @return bool
     */
    public function getEbapddabejo()
    {
        return $this->ebapddabejo;
    }

    /**
     * Generated from protobuf field <code>bool ebapddabejo = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setEbapddabejo($var)
    {
        GPBUtil::checkBool($var);
        $this->ebapddabejo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gddbplgkimf = 4;</code>
     * @return int
     */
    public function getGddbplgkimf()
    {
        return $this->gddbplgkimf;
    }

    /**
     * Generated from protobuf field <code>uint32 gddbplgkimf = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setGddbplgkimf($var)
    {
        GPBUtil::checkUint32($var);
        $this->gddbplgkimf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemCostData cost_data = 2;</code>
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
     * Generated from protobuf field <code>.ItemCostData cost_data = 2;</code>
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
     * Generated from protobuf field <code>uint32 fadckclpeic = 7;</code>
     * @return int
     */
    public function getFadckclpeic()
    {
        return $this->fadckclpeic;
    }

    /**
     * Generated from protobuf field <code>uint32 fadckclpeic = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setFadckclpeic($var)
    {
        GPBUtil::checkUint32($var);
        $this->fadckclpeic = $var;

        return $this;
    }

}

