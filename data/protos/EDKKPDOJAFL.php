<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EDKKPDOJAFL</code>
 */
class EDKKPDOJAFL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.OJGHBHAIGMG IFAJDNNCHMN = 11;</code>
     */
    protected $IFAJDNNCHMN = null;
    /**
     * Generated from protobuf field <code>uint32 OEIHAMOLDEC = 6;</code>
     */
    protected $OEIHAMOLDEC = 0;
    /**
     * Generated from protobuf field <code>uint32 IAHPPIONMCO = 3;</code>
     */
    protected $IAHPPIONMCO = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \OJGHBHAIGMG $IFAJDNNCHMN
     *     @type int $OEIHAMOLDEC
     *     @type int $IAHPPIONMCO
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.OJGHBHAIGMG IFAJDNNCHMN = 11;</code>
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
     * Generated from protobuf field <code>.OJGHBHAIGMG IFAJDNNCHMN = 11;</code>
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
     * Generated from protobuf field <code>uint32 OEIHAMOLDEC = 6;</code>
     * @return int
     */
    public function getOEIHAMOLDEC()
    {
        return $this->OEIHAMOLDEC;
    }

    /**
     * Generated from protobuf field <code>uint32 OEIHAMOLDEC = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOEIHAMOLDEC($var)
    {
        GPBUtil::checkUint32($var);
        $this->OEIHAMOLDEC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IAHPPIONMCO = 3;</code>
     * @return int
     */
    public function getIAHPPIONMCO()
    {
        return $this->IAHPPIONMCO;
    }

    /**
     * Generated from protobuf field <code>uint32 IAHPPIONMCO = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIAHPPIONMCO($var)
    {
        GPBUtil::checkUint32($var);
        $this->IAHPPIONMCO = $var;

        return $this;
    }

}
