<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GCNOEGLFAGC</code>
 */
class GCNOEGLFAGC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool EEEDIPMFAFL = 12;</code>
     */
    protected $EEEDIPMFAFL = false;
    /**
     * Generated from protobuf field <code>.GLCCJMLODBH FHEODGILEEP = 15;</code>
     */
    protected $FHEODGILEEP = null;
    /**
     * Generated from protobuf field <code>.ItemCostData NNIFKHLBMFG = 4;</code>
     */
    protected $NNIFKHLBMFG = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $EEEDIPMFAFL
     *     @type \GLCCJMLODBH $FHEODGILEEP
     *     @type \ItemCostData $NNIFKHLBMFG
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool EEEDIPMFAFL = 12;</code>
     * @return bool
     */
    public function getEEEDIPMFAFL()
    {
        return $this->EEEDIPMFAFL;
    }

    /**
     * Generated from protobuf field <code>bool EEEDIPMFAFL = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setEEEDIPMFAFL($var)
    {
        GPBUtil::checkBool($var);
        $this->EEEDIPMFAFL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GLCCJMLODBH FHEODGILEEP = 15;</code>
     * @return \GLCCJMLODBH|null
     */
    public function getFHEODGILEEP()
    {
        return $this->FHEODGILEEP;
    }

    public function hasFHEODGILEEP()
    {
        return isset($this->FHEODGILEEP);
    }

    public function clearFHEODGILEEP()
    {
        unset($this->FHEODGILEEP);
    }

    /**
     * Generated from protobuf field <code>.GLCCJMLODBH FHEODGILEEP = 15;</code>
     * @param \GLCCJMLODBH $var
     * @return $this
     */
    public function setFHEODGILEEP($var)
    {
        GPBUtil::checkMessage($var, \GLCCJMLODBH::class);
        $this->FHEODGILEEP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemCostData NNIFKHLBMFG = 4;</code>
     * @return \ItemCostData|null
     */
    public function getNNIFKHLBMFG()
    {
        return $this->NNIFKHLBMFG;
    }

    public function hasNNIFKHLBMFG()
    {
        return isset($this->NNIFKHLBMFG);
    }

    public function clearNNIFKHLBMFG()
    {
        unset($this->NNIFKHLBMFG);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData NNIFKHLBMFG = 4;</code>
     * @param \ItemCostData $var
     * @return $this
     */
    public function setNNIFKHLBMFG($var)
    {
        GPBUtil::checkMessage($var, \ItemCostData::class);
        $this->NNIFKHLBMFG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
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
