<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GJKJOOAFAOG</code>
 */
class GJKJOOAFAOG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 OACGANOMFMM = 15;</code>
     */
    private $OACGANOMFMM;
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.ItemList EIHNMCKNPAP = 10;</code>
     */
    protected $EIHNMCKNPAP = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $OACGANOMFMM
     *     @type int $retcode
     *     @type \ItemList $EIHNMCKNPAP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 OACGANOMFMM = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOACGANOMFMM()
    {
        return $this->OACGANOMFMM;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 OACGANOMFMM = 15;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOACGANOMFMM($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->OACGANOMFMM = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList EIHNMCKNPAP = 10;</code>
     * @return \ItemList|null
     */
    public function getEIHNMCKNPAP()
    {
        return $this->EIHNMCKNPAP;
    }

    public function hasEIHNMCKNPAP()
    {
        return isset($this->EIHNMCKNPAP);
    }

    public function clearEIHNMCKNPAP()
    {
        unset($this->EIHNMCKNPAP);
    }

    /**
     * Generated from protobuf field <code>.ItemList EIHNMCKNPAP = 10;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setEIHNMCKNPAP($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->EIHNMCKNPAP = $var;

        return $this;
    }

}
