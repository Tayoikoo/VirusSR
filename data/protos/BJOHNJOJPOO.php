<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BJOHNJOJPOO</code>
 */
class BJOHNJOJPOO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool NKECMFCFJAK = 8;</code>
     */
    protected $NKECMFCFJAK = false;
    /**
     * Generated from protobuf field <code>uint64 DCCFJGKKNFK = 6;</code>
     */
    protected $DCCFJGKKNFK = 0;
    /**
     * Generated from protobuf field <code>bool DDPIKJKGJBL = 5;</code>
     */
    protected $DDPIKJKGJBL = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $NKECMFCFJAK
     *     @type int|string $DCCFJGKKNFK
     *     @type bool $DDPIKJKGJBL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool NKECMFCFJAK = 8;</code>
     * @return bool
     */
    public function getNKECMFCFJAK()
    {
        return $this->NKECMFCFJAK;
    }

    /**
     * Generated from protobuf field <code>bool NKECMFCFJAK = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setNKECMFCFJAK($var)
    {
        GPBUtil::checkBool($var);
        $this->NKECMFCFJAK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 DCCFJGKKNFK = 6;</code>
     * @return int|string
     */
    public function getDCCFJGKKNFK()
    {
        return $this->DCCFJGKKNFK;
    }

    /**
     * Generated from protobuf field <code>uint64 DCCFJGKKNFK = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDCCFJGKKNFK($var)
    {
        GPBUtil::checkUint64($var);
        $this->DCCFJGKKNFK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool DDPIKJKGJBL = 5;</code>
     * @return bool
     */
    public function getDDPIKJKGJBL()
    {
        return $this->DDPIKJKGJBL;
    }

    /**
     * Generated from protobuf field <code>bool DDPIKJKGJBL = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setDDPIKJKGJBL($var)
    {
        GPBUtil::checkBool($var);
        $this->DDPIKJKGJBL = $var;

        return $this;
    }

}

