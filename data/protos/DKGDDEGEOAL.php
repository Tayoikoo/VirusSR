<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DKGDDEGEOAL</code>
 */
class DKGDDEGEOAL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 PAIGFPLHMCM = 14;</code>
     */
    protected $PAIGFPLHMCM = 0;
    /**
     * Generated from protobuf field <code>map<uint32, uint32> FONMAJDEGNM = 12;</code>
     */
    private $FONMAJDEGNM;
    /**
     * Generated from protobuf field <code>uint32 EDMIKIMHMKC = 6;</code>
     */
    protected $EDMIKIMHMKC = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $PAIGFPLHMCM
     *     @type array|\Google\Protobuf\Internal\MapField $FONMAJDEGNM
     *     @type int $EDMIKIMHMKC
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 PAIGFPLHMCM = 14;</code>
     * @return int
     */
    public function getPAIGFPLHMCM()
    {
        return $this->PAIGFPLHMCM;
    }

    /**
     * Generated from protobuf field <code>uint32 PAIGFPLHMCM = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setPAIGFPLHMCM($var)
    {
        GPBUtil::checkUint32($var);
        $this->PAIGFPLHMCM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> FONMAJDEGNM = 12;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getFONMAJDEGNM()
    {
        return $this->FONMAJDEGNM;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> FONMAJDEGNM = 12;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setFONMAJDEGNM($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->FONMAJDEGNM = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 EDMIKIMHMKC = 6;</code>
     * @return int
     */
    public function getEDMIKIMHMKC()
    {
        return $this->EDMIKIMHMKC;
    }

    /**
     * Generated from protobuf field <code>uint32 EDMIKIMHMKC = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setEDMIKIMHMKC($var)
    {
        GPBUtil::checkUint32($var);
        $this->EDMIKIMHMKC = $var;

        return $this;
    }

}
