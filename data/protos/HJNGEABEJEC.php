<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HJNGEABEJEC</code>
 */
class HJNGEABEJEC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.KFLMNJFICNK KPAAOBODFPF = 5;</code>
     */
    protected $KPAAOBODFPF = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>bool PHLELGAJABE = 8;</code>
     */
    protected $PHLELGAJABE = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \KFLMNJFICNK $KPAAOBODFPF
     *     @type int $retcode
     *     @type bool $PHLELGAJABE
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.KFLMNJFICNK KPAAOBODFPF = 5;</code>
     * @return \KFLMNJFICNK|null
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
     * Generated from protobuf field <code>.KFLMNJFICNK KPAAOBODFPF = 5;</code>
     * @param \KFLMNJFICNK $var
     * @return $this
     */
    public function setKPAAOBODFPF($var)
    {
        GPBUtil::checkMessage($var, \KFLMNJFICNK::class);
        $this->KPAAOBODFPF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
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
     * Generated from protobuf field <code>bool PHLELGAJABE = 8;</code>
     * @return bool
     */
    public function getPHLELGAJABE()
    {
        return $this->PHLELGAJABE;
    }

    /**
     * Generated from protobuf field <code>bool PHLELGAJABE = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setPHLELGAJABE($var)
    {
        GPBUtil::checkBool($var);
        $this->PHLELGAJABE = $var;

        return $this;
    }

}

