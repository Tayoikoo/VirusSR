<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BCIHKEKHFEE</code>
 */
class BCIHKEKHFEE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .CAHEEDNLCOD PFDIJNMPDMM = 8;</code>
     */
    private $PFDIJNMPDMM;
    /**
     * Generated from protobuf field <code>repeated .FDMIHCJCAEM MAHHHLDNAFP = 6;</code>
     */
    private $MAHHHLDNAFP;
    /**
     * Generated from protobuf field <code>.PBPDBCCFBGH JDIGFNALJFN = 10;</code>
     */
    protected $JDIGFNALJFN = null;
    /**
     * Generated from protobuf field <code>map<uint32, uint32> BLHKEFPJGFG = 15;</code>
     */
    private $BLHKEFPJGFG;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\CAHEEDNLCOD>|\Google\Protobuf\Internal\RepeatedField $PFDIJNMPDMM
     *     @type array<\FDMIHCJCAEM>|\Google\Protobuf\Internal\RepeatedField $MAHHHLDNAFP
     *     @type \PBPDBCCFBGH $JDIGFNALJFN
     *     @type array|\Google\Protobuf\Internal\MapField $BLHKEFPJGFG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .CAHEEDNLCOD PFDIJNMPDMM = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPFDIJNMPDMM()
    {
        return $this->PFDIJNMPDMM;
    }

    /**
     * Generated from protobuf field <code>repeated .CAHEEDNLCOD PFDIJNMPDMM = 8;</code>
     * @param array<\CAHEEDNLCOD>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPFDIJNMPDMM($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CAHEEDNLCOD::class);
        $this->PFDIJNMPDMM = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .FDMIHCJCAEM MAHHHLDNAFP = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMAHHHLDNAFP()
    {
        return $this->MAHHHLDNAFP;
    }

    /**
     * Generated from protobuf field <code>repeated .FDMIHCJCAEM MAHHHLDNAFP = 6;</code>
     * @param array<\FDMIHCJCAEM>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMAHHHLDNAFP($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FDMIHCJCAEM::class);
        $this->MAHHHLDNAFP = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PBPDBCCFBGH JDIGFNALJFN = 10;</code>
     * @return \PBPDBCCFBGH|null
     */
    public function getJDIGFNALJFN()
    {
        return $this->JDIGFNALJFN;
    }

    public function hasJDIGFNALJFN()
    {
        return isset($this->JDIGFNALJFN);
    }

    public function clearJDIGFNALJFN()
    {
        unset($this->JDIGFNALJFN);
    }

    /**
     * Generated from protobuf field <code>.PBPDBCCFBGH JDIGFNALJFN = 10;</code>
     * @param \PBPDBCCFBGH $var
     * @return $this
     */
    public function setJDIGFNALJFN($var)
    {
        GPBUtil::checkMessage($var, \PBPDBCCFBGH::class);
        $this->JDIGFNALJFN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> BLHKEFPJGFG = 15;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getBLHKEFPJGFG()
    {
        return $this->BLHKEFPJGFG;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> BLHKEFPJGFG = 15;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setBLHKEFPJGFG($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->BLHKEFPJGFG = $arr;

        return $this;
    }

}

