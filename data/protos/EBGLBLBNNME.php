<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EBGLBLBNNME</code>
 */
class EBGLBLBNNME extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ANOLIPJIGMN = 1;</code>
     */
    protected $ANOLIPJIGMN = 0;
    /**
     * Generated from protobuf field <code>double IAJHMELEJOB = 2;</code>
     */
    protected $IAJHMELEJOB = 0.0;
    /**
     * Generated from protobuf field <code>double OLPBENMDNJL = 3;</code>
     */
    protected $OLPBENMDNJL = 0.0;
    /**
     * Generated from protobuf field <code>uint32 wave = 4;</code>
     */
    protected $wave = 0;
    /**
     * Generated from protobuf field <code>uint32 BEPEKKHIFKE = 5;</code>
     */
    protected $BEPEKKHIFKE = 0;
    /**
     * Generated from protobuf field <code>double FMJPIKHPDJG = 6;</code>
     */
    protected $FMJPIKHPDJG = 0.0;
    /**
     * Generated from protobuf field <code>double NPMLANODKJM = 7;</code>
     */
    protected $NPMLANODKJM = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ANOLIPJIGMN
     *     @type float $IAJHMELEJOB
     *     @type float $OLPBENMDNJL
     *     @type int $wave
     *     @type int $BEPEKKHIFKE
     *     @type float $FMJPIKHPDJG
     *     @type float $NPMLANODKJM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ANOLIPJIGMN = 1;</code>
     * @return int
     */
    public function getANOLIPJIGMN()
    {
        return $this->ANOLIPJIGMN;
    }

    /**
     * Generated from protobuf field <code>uint32 ANOLIPJIGMN = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setANOLIPJIGMN($var)
    {
        GPBUtil::checkUint32($var);
        $this->ANOLIPJIGMN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double IAJHMELEJOB = 2;</code>
     * @return float
     */
    public function getIAJHMELEJOB()
    {
        return $this->IAJHMELEJOB;
    }

    /**
     * Generated from protobuf field <code>double IAJHMELEJOB = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setIAJHMELEJOB($var)
    {
        GPBUtil::checkDouble($var);
        $this->IAJHMELEJOB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double OLPBENMDNJL = 3;</code>
     * @return float
     */
    public function getOLPBENMDNJL()
    {
        return $this->OLPBENMDNJL;
    }

    /**
     * Generated from protobuf field <code>double OLPBENMDNJL = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setOLPBENMDNJL($var)
    {
        GPBUtil::checkDouble($var);
        $this->OLPBENMDNJL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 wave = 4;</code>
     * @return int
     */
    public function getWave()
    {
        return $this->wave;
    }

    /**
     * Generated from protobuf field <code>uint32 wave = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setWave($var)
    {
        GPBUtil::checkUint32($var);
        $this->wave = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 BEPEKKHIFKE = 5;</code>
     * @return int
     */
    public function getBEPEKKHIFKE()
    {
        return $this->BEPEKKHIFKE;
    }

    /**
     * Generated from protobuf field <code>uint32 BEPEKKHIFKE = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setBEPEKKHIFKE($var)
    {
        GPBUtil::checkUint32($var);
        $this->BEPEKKHIFKE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double FMJPIKHPDJG = 6;</code>
     * @return float
     */
    public function getFMJPIKHPDJG()
    {
        return $this->FMJPIKHPDJG;
    }

    /**
     * Generated from protobuf field <code>double FMJPIKHPDJG = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setFMJPIKHPDJG($var)
    {
        GPBUtil::checkDouble($var);
        $this->FMJPIKHPDJG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double NPMLANODKJM = 7;</code>
     * @return float
     */
    public function getNPMLANODKJM()
    {
        return $this->NPMLANODKJM;
    }

    /**
     * Generated from protobuf field <code>double NPMLANODKJM = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setNPMLANODKJM($var)
    {
        GPBUtil::checkDouble($var);
        $this->NPMLANODKJM = $var;

        return $this;
    }

}

