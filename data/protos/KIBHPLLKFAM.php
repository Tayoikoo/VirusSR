<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KIBHPLLKFAM</code>
 */
class KIBHPLLKFAM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 OOPDLCMLKKL = 4;</code>
     */
    protected $OOPDLCMLKKL = 0;
    /**
     * Generated from protobuf field <code>uint32 NOFPLBABCCB = 11;</code>
     */
    protected $NOFPLBABCCB = 0;
    /**
     * Generated from protobuf field <code>.OKFGPABKEJE OPDABBNHHCG = 9;</code>
     */
    protected $OPDABBNHHCG = null;
    /**
     * Generated from protobuf field <code>repeated .ICENEDNMALA ANPNJEKLCJJ = 2;</code>
     */
    private $ANPNJEKLCJJ;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $OOPDLCMLKKL
     *     @type int $NOFPLBABCCB
     *     @type \OKFGPABKEJE $OPDABBNHHCG
     *     @type array<\ICENEDNMALA>|\Google\Protobuf\Internal\RepeatedField $ANPNJEKLCJJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 OOPDLCMLKKL = 4;</code>
     * @return int
     */
    public function getOOPDLCMLKKL()
    {
        return $this->OOPDLCMLKKL;
    }

    /**
     * Generated from protobuf field <code>uint32 OOPDLCMLKKL = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setOOPDLCMLKKL($var)
    {
        GPBUtil::checkUint32($var);
        $this->OOPDLCMLKKL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NOFPLBABCCB = 11;</code>
     * @return int
     */
    public function getNOFPLBABCCB()
    {
        return $this->NOFPLBABCCB;
    }

    /**
     * Generated from protobuf field <code>uint32 NOFPLBABCCB = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setNOFPLBABCCB($var)
    {
        GPBUtil::checkUint32($var);
        $this->NOFPLBABCCB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.OKFGPABKEJE OPDABBNHHCG = 9;</code>
     * @return \OKFGPABKEJE|null
     */
    public function getOPDABBNHHCG()
    {
        return $this->OPDABBNHHCG;
    }

    public function hasOPDABBNHHCG()
    {
        return isset($this->OPDABBNHHCG);
    }

    public function clearOPDABBNHHCG()
    {
        unset($this->OPDABBNHHCG);
    }

    /**
     * Generated from protobuf field <code>.OKFGPABKEJE OPDABBNHHCG = 9;</code>
     * @param \OKFGPABKEJE $var
     * @return $this
     */
    public function setOPDABBNHHCG($var)
    {
        GPBUtil::checkMessage($var, \OKFGPABKEJE::class);
        $this->OPDABBNHHCG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ICENEDNMALA ANPNJEKLCJJ = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getANPNJEKLCJJ()
    {
        return $this->ANPNJEKLCJJ;
    }

    /**
     * Generated from protobuf field <code>repeated .ICENEDNMALA ANPNJEKLCJJ = 2;</code>
     * @param array<\ICENEDNMALA>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setANPNJEKLCJJ($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ICENEDNMALA::class);
        $this->ANPNJEKLCJJ = $arr;

        return $this;
    }

}
