<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AHBLNFKHHNL</code>
 */
class AHBLNFKHHNL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 CICLHAMHANH = 12;</code>
     */
    protected $CICLHAMHANH = 0;
    /**
     * Generated from protobuf field <code>uint32 FBGLKPNIPNC = 4;</code>
     */
    protected $FBGLKPNIPNC = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CICLHAMHANH
     *     @type int $FBGLKPNIPNC
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 CICLHAMHANH = 12;</code>
     * @return int
     */
    public function getCICLHAMHANH()
    {
        return $this->CICLHAMHANH;
    }

    /**
     * Generated from protobuf field <code>uint32 CICLHAMHANH = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setCICLHAMHANH($var)
    {
        GPBUtil::checkUint32($var);
        $this->CICLHAMHANH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 FBGLKPNIPNC = 4;</code>
     * @return int
     */
    public function getFBGLKPNIPNC()
    {
        return $this->FBGLKPNIPNC;
    }

    /**
     * Generated from protobuf field <code>uint32 FBGLKPNIPNC = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFBGLKPNIPNC($var)
    {
        GPBUtil::checkUint32($var);
        $this->FBGLKPNIPNC = $var;

        return $this;
    }

}

