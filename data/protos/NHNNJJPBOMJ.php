<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NHNNJJPBOMJ</code>
 */
class NHNNJJPBOMJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool ECLBPHPMGIN = 1;</code>
     */
    protected $ECLBPHPMGIN = false;
    /**
     * Generated from protobuf field <code>.AEODHKIMPAF FOAFPCNJNAM = 4;</code>
     */
    protected $FOAFPCNJNAM = null;
    /**
     * Generated from protobuf field <code>uint32 ALPDNPDDPJC = 15;</code>
     */
    protected $ALPDNPDDPJC = 0;
    /**
     * Generated from protobuf field <code>.OKFGPABKEJE OPDABBNHHCG = 8;</code>
     */
    protected $OPDABBNHHCG = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $ECLBPHPMGIN
     *     @type \AEODHKIMPAF $FOAFPCNJNAM
     *     @type int $ALPDNPDDPJC
     *     @type \OKFGPABKEJE $OPDABBNHHCG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool ECLBPHPMGIN = 1;</code>
     * @return bool
     */
    public function getECLBPHPMGIN()
    {
        return $this->ECLBPHPMGIN;
    }

    /**
     * Generated from protobuf field <code>bool ECLBPHPMGIN = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setECLBPHPMGIN($var)
    {
        GPBUtil::checkBool($var);
        $this->ECLBPHPMGIN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AEODHKIMPAF FOAFPCNJNAM = 4;</code>
     * @return \AEODHKIMPAF|null
     */
    public function getFOAFPCNJNAM()
    {
        return $this->FOAFPCNJNAM;
    }

    public function hasFOAFPCNJNAM()
    {
        return isset($this->FOAFPCNJNAM);
    }

    public function clearFOAFPCNJNAM()
    {
        unset($this->FOAFPCNJNAM);
    }

    /**
     * Generated from protobuf field <code>.AEODHKIMPAF FOAFPCNJNAM = 4;</code>
     * @param \AEODHKIMPAF $var
     * @return $this
     */
    public function setFOAFPCNJNAM($var)
    {
        GPBUtil::checkMessage($var, \AEODHKIMPAF::class);
        $this->FOAFPCNJNAM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ALPDNPDDPJC = 15;</code>
     * @return int
     */
    public function getALPDNPDDPJC()
    {
        return $this->ALPDNPDDPJC;
    }

    /**
     * Generated from protobuf field <code>uint32 ALPDNPDDPJC = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setALPDNPDDPJC($var)
    {
        GPBUtil::checkUint32($var);
        $this->ALPDNPDDPJC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.OKFGPABKEJE OPDABBNHHCG = 8;</code>
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
     * Generated from protobuf field <code>.OKFGPABKEJE OPDABBNHHCG = 8;</code>
     * @param \OKFGPABKEJE $var
     * @return $this
     */
    public function setOPDABBNHHCG($var)
    {
        GPBUtil::checkMessage($var, \OKFGPABKEJE::class);
        $this->OPDABBNHHCG = $var;

        return $this;
    }

}
