<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NPOHDDCEDLP</code>
 */
class NPOHDDCEDLP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 HKPLKKPGPII = 8;</code>
     */
    protected $HKPLKKPGPII = 0;
    /**
     * Generated from protobuf field <code>bool PBLGDFLMGOE = 2;</code>
     */
    protected $PBLGDFLMGOE = false;
    /**
     * Generated from protobuf field <code>uint32 KHIGKEHGBKA = 3;</code>
     */
    protected $KHIGKEHGBKA = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $HKPLKKPGPII
     *     @type bool $PBLGDFLMGOE
     *     @type int $KHIGKEHGBKA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 HKPLKKPGPII = 8;</code>
     * @return int
     */
    public function getHKPLKKPGPII()
    {
        return $this->HKPLKKPGPII;
    }

    /**
     * Generated from protobuf field <code>uint32 HKPLKKPGPII = 8;</code>
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
     * Generated from protobuf field <code>bool PBLGDFLMGOE = 2;</code>
     * @return bool
     */
    public function getPBLGDFLMGOE()
    {
        return $this->PBLGDFLMGOE;
    }

    /**
     * Generated from protobuf field <code>bool PBLGDFLMGOE = 2;</code>
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
     * Generated from protobuf field <code>uint32 KHIGKEHGBKA = 3;</code>
     * @return int
     */
    public function getKHIGKEHGBKA()
    {
        return $this->KHIGKEHGBKA;
    }

    /**
     * Generated from protobuf field <code>uint32 KHIGKEHGBKA = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setKHIGKEHGBKA($var)
    {
        GPBUtil::checkUint32($var);
        $this->KHIGKEHGBKA = $var;

        return $this;
    }

}

