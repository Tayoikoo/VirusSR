<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NGKAJNKHKKH</code>
 */
class NGKAJNKHKKH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool PHLELGAJABE = 3;</code>
     */
    protected $PHLELGAJABE = false;
    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.AAEMICFOLKA DIMIOKPLFMC = 9;</code>
     */
    protected $DIMIOKPLFMC = null;
    /**
     * Generated from protobuf field <code>.PAPPEKLEDIK KPAAOBODFPF = 4;</code>
     */
    protected $KPAAOBODFPF = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $PHLELGAJABE
     *     @type int $retcode
     *     @type \AAEMICFOLKA $DIMIOKPLFMC
     *     @type \PAPPEKLEDIK $KPAAOBODFPF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool PHLELGAJABE = 3;</code>
     * @return bool
     */
    public function getPHLELGAJABE()
    {
        return $this->PHLELGAJABE;
    }

    /**
     * Generated from protobuf field <code>bool PHLELGAJABE = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setPHLELGAJABE($var)
    {
        GPBUtil::checkBool($var);
        $this->PHLELGAJABE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
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
     * Generated from protobuf field <code>.AAEMICFOLKA DIMIOKPLFMC = 9;</code>
     * @return \AAEMICFOLKA|null
     */
    public function getDIMIOKPLFMC()
    {
        return $this->DIMIOKPLFMC;
    }

    public function hasDIMIOKPLFMC()
    {
        return isset($this->DIMIOKPLFMC);
    }

    public function clearDIMIOKPLFMC()
    {
        unset($this->DIMIOKPLFMC);
    }

    /**
     * Generated from protobuf field <code>.AAEMICFOLKA DIMIOKPLFMC = 9;</code>
     * @param \AAEMICFOLKA $var
     * @return $this
     */
    public function setDIMIOKPLFMC($var)
    {
        GPBUtil::checkMessage($var, \AAEMICFOLKA::class);
        $this->DIMIOKPLFMC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PAPPEKLEDIK KPAAOBODFPF = 4;</code>
     * @return \PAPPEKLEDIK|null
     */
    public function getKPAAOBODFPF()
    {
        return $this->KPAAOBODFPF;
    }

    public function hasKPAAOBODFPF()
    {
        return isset($this->KPAAOBODFPF);
    }

    public function clearKPAAOBODFPF()
    {
        unset($this->KPAAOBODFPF);
    }

    /**
     * Generated from protobuf field <code>.PAPPEKLEDIK KPAAOBODFPF = 4;</code>
     * @param \PAPPEKLEDIK $var
     * @return $this
     */
    public function setKPAAOBODFPF($var)
    {
        GPBUtil::checkMessage($var, \PAPPEKLEDIK::class);
        $this->KPAAOBODFPF = $var;

        return $this;
    }

}

