<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PKHLAAOBOEK</code>
 */
class PKHLAAOBOEK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .IHNPCEMHIMB CAAFCCENGBL = 10;</code>
     */
    private $CAAFCCENGBL;
    /**
     * Generated from protobuf field <code>repeated uint32 FKIACGGJLJD = 2;</code>
     */
    private $FKIACGGJLJD;
    /**
     * Generated from protobuf field <code>repeated .LogisticsScore BGKJHMDJDCL = 12;</code>
     */
    private $BGKJHMDJDCL;
    /**
     * Generated from protobuf field <code>repeated .JBJMNMFPLPH JKDIGGIABMB = 1;</code>
     */
    private $JKDIGGIABMB;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\IHNPCEMHIMB>|\Google\Protobuf\Internal\RepeatedField $CAAFCCENGBL
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $FKIACGGJLJD
     *     @type array<\LogisticsScore>|\Google\Protobuf\Internal\RepeatedField $BGKJHMDJDCL
     *     @type array<\JBJMNMFPLPH>|\Google\Protobuf\Internal\RepeatedField $JKDIGGIABMB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .IHNPCEMHIMB CAAFCCENGBL = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCAAFCCENGBL()
    {
        return $this->CAAFCCENGBL;
    }

    /**
     * Generated from protobuf field <code>repeated .IHNPCEMHIMB CAAFCCENGBL = 10;</code>
     * @param array<\IHNPCEMHIMB>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCAAFCCENGBL($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \IHNPCEMHIMB::class);
        $this->CAAFCCENGBL = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 FKIACGGJLJD = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFKIACGGJLJD()
    {
        return $this->FKIACGGJLJD;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 FKIACGGJLJD = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFKIACGGJLJD($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->FKIACGGJLJD = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .LogisticsScore BGKJHMDJDCL = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBGKJHMDJDCL()
    {
        return $this->BGKJHMDJDCL;
    }

    /**
     * Generated from protobuf field <code>repeated .LogisticsScore BGKJHMDJDCL = 12;</code>
     * @param array<\LogisticsScore>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBGKJHMDJDCL($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \LogisticsScore::class);
        $this->BGKJHMDJDCL = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .JBJMNMFPLPH JKDIGGIABMB = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJKDIGGIABMB()
    {
        return $this->JKDIGGIABMB;
    }

    /**
     * Generated from protobuf field <code>repeated .JBJMNMFPLPH JKDIGGIABMB = 1;</code>
     * @param array<\JBJMNMFPLPH>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJKDIGGIABMB($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \JBJMNMFPLPH::class);
        $this->JKDIGGIABMB = $arr;

        return $this;
    }

}
