<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EIJJPGKMBLC</code>
 */
class EIJJPGKMBLC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 10;</code>
     */
    protected $OMBLHJDKEJA = 0;
    /**
     * Generated from protobuf field <code>.IGGCJANLKCL NPBHFEFLGJK = 12;</code>
     */
    protected $NPBHFEFLGJK = null;
    /**
     * Generated from protobuf field <code>uint32 NAPNNKKHDLF = 14;</code>
     */
    protected $NAPNNKKHDLF = 0;
    /**
     * Generated from protobuf field <code>uint32 EAPOMIMHKEB = 8;</code>
     */
    protected $EAPOMIMHKEB = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $OMBLHJDKEJA
     *     @type \IGGCJANLKCL $NPBHFEFLGJK
     *     @type int $NAPNNKKHDLF
     *     @type int $EAPOMIMHKEB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 10;</code>
     * @return int
     */
    public function getOMBLHJDKEJA()
    {
        return $this->OMBLHJDKEJA;
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setOMBLHJDKEJA($var)
    {
        GPBUtil::checkUint32($var);
        $this->OMBLHJDKEJA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.IGGCJANLKCL NPBHFEFLGJK = 12;</code>
     * @return \IGGCJANLKCL|null
     */
    public function getNPBHFEFLGJK()
    {
        return $this->NPBHFEFLGJK;
    }

    public function hasNPBHFEFLGJK()
    {
        return isset($this->NPBHFEFLGJK);
    }

    public function clearNPBHFEFLGJK()
    {
        unset($this->NPBHFEFLGJK);
    }

    /**
     * Generated from protobuf field <code>.IGGCJANLKCL NPBHFEFLGJK = 12;</code>
     * @param \IGGCJANLKCL $var
     * @return $this
     */
    public function setNPBHFEFLGJK($var)
    {
        GPBUtil::checkMessage($var, \IGGCJANLKCL::class);
        $this->NPBHFEFLGJK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NAPNNKKHDLF = 14;</code>
     * @return int
     */
    public function getNAPNNKKHDLF()
    {
        return $this->NAPNNKKHDLF;
    }

    /**
     * Generated from protobuf field <code>uint32 NAPNNKKHDLF = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setNAPNNKKHDLF($var)
    {
        GPBUtil::checkUint32($var);
        $this->NAPNNKKHDLF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 EAPOMIMHKEB = 8;</code>
     * @return int
     */
    public function getEAPOMIMHKEB()
    {
        return $this->EAPOMIMHKEB;
    }

    /**
     * Generated from protobuf field <code>uint32 EAPOMIMHKEB = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setEAPOMIMHKEB($var)
    {
        GPBUtil::checkUint32($var);
        $this->EAPOMIMHKEB = $var;

        return $this;
    }

}
