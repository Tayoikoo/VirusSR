<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HGFEGLEAGOJ</code>
 */
class HGFEGLEAGOJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 level = 14;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>uint32 OCHJFCHENBE = 6;</code>
     */
    protected $OCHJFCHENBE = 0;
    /**
     * Generated from protobuf field <code>uint32 PHLBECLKBHH = 3;</code>
     */
    protected $PHLBECLKBHH = 0;
    /**
     * Generated from protobuf field <code>uint32 BAIPBKIPOOM = 11;</code>
     */
    protected $BAIPBKIPOOM = 0;
    /**
     * Generated from protobuf field <code>uint32 AILDDAKLBKK = 4;</code>
     */
    protected $AILDDAKLBKK = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $level
     *     @type int $OCHJFCHENBE
     *     @type int $PHLBECLKBHH
     *     @type int $BAIPBKIPOOM
     *     @type int $AILDDAKLBKK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 level = 14;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OCHJFCHENBE = 6;</code>
     * @return int
     */
    public function getOCHJFCHENBE()
    {
        return $this->OCHJFCHENBE;
    }

    /**
     * Generated from protobuf field <code>uint32 OCHJFCHENBE = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOCHJFCHENBE($var)
    {
        GPBUtil::checkUint32($var);
        $this->OCHJFCHENBE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PHLBECLKBHH = 3;</code>
     * @return int
     */
    public function getPHLBECLKBHH()
    {
        return $this->PHLBECLKBHH;
    }

    /**
     * Generated from protobuf field <code>uint32 PHLBECLKBHH = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPHLBECLKBHH($var)
    {
        GPBUtil::checkUint32($var);
        $this->PHLBECLKBHH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 BAIPBKIPOOM = 11;</code>
     * @return int
     */
    public function getBAIPBKIPOOM()
    {
        return $this->BAIPBKIPOOM;
    }

    /**
     * Generated from protobuf field <code>uint32 BAIPBKIPOOM = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setBAIPBKIPOOM($var)
    {
        GPBUtil::checkUint32($var);
        $this->BAIPBKIPOOM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AILDDAKLBKK = 4;</code>
     * @return int
     */
    public function getAILDDAKLBKK()
    {
        return $this->AILDDAKLBKK;
    }

    /**
     * Generated from protobuf field <code>uint32 AILDDAKLBKK = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAILDDAKLBKK($var)
    {
        GPBUtil::checkUint32($var);
        $this->AILDDAKLBKK = $var;

        return $this;
    }

}

