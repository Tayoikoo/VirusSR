<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OIKMBKGHBJN</code>
 */
class OIKMBKGHBJN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .DJOMEMKCBNB JFNNHMJBMKP = 2;</code>
     */
    private $JFNNHMJBMKP;
    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.ClientDownloadData PHIFKLFANPP = 10;</code>
     */
    protected $PHIFKLFANPP = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\DJOMEMKCBNB>|\Google\Protobuf\Internal\RepeatedField $JFNNHMJBMKP
     *     @type int $retcode
     *     @type \ClientDownloadData $PHIFKLFANPP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .DJOMEMKCBNB JFNNHMJBMKP = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJFNNHMJBMKP()
    {
        return $this->JFNNHMJBMKP;
    }

    /**
     * Generated from protobuf field <code>repeated .DJOMEMKCBNB JFNNHMJBMKP = 2;</code>
     * @param array<\DJOMEMKCBNB>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJFNNHMJBMKP($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \DJOMEMKCBNB::class);
        $this->JFNNHMJBMKP = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
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
     * Generated from protobuf field <code>.ClientDownloadData PHIFKLFANPP = 10;</code>
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
     * Generated from protobuf field <code>.ClientDownloadData PHIFKLFANPP = 10;</code>
     * @param \ClientDownloadData $var
     * @return $this
     */
    public function setPHIFKLFANPP($var)
    {
        GPBUtil::checkMessage($var, \ClientDownloadData::class);
        $this->PHIFKLFANPP = $var;

        return $this;
    }

}

