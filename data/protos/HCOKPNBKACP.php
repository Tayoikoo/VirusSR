<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HCOKPNBKACP</code>
 */
class HCOKPNBKACP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 bieencfaaam = 9;</code>
     */
    protected $bieencfaaam = 0;
    /**
     * Generated from protobuf field <code>uint32 emhfkcicpbo = 6;</code>
     */
    protected $emhfkcicpbo = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $bieencfaaam
     *     @type int $emhfkcicpbo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 bieencfaaam = 9;</code>
     * @return int
     */
    public function getBieencfaaam()
    {
        return $this->bieencfaaam;
    }

    /**
     * Generated from protobuf field <code>uint32 bieencfaaam = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setBieencfaaam($var)
    {
        GPBUtil::checkUint32($var);
        $this->bieencfaaam = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 emhfkcicpbo = 6;</code>
     * @return int
     */
    public function getEmhfkcicpbo()
    {
        return $this->emhfkcicpbo;
    }

    /**
     * Generated from protobuf field <code>uint32 emhfkcicpbo = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setEmhfkcicpbo($var)
    {
        GPBUtil::checkUint32($var);
        $this->emhfkcicpbo = $var;

        return $this;
    }

}

