<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ANBDAIBNOAI</code>
 */
class ANBDAIBNOAI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 PPMHFDBEFCN = 1;</code>
     */
    protected $PPMHFDBEFCN = 0;
    /**
     * Generated from protobuf field <code>bool PAGMFIDOLPD = 2;</code>
     */
    protected $PAGMFIDOLPD = false;
    /**
     * Generated from protobuf field <code>.FMNOMCJDCII FCDGJFMEKJL = 3;</code>
     */
    protected $FCDGJFMEKJL = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $PPMHFDBEFCN
     *     @type bool $PAGMFIDOLPD
     *     @type \FMNOMCJDCII $FCDGJFMEKJL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 PPMHFDBEFCN = 1;</code>
     * @return int
     */
    public function getPPMHFDBEFCN()
    {
        return $this->PPMHFDBEFCN;
    }

    /**
     * Generated from protobuf field <code>uint32 PPMHFDBEFCN = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPPMHFDBEFCN($var)
    {
        GPBUtil::checkUint32($var);
        $this->PPMHFDBEFCN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool PAGMFIDOLPD = 2;</code>
     * @return bool
     */
    public function getPAGMFIDOLPD()
    {
        return $this->PAGMFIDOLPD;
    }

    /**
     * Generated from protobuf field <code>bool PAGMFIDOLPD = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setPAGMFIDOLPD($var)
    {
        GPBUtil::checkBool($var);
        $this->PAGMFIDOLPD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FMNOMCJDCII FCDGJFMEKJL = 3;</code>
     * @return \FMNOMCJDCII|null
     */
    public function getFCDGJFMEKJL()
    {
        return $this->FCDGJFMEKJL;
    }

    public function hasFCDGJFMEKJL()
    {
        return isset($this->FCDGJFMEKJL);
    }

    public function clearFCDGJFMEKJL()
    {
        unset($this->FCDGJFMEKJL);
    }

    /**
     * Generated from protobuf field <code>.FMNOMCJDCII FCDGJFMEKJL = 3;</code>
     * @param \FMNOMCJDCII $var
     * @return $this
     */
    public function setFCDGJFMEKJL($var)
    {
        GPBUtil::checkMessage($var, \FMNOMCJDCII::class);
        $this->FCDGJFMEKJL = $var;

        return $this;
    }

}

