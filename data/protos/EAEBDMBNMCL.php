<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EAEBDMBNMCL</code>
 */
class EAEBDMBNMCL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.NOFEAJCBDOA DDCKGABHENF = 12;</code>
     */
    protected $DDCKGABHENF = null;
    /**
     * Generated from protobuf field <code>.EBEONHJDGMG EDILCEHKGFP = 451;</code>
     */
    protected $EDILCEHKGFP = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \NOFEAJCBDOA $DDCKGABHENF
     *     @type \EBEONHJDGMG $EDILCEHKGFP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.NOFEAJCBDOA DDCKGABHENF = 12;</code>
     * @return \NOFEAJCBDOA|null
     */
    public function getDDCKGABHENF()
    {
        return $this->DDCKGABHENF;
    }

    public function hasDDCKGABHENF()
    {
        return isset($this->DDCKGABHENF);
    }

    public function clearDDCKGABHENF()
    {
        unset($this->DDCKGABHENF);
    }

    /**
     * Generated from protobuf field <code>.NOFEAJCBDOA DDCKGABHENF = 12;</code>
     * @param \NOFEAJCBDOA $var
     * @return $this
     */
    public function setDDCKGABHENF($var)
    {
        GPBUtil::checkMessage($var, \NOFEAJCBDOA::class);
        $this->DDCKGABHENF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.EBEONHJDGMG EDILCEHKGFP = 451;</code>
     * @return \EBEONHJDGMG|null
     */
    public function getEDILCEHKGFP()
    {
        return $this->EDILCEHKGFP;
    }

    public function hasEDILCEHKGFP()
    {
        return isset($this->EDILCEHKGFP);
    }

    public function clearEDILCEHKGFP()
    {
        unset($this->EDILCEHKGFP);
    }

    /**
     * Generated from protobuf field <code>.EBEONHJDGMG EDILCEHKGFP = 451;</code>
     * @param \EBEONHJDGMG $var
     * @return $this
     */
    public function setEDILCEHKGFP($var)
    {
        GPBUtil::checkMessage($var, \EBEONHJDGMG::class);
        $this->EDILCEHKGFP = $var;

        return $this;
    }

}
