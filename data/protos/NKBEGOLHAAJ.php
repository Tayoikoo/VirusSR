<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NKBEGOLHAAJ</code>
 */
class NKBEGOLHAAJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.EEIAPAMIOCA PFBHFAGABAE = 7;</code>
     */
    protected $PFBHFAGABAE = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 FIIMDIGFDNJ = 14;</code>
     */
    protected $FIIMDIGFDNJ = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \EEIAPAMIOCA $PFBHFAGABAE
     *     @type int $retcode
     *     @type int $FIIMDIGFDNJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.EEIAPAMIOCA PFBHFAGABAE = 7;</code>
     * @return \EEIAPAMIOCA|null
     */
    public function getPFBHFAGABAE()
    {
        return $this->PFBHFAGABAE;
    }

    public function hasPFBHFAGABAE()
    {
        return isset($this->PFBHFAGABAE);
    }

    public function clearPFBHFAGABAE()
    {
        unset($this->PFBHFAGABAE);
    }

    /**
     * Generated from protobuf field <code>.EEIAPAMIOCA PFBHFAGABAE = 7;</code>
     * @param \EEIAPAMIOCA $var
     * @return $this
     */
    public function setPFBHFAGABAE($var)
    {
        GPBUtil::checkMessage($var, \EEIAPAMIOCA::class);
        $this->PFBHFAGABAE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
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
     * Generated from protobuf field <code>uint32 FIIMDIGFDNJ = 14;</code>
     * @return int
     */
    public function getFIIMDIGFDNJ()
    {
        return $this->FIIMDIGFDNJ;
    }

    /**
     * Generated from protobuf field <code>uint32 FIIMDIGFDNJ = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setFIIMDIGFDNJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->FIIMDIGFDNJ = $var;

        return $this;
    }

}

