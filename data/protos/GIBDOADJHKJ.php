<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GIBDOADJHKJ</code>
 */
class GIBDOADJHKJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.MGGJKPGEGLP FHEODGILEEP = 1;</code>
     */
    protected $FHEODGILEEP = null;
    /**
     * Generated from protobuf field <code>uint32 BEBCFIIABLI = 10;</code>
     */
    protected $BEBCFIIABLI = 0;
    /**
     * Generated from protobuf field <code>uint32 LCEEDIGELGM = 7;</code>
     */
    protected $LCEEDIGELGM = 0;
    /**
     * Generated from protobuf field <code>.OJGHBHAIGMG IFAJDNNCHMN = 2032;</code>
     */
    protected $IFAJDNNCHMN = null;
    /**
     * Generated from protobuf field <code>.AMIGGMENHFA PFBOBBMELFB = 384;</code>
     */
    protected $PFBOBBMELFB = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \MGGJKPGEGLP $FHEODGILEEP
     *     @type int $BEBCFIIABLI
     *     @type int $LCEEDIGELGM
     *     @type \OJGHBHAIGMG $IFAJDNNCHMN
     *     @type \AMIGGMENHFA $PFBOBBMELFB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
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
     * Generated from protobuf field <code>.MGGJKPGEGLP FHEODGILEEP = 1;</code>
     * @return \MGGJKPGEGLP|null
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
     * Generated from protobuf field <code>.MGGJKPGEGLP FHEODGILEEP = 1;</code>
     * @param \MGGJKPGEGLP $var
     * @return $this
     */
    public function setFHEODGILEEP($var)
    {
        GPBUtil::checkMessage($var, \MGGJKPGEGLP::class);
        $this->FHEODGILEEP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 BEBCFIIABLI = 10;</code>
     * @return int
     */
    public function getBEBCFIIABLI()
    {
        return $this->BEBCFIIABLI;
    }

    /**
     * Generated from protobuf field <code>uint32 BEBCFIIABLI = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setBEBCFIIABLI($var)
    {
        GPBUtil::checkUint32($var);
        $this->BEBCFIIABLI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LCEEDIGELGM = 7;</code>
     * @return int
     */
    public function getLCEEDIGELGM()
    {
        return $this->LCEEDIGELGM;
    }

    /**
     * Generated from protobuf field <code>uint32 LCEEDIGELGM = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLCEEDIGELGM($var)
    {
        GPBUtil::checkUint32($var);
        $this->LCEEDIGELGM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.OJGHBHAIGMG IFAJDNNCHMN = 2032;</code>
     * @return \OJGHBHAIGMG|null
     */
    public function getIFAJDNNCHMN()
    {
        return $this->IFAJDNNCHMN;
    }

    public function hasIFAJDNNCHMN()
    {
        return isset($this->IFAJDNNCHMN);
    }

    public function clearIFAJDNNCHMN()
    {
        unset($this->IFAJDNNCHMN);
    }

    /**
     * Generated from protobuf field <code>.OJGHBHAIGMG IFAJDNNCHMN = 2032;</code>
     * @param \OJGHBHAIGMG $var
     * @return $this
     */
    public function setIFAJDNNCHMN($var)
    {
        GPBUtil::checkMessage($var, \OJGHBHAIGMG::class);
        $this->IFAJDNNCHMN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AMIGGMENHFA PFBOBBMELFB = 384;</code>
     * @return \AMIGGMENHFA|null
     */
    public function getPFBOBBMELFB()
    {
        return $this->PFBOBBMELFB;
    }

    public function hasPFBOBBMELFB()
    {
        return isset($this->PFBOBBMELFB);
    }

    public function clearPFBOBBMELFB()
    {
        unset($this->PFBOBBMELFB);
    }

    /**
     * Generated from protobuf field <code>.AMIGGMENHFA PFBOBBMELFB = 384;</code>
     * @param \AMIGGMENHFA $var
     * @return $this
     */
    public function setPFBOBBMELFB($var)
    {
        GPBUtil::checkMessage($var, \AMIGGMENHFA::class);
        $this->PFBOBBMELFB = $var;

        return $this;
    }

}

