<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BNFMHEKOJLH</code>
 */
class BNFMHEKOJLH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 AIPMMMLBOOA = 12;</code>
     */
    protected $AIPMMMLBOOA = 0;
    /**
     * Generated from protobuf field <code>uint64 FHLFBKJHHHF = 10;</code>
     */
    protected $FHLFBKJHHHF = 0;
    /**
     * Generated from protobuf field <code>.ClientDownloadData PHIFKLFANPP = 15;</code>
     */
    protected $PHIFKLFANPP = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $AIPMMMLBOOA
     *     @type int|string $FHLFBKJHHHF
     *     @type \ClientDownloadData $PHIFKLFANPP
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 AIPMMMLBOOA = 12;</code>
     * @return int|string
     */
    public function getAIPMMMLBOOA()
    {
        return $this->AIPMMMLBOOA;
    }

    /**
     * Generated from protobuf field <code>uint64 AIPMMMLBOOA = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAIPMMMLBOOA($var)
    {
        GPBUtil::checkUint64($var);
        $this->AIPMMMLBOOA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 FHLFBKJHHHF = 10;</code>
     * @return int|string
     */
    public function getFHLFBKJHHHF()
    {
        return $this->FHLFBKJHHHF;
    }

    /**
     * Generated from protobuf field <code>uint64 FHLFBKJHHHF = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFHLFBKJHHHF($var)
    {
        GPBUtil::checkUint64($var);
        $this->FHLFBKJHHHF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ClientDownloadData PHIFKLFANPP = 15;</code>
     * @return \ClientDownloadData|null
     */
    public function getPHIFKLFANPP()
    {
        return $this->PHIFKLFANPP;
    }

    public function hasPHIFKLFANPP()
    {
        return isset($this->PHIFKLFANPP);
    }

    public function clearPHIFKLFANPP()
    {
        unset($this->PHIFKLFANPP);
    }

    /**
     * Generated from protobuf field <code>.ClientDownloadData PHIFKLFANPP = 15;</code>
     * @param \ClientDownloadData $var
     * @return $this
     */
    public function setPHIFKLFANPP($var)
    {
        GPBUtil::checkMessage($var, \ClientDownloadData::class);
        $this->PHIFKLFANPP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
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

