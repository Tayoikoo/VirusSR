<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HCHODFHAOFE</code>
 */
class HCHODFHAOFE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 HNNDNEPPCJB = 2;</code>
     */
    private $HNNDNEPPCJB;
    /**
     * Generated from protobuf field <code>repeated uint32 CMCOLNPPBGG = 9;</code>
     */
    private $CMCOLNPPBGG;
    /**
     * Generated from protobuf field <code>uint32 IHKGMCMLOKL = 14;</code>
     */
    protected $IHKGMCMLOKL = 0;
    /**
     * Generated from protobuf field <code>uint32 PLNEDDGNPOI = 15;</code>
     */
    protected $PLNEDDGNPOI = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $HNNDNEPPCJB
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $CMCOLNPPBGG
     *     @type int $IHKGMCMLOKL
     *     @type int $PLNEDDGNPOI
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HNNDNEPPCJB = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHNNDNEPPCJB()
    {
        return $this->HNNDNEPPCJB;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HNNDNEPPCJB = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHNNDNEPPCJB($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->HNNDNEPPCJB = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 CMCOLNPPBGG = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCMCOLNPPBGG()
    {
        return $this->CMCOLNPPBGG;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 CMCOLNPPBGG = 9;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCMCOLNPPBGG($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->CMCOLNPPBGG = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IHKGMCMLOKL = 14;</code>
     * @return int
     */
    public function getIHKGMCMLOKL()
    {
        return $this->IHKGMCMLOKL;
    }

    /**
     * Generated from protobuf field <code>uint32 IHKGMCMLOKL = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setIHKGMCMLOKL($var)
    {
        GPBUtil::checkUint32($var);
        $this->IHKGMCMLOKL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PLNEDDGNPOI = 15;</code>
     * @return int
     */
    public function getPLNEDDGNPOI()
    {
        return $this->PLNEDDGNPOI;
    }

    /**
     * Generated from protobuf field <code>uint32 PLNEDDGNPOI = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setPLNEDDGNPOI($var)
    {
        GPBUtil::checkUint32($var);
        $this->PLNEDDGNPOI = $var;

        return $this;
    }

}
