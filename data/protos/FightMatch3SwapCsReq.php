<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KHMEMPPJCFP (30128)
 *
 * Generated from protobuf message <code>FightMatch3SwapCsReq</code>
 */
class FightMatch3SwapCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .KAJAGMGIEBG ciidepdhnda = 10;</code>
     */
    private $ciidepdhnda;
    /**
     * Generated from protobuf field <code>.HCOKPNBKACP ffemncnhifp = 12;</code>
     */
    protected $ffemncnhifp = null;
    /**
     * Generated from protobuf field <code>.HCOKPNBKACP cdbkaigobnc = 9;</code>
     */
    protected $cdbkaigobnc = null;
    /**
     * Generated from protobuf field <code>uint32 lhflcfnaopb = 6;</code>
     */
    protected $lhflcfnaopb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\KAJAGMGIEBG>|\Google\Protobuf\Internal\RepeatedField $ciidepdhnda
     *     @type \HCOKPNBKACP $ffemncnhifp
     *     @type \HCOKPNBKACP $cdbkaigobnc
     *     @type int $lhflcfnaopb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .KAJAGMGIEBG ciidepdhnda = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCiidepdhnda()
    {
        return $this->ciidepdhnda;
    }

    /**
     * Generated from protobuf field <code>repeated .KAJAGMGIEBG ciidepdhnda = 10;</code>
     * @param array<\KAJAGMGIEBG>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCiidepdhnda($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \KAJAGMGIEBG::class);
        $this->ciidepdhnda = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.HCOKPNBKACP ffemncnhifp = 12;</code>
     * @return \HCOKPNBKACP|null
     */
    public function getFfemncnhifp()
    {
        return $this->ffemncnhifp;
    }

    public function hasFfemncnhifp()
    {
        return isset($this->ffemncnhifp);
    }

    public function clearFfemncnhifp()
    {
        unset($this->ffemncnhifp);
    }

    /**
     * Generated from protobuf field <code>.HCOKPNBKACP ffemncnhifp = 12;</code>
     * @param \HCOKPNBKACP $var
     * @return $this
     */
    public function setFfemncnhifp($var)
    {
        GPBUtil::checkMessage($var, \HCOKPNBKACP::class);
        $this->ffemncnhifp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.HCOKPNBKACP cdbkaigobnc = 9;</code>
     * @return \HCOKPNBKACP|null
     */
    public function getCdbkaigobnc()
    {
        return $this->cdbkaigobnc;
    }

    public function hasCdbkaigobnc()
    {
        return isset($this->cdbkaigobnc);
    }

    public function clearCdbkaigobnc()
    {
        unset($this->cdbkaigobnc);
    }

    /**
     * Generated from protobuf field <code>.HCOKPNBKACP cdbkaigobnc = 9;</code>
     * @param \HCOKPNBKACP $var
     * @return $this
     */
    public function setCdbkaigobnc($var)
    {
        GPBUtil::checkMessage($var, \HCOKPNBKACP::class);
        $this->cdbkaigobnc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lhflcfnaopb = 6;</code>
     * @return int
     */
    public function getLhflcfnaopb()
    {
        return $this->lhflcfnaopb;
    }

    /**
     * Generated from protobuf field <code>uint32 lhflcfnaopb = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setLhflcfnaopb($var)
    {
        GPBUtil::checkUint32($var);
        $this->lhflcfnaopb = $var;

        return $this;
    }

}

