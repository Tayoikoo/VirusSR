<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JLOBAJOINGI</code>
 */
class JLOBAJOINGI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 JBKHLDIOBCA = 14;</code>
     */
    protected $JBKHLDIOBCA = 0;
    /**
     * Generated from protobuf field <code>repeated .BCIHKEKHFEE PNCMIMEPLPA = 6;</code>
     */
    private $PNCMIMEPLPA;
    /**
     * Generated from protobuf field <code>bool BEAACLMAMIH = 3;</code>
     */
    protected $BEAACLMAMIH = false;
    /**
     * Generated from protobuf field <code>repeated .JMMFBCMMKLL MMLANFIFPJJ = 11;</code>
     */
    private $MMLANFIFPJJ;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $JBKHLDIOBCA
     *     @type array<\BCIHKEKHFEE>|\Google\Protobuf\Internal\RepeatedField $PNCMIMEPLPA
     *     @type bool $BEAACLMAMIH
     *     @type array<\JMMFBCMMKLL>|\Google\Protobuf\Internal\RepeatedField $MMLANFIFPJJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 JBKHLDIOBCA = 14;</code>
     * @return int
     */
    public function getJBKHLDIOBCA()
    {
        return $this->JBKHLDIOBCA;
    }

    /**
     * Generated from protobuf field <code>uint32 JBKHLDIOBCA = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setJBKHLDIOBCA($var)
    {
        GPBUtil::checkUint32($var);
        $this->JBKHLDIOBCA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .BCIHKEKHFEE PNCMIMEPLPA = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPNCMIMEPLPA()
    {
        return $this->PNCMIMEPLPA;
    }

    /**
     * Generated from protobuf field <code>repeated .BCIHKEKHFEE PNCMIMEPLPA = 6;</code>
     * @param array<\BCIHKEKHFEE>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPNCMIMEPLPA($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BCIHKEKHFEE::class);
        $this->PNCMIMEPLPA = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool BEAACLMAMIH = 3;</code>
     * @return bool
     */
    public function getBEAACLMAMIH()
    {
        return $this->BEAACLMAMIH;
    }

    /**
     * Generated from protobuf field <code>bool BEAACLMAMIH = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setBEAACLMAMIH($var)
    {
        GPBUtil::checkBool($var);
        $this->BEAACLMAMIH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .JMMFBCMMKLL MMLANFIFPJJ = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMMLANFIFPJJ()
    {
        return $this->MMLANFIFPJJ;
    }

    /**
     * Generated from protobuf field <code>repeated .JMMFBCMMKLL MMLANFIFPJJ = 11;</code>
     * @param array<\JMMFBCMMKLL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMMLANFIFPJJ($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \JMMFBCMMKLL::class);
        $this->MMLANFIFPJJ = $arr;

        return $this;
    }

}

