<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FCCJKCJHBAH</code>
 */
class FCCJKCJHBAH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 5;</code>
     */
    protected $GPKEAKPHIPA = 0;
    /**
     * Generated from protobuf field <code>bool IJBCLLKIJIJ = 8;</code>
     */
    protected $IJBCLLKIJIJ = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GPKEAKPHIPA
     *     @type bool $IJBCLLKIJIJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 5;</code>
     * @return int
     */
    public function getGPKEAKPHIPA()
    {
        return $this->GPKEAKPHIPA;
    }

    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGPKEAKPHIPA($var)
    {
        GPBUtil::checkUint32($var);
        $this->GPKEAKPHIPA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IJBCLLKIJIJ = 8;</code>
     * @return bool
     */
    public function getIJBCLLKIJIJ()
    {
        return $this->IJBCLLKIJIJ;
    }

    /**
     * Generated from protobuf field <code>bool IJBCLLKIJIJ = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setIJBCLLKIJIJ($var)
    {
        GPBUtil::checkBool($var);
        $this->IJBCLLKIJIJ = $var;

        return $this;
    }

}
