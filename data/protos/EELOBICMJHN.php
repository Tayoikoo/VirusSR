<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EELOBICMJHN</code>
 */
class EELOBICMJHN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.FJEFJNFGNNB status = 11;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>uint32 HBCAFGHLIOP = 10;</code>
     */
    protected $HBCAFGHLIOP = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *     @type int $HBCAFGHLIOP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.FJEFJNFGNNB status = 11;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.FJEFJNFGNNB status = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \FJEFJNFGNNB::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HBCAFGHLIOP = 10;</code>
     * @return int
     */
    public function getHBCAFGHLIOP()
    {
        return $this->HBCAFGHLIOP;
    }

    /**
     * Generated from protobuf field <code>uint32 HBCAFGHLIOP = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setHBCAFGHLIOP($var)
    {
        GPBUtil::checkUint32($var);
        $this->HBCAFGHLIOP = $var;

        return $this;
    }

}
