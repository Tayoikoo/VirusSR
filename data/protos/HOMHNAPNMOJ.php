<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HOMHNAPNMOJ</code>
 */
class HOMHNAPNMOJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 basic_type = 1;</code>
     */
    protected $basic_type = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 PNPMEACMBPP = 2;</code>
     */
    private $PNPMEACMBPP;
    /**
     * Generated from protobuf field <code>uint32 PEPHONIOECA = 3;</code>
     */
    protected $PEPHONIOECA = 0;
    /**
     * Generated from protobuf field <code>double JMDADAHHGDH = 4;</code>
     */
    protected $JMDADAHHGDH = 0.0;
    /**
     * Generated from protobuf field <code>repeated uint32 NPEAKNHDHHH = 5;</code>
     */
    private $NPEAKNHDHHH;
    /**
     * Generated from protobuf field <code>int32 BLDNDNLLKCH = 6;</code>
     */
    protected $BLDNDNLLKCH = 0;
    /**
     * Generated from protobuf field <code>double PFPGCCMKHIJ = 7;</code>
     */
    protected $PFPGCCMKHIJ = 0.0;
    /**
     * Generated from protobuf field <code>uint32 MDCMIDKJLEL = 8;</code>
     */
    protected $MDCMIDKJLEL = 0;
    /**
     * Generated from protobuf field <code>uint32 wave = 9;</code>
     */
    protected $wave = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $basic_type
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $PNPMEACMBPP
     *     @type int $PEPHONIOECA
     *     @type float $JMDADAHHGDH
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $NPEAKNHDHHH
     *     @type int $BLDNDNLLKCH
     *     @type float $PFPGCCMKHIJ
     *     @type int $MDCMIDKJLEL
     *     @type int $wave
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 basic_type = 1;</code>
     * @return int
     */
    public function getBasicType()
    {
        return $this->basic_type;
    }

    /**
     * Generated from protobuf field <code>uint32 basic_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBasicType($var)
    {
        GPBUtil::checkUint32($var);
        $this->basic_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 PNPMEACMBPP = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPNPMEACMBPP()
    {
        return $this->PNPMEACMBPP;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 PNPMEACMBPP = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPNPMEACMBPP($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->PNPMEACMBPP = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PEPHONIOECA = 3;</code>
     * @return int
     */
    public function getPEPHONIOECA()
    {
        return $this->PEPHONIOECA;
    }

    /**
     * Generated from protobuf field <code>uint32 PEPHONIOECA = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPEPHONIOECA($var)
    {
        GPBUtil::checkUint32($var);
        $this->PEPHONIOECA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double JMDADAHHGDH = 4;</code>
     * @return float
     */
    public function getJMDADAHHGDH()
    {
        return $this->JMDADAHHGDH;
    }

    /**
     * Generated from protobuf field <code>double JMDADAHHGDH = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setJMDADAHHGDH($var)
    {
        GPBUtil::checkDouble($var);
        $this->JMDADAHHGDH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 NPEAKNHDHHH = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNPEAKNHDHHH()
    {
        return $this->NPEAKNHDHHH;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 NPEAKNHDHHH = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNPEAKNHDHHH($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->NPEAKNHDHHH = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 BLDNDNLLKCH = 6;</code>
     * @return int
     */
    public function getBLDNDNLLKCH()
    {
        return $this->BLDNDNLLKCH;
    }

    /**
     * Generated from protobuf field <code>int32 BLDNDNLLKCH = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setBLDNDNLLKCH($var)
    {
        GPBUtil::checkInt32($var);
        $this->BLDNDNLLKCH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double PFPGCCMKHIJ = 7;</code>
     * @return float
     */
    public function getPFPGCCMKHIJ()
    {
        return $this->PFPGCCMKHIJ;
    }

    /**
     * Generated from protobuf field <code>double PFPGCCMKHIJ = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setPFPGCCMKHIJ($var)
    {
        GPBUtil::checkDouble($var);
        $this->PFPGCCMKHIJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 MDCMIDKJLEL = 8;</code>
     * @return int
     */
    public function getMDCMIDKJLEL()
    {
        return $this->MDCMIDKJLEL;
    }

    /**
     * Generated from protobuf field <code>uint32 MDCMIDKJLEL = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setMDCMIDKJLEL($var)
    {
        GPBUtil::checkUint32($var);
        $this->MDCMIDKJLEL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 wave = 9;</code>
     * @return int
     */
    public function getWave()
    {
        return $this->wave;
    }

    /**
     * Generated from protobuf field <code>uint32 wave = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setWave($var)
    {
        GPBUtil::checkUint32($var);
        $this->wave = $var;

        return $this;
    }

}

