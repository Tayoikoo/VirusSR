<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KGKEOGGDDIM (5827)
 *
 * Generated from protobuf message <code>HeliobusSnsReadScRsp</code>
 */
class HeliobusSnsReadScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 ojdpndcppgf = 6;</code>
     */
    protected $ojdpndcppgf = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $ojdpndcppgf
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ojdpndcppgf = 6;</code>
     * @return int
     */
    public function getOjdpndcppgf()
    {
        return $this->ojdpndcppgf;
    }

    /**
     * Generated from protobuf field <code>uint32 ojdpndcppgf = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOjdpndcppgf($var)
    {
        GPBUtil::checkUint32($var);
        $this->ojdpndcppgf = $var;

        return $this;
    }

}

