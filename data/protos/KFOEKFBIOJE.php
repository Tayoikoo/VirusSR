<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KFOEKFBIOJE</code>
 */
class KFOEKFBIOJE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 KHIGKEHGBKA = 6;</code>
     */
    protected $KHIGKEHGBKA = 0;
    /**
     * Generated from protobuf field <code>uint32 HKPLKKPGPII = 3;</code>
     */
    protected $HKPLKKPGPII = 0;
    /**
     * Generated from protobuf field <code>uint32 AAIMMAILKIE = 5;</code>
     */
    protected $AAIMMAILKIE = 0;
    /**
     * Generated from protobuf field <code>bool PBLGDFLMGOE = 4;</code>
     */
    protected $PBLGDFLMGOE = false;
    /**
     * Generated from protobuf field <code>repeated uint32 IDFCEEDKDGN = 14;</code>
     */
    private $IDFCEEDKDGN;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $KHIGKEHGBKA
     *     @type int $HKPLKKPGPII
     *     @type int $AAIMMAILKIE
     *     @type bool $PBLGDFLMGOE
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $IDFCEEDKDGN
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 KHIGKEHGBKA = 6;</code>
     * @return int
     */
    public function getKHIGKEHGBKA()
    {
        return $this->KHIGKEHGBKA;
    }

    /**
     * Generated from protobuf field <code>uint32 KHIGKEHGBKA = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setKHIGKEHGBKA($var)
    {
        GPBUtil::checkUint32($var);
        $this->KHIGKEHGBKA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HKPLKKPGPII = 3;</code>
     * @return int
     */
    public function getHKPLKKPGPII()
    {
        return $this->HKPLKKPGPII;
    }

    /**
     * Generated from protobuf field <code>uint32 HKPLKKPGPII = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setHKPLKKPGPII($var)
    {
        GPBUtil::checkUint32($var);
        $this->HKPLKKPGPII = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AAIMMAILKIE = 5;</code>
     * @return int
     */
    public function getAAIMMAILKIE()
    {
        return $this->AAIMMAILKIE;
    }

    /**
     * Generated from protobuf field <code>uint32 AAIMMAILKIE = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAAIMMAILKIE($var)
    {
        GPBUtil::checkUint32($var);
        $this->AAIMMAILKIE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool PBLGDFLMGOE = 4;</code>
     * @return bool
     */
    public function getPBLGDFLMGOE()
    {
        return $this->PBLGDFLMGOE;
    }

    /**
     * Generated from protobuf field <code>bool PBLGDFLMGOE = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setPBLGDFLMGOE($var)
    {
        GPBUtil::checkBool($var);
        $this->PBLGDFLMGOE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 IDFCEEDKDGN = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIDFCEEDKDGN()
    {
        return $this->IDFCEEDKDGN;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 IDFCEEDKDGN = 14;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIDFCEEDKDGN($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->IDFCEEDKDGN = $arr;

        return $this;
    }

}

