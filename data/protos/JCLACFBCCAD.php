<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JCLACFBCCAD</code>
 */
class JCLACFBCCAD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 IIIODOFEDHC = 1;</code>
     */
    protected $IIIODOFEDHC = 0;
    /**
     * Generated from protobuf field <code>int32 ANHKKMBJGFE = 9;</code>
     */
    protected $ANHKKMBJGFE = 0;
    /**
     * Generated from protobuf field <code>int32 DDPBECJEPEI = 4;</code>
     */
    protected $DDPBECJEPEI = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $IIIODOFEDHC
     *     @type int $ANHKKMBJGFE
     *     @type int $DDPBECJEPEI
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 IIIODOFEDHC = 1;</code>
     * @return int
     */
    public function getIIIODOFEDHC()
    {
        return $this->IIIODOFEDHC;
    }

    /**
     * Generated from protobuf field <code>int32 IIIODOFEDHC = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIIIODOFEDHC($var)
    {
        GPBUtil::checkInt32($var);
        $this->IIIODOFEDHC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ANHKKMBJGFE = 9;</code>
     * @return int
     */
    public function getANHKKMBJGFE()
    {
        return $this->ANHKKMBJGFE;
    }

    /**
     * Generated from protobuf field <code>int32 ANHKKMBJGFE = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setANHKKMBJGFE($var)
    {
        GPBUtil::checkInt32($var);
        $this->ANHKKMBJGFE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 DDPBECJEPEI = 4;</code>
     * @return int
     */
    public function getDDPBECJEPEI()
    {
        return $this->DDPBECJEPEI;
    }

    /**
     * Generated from protobuf field <code>int32 DDPBECJEPEI = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDDPBECJEPEI($var)
    {
        GPBUtil::checkInt32($var);
        $this->DDPBECJEPEI = $var;

        return $this;
    }

}

