<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CEMBCGODFAD</code>
 */
class CEMBCGODFAD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.CCAFMMONHIG EDFCEPKKIHE = 4;</code>
     */
    protected $EDFCEPKKIHE = null;
    /**
     * Generated from protobuf field <code>.ELJHLDOEKID IAKPAFAEBEM = 8;</code>
     */
    protected $IAKPAFAEBEM = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \CCAFMMONHIG $EDFCEPKKIHE
     *     @type \ELJHLDOEKID $IAKPAFAEBEM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
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
     * Generated from protobuf field <code>.CCAFMMONHIG EDFCEPKKIHE = 4;</code>
     * @return \CCAFMMONHIG|null
     */
    public function getEDFCEPKKIHE()
    {
        return $this->EDFCEPKKIHE;
    }

    public function hasEDFCEPKKIHE()
    {
        return isset($this->EDFCEPKKIHE);
    }

    public function clearEDFCEPKKIHE()
    {
        unset($this->EDFCEPKKIHE);
    }

    /**
     * Generated from protobuf field <code>.CCAFMMONHIG EDFCEPKKIHE = 4;</code>
     * @param \CCAFMMONHIG $var
     * @return $this
     */
    public function setEDFCEPKKIHE($var)
    {
        GPBUtil::checkMessage($var, \CCAFMMONHIG::class);
        $this->EDFCEPKKIHE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ELJHLDOEKID IAKPAFAEBEM = 8;</code>
     * @return \ELJHLDOEKID|null
     */
    public function getIAKPAFAEBEM()
    {
        return $this->IAKPAFAEBEM;
    }

    public function hasIAKPAFAEBEM()
    {
        return isset($this->IAKPAFAEBEM);
    }

    public function clearIAKPAFAEBEM()
    {
        unset($this->IAKPAFAEBEM);
    }

    /**
     * Generated from protobuf field <code>.ELJHLDOEKID IAKPAFAEBEM = 8;</code>
     * @param \ELJHLDOEKID $var
     * @return $this
     */
    public function setIAKPAFAEBEM($var)
    {
        GPBUtil::checkMessage($var, \ELJHLDOEKID::class);
        $this->IAKPAFAEBEM = $var;

        return $this;
    }

}
