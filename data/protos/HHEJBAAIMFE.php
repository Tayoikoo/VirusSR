<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HHEJBAAIMFE</code>
 */
class HHEJBAAIMFE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.KAEBAKLJCOF JDIGFNALJFN = 5;</code>
     */
    protected $JDIGFNALJFN = null;
    /**
     * Generated from protobuf field <code>uint64 BKDDNDCAMOP = 14;</code>
     */
    protected $BKDDNDCAMOP = 0;
    /**
     * Generated from protobuf field <code>.BKFPLKGJOFI BJGNEPEEDLN = 12;</code>
     */
    protected $BJGNEPEEDLN = 0;
    /**
     * Generated from protobuf field <code>.KHIALNHGMHN IDBBPNKBOJA = 916;</code>
     */
    protected $IDBBPNKBOJA = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \KAEBAKLJCOF $JDIGFNALJFN
     *     @type int|string $BKDDNDCAMOP
     *     @type int $BJGNEPEEDLN
     *     @type \KHIALNHGMHN $IDBBPNKBOJA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.KAEBAKLJCOF JDIGFNALJFN = 5;</code>
     * @return \KAEBAKLJCOF|null
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
     * Generated from protobuf field <code>.KAEBAKLJCOF JDIGFNALJFN = 5;</code>
     * @param \KAEBAKLJCOF $var
     * @return $this
     */
    public function setJDIGFNALJFN($var)
    {
        GPBUtil::checkMessage($var, \KAEBAKLJCOF::class);
        $this->JDIGFNALJFN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 BKDDNDCAMOP = 14;</code>
     * @return int|string
     */
    public function getBKDDNDCAMOP()
    {
        return $this->BKDDNDCAMOP;
    }

    /**
     * Generated from protobuf field <code>uint64 BKDDNDCAMOP = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBKDDNDCAMOP($var)
    {
        GPBUtil::checkUint64($var);
        $this->BKDDNDCAMOP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.BKFPLKGJOFI BJGNEPEEDLN = 12;</code>
     * @return int
     */
    public function getBJGNEPEEDLN()
    {
        return $this->BJGNEPEEDLN;
    }

    /**
     * Generated from protobuf field <code>.BKFPLKGJOFI BJGNEPEEDLN = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setBJGNEPEEDLN($var)
    {
        GPBUtil::checkEnum($var, \BKFPLKGJOFI::class);
        $this->BJGNEPEEDLN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.KHIALNHGMHN IDBBPNKBOJA = 916;</code>
     * @return \KHIALNHGMHN|null
     */
    public function getIDBBPNKBOJA()
    {
        return $this->IDBBPNKBOJA;
    }

    public function hasIDBBPNKBOJA()
    {
        return isset($this->IDBBPNKBOJA);
    }

    public function clearIDBBPNKBOJA()
    {
        unset($this->IDBBPNKBOJA);
    }

    /**
     * Generated from protobuf field <code>.KHIALNHGMHN IDBBPNKBOJA = 916;</code>
     * @param \KHIALNHGMHN $var
     * @return $this
     */
    public function setIDBBPNKBOJA($var)
    {
        GPBUtil::checkMessage($var, \KHIALNHGMHN::class);
        $this->IDBBPNKBOJA = $var;

        return $this;
    }

}
