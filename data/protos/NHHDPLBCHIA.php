<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NHHDPLBCHIA</code>
 */
class NHHDPLBCHIA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.GAMNEPOEGHM scene = 15;</code>
     */
    protected $scene = null;
    /**
     * Generated from protobuf field <code>repeated uint32 DAAOBJPPKND = 5;</code>
     */
    private $DAAOBJPPKND;
    /**
     * Generated from protobuf field <code>.DIEEHLNJLON CNPIENKHDFM = 10;</code>
     */
    protected $CNPIENKHDFM = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>int64 ONAPKMMGHBE = 1;</code>
     */
    protected $ONAPKMMGHBE = 0;
    /**
     * Generated from protobuf field <code>bool OLBEAFGCGGA = 7;</code>
     */
    protected $OLBEAFGCGGA = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GAMNEPOEGHM $scene
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $DAAOBJPPKND
     *     @type \DIEEHLNJLON $CNPIENKHDFM
     *     @type int $retcode
     *     @type int|string $ONAPKMMGHBE
     *     @type bool $OLBEAFGCGGA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.GAMNEPOEGHM scene = 15;</code>
     * @return \GAMNEPOEGHM|null
     */
    public function getScene()
    {
        return $this->scene;
    }

    public function hasScene()
    {
        return isset($this->scene);
    }

    public function clearScene()
    {
        unset($this->scene);
    }

    /**
     * Generated from protobuf field <code>.GAMNEPOEGHM scene = 15;</code>
     * @param \GAMNEPOEGHM $var
     * @return $this
     */
    public function setScene($var)
    {
        GPBUtil::checkMessage($var, \GAMNEPOEGHM::class);
        $this->scene = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 DAAOBJPPKND = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDAAOBJPPKND()
    {
        return $this->DAAOBJPPKND;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 DAAOBJPPKND = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDAAOBJPPKND($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->DAAOBJPPKND = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.DIEEHLNJLON CNPIENKHDFM = 10;</code>
     * @return \DIEEHLNJLON|null
     */
    public function getCNPIENKHDFM()
    {
        return $this->CNPIENKHDFM;
    }

    public function hasCNPIENKHDFM()
    {
        return isset($this->CNPIENKHDFM);
    }

    public function clearCNPIENKHDFM()
    {
        unset($this->CNPIENKHDFM);
    }

    /**
     * Generated from protobuf field <code>.DIEEHLNJLON CNPIENKHDFM = 10;</code>
     * @param \DIEEHLNJLON $var
     * @return $this
     */
    public function setCNPIENKHDFM($var)
    {
        GPBUtil::checkMessage($var, \DIEEHLNJLON::class);
        $this->CNPIENKHDFM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
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
     * Generated from protobuf field <code>int64 ONAPKMMGHBE = 1;</code>
     * @return int|string
     */
    public function getONAPKMMGHBE()
    {
        return $this->ONAPKMMGHBE;
    }

    /**
     * Generated from protobuf field <code>int64 ONAPKMMGHBE = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setONAPKMMGHBE($var)
    {
        GPBUtil::checkInt64($var);
        $this->ONAPKMMGHBE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool OLBEAFGCGGA = 7;</code>
     * @return bool
     */
    public function getOLBEAFGCGGA()
    {
        return $this->OLBEAFGCGGA;
    }

    /**
     * Generated from protobuf field <code>bool OLBEAFGCGGA = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setOLBEAFGCGGA($var)
    {
        GPBUtil::checkBool($var);
        $this->OLBEAFGCGGA = $var;

        return $this;
    }

}
