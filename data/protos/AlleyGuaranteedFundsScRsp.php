<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MIFKDLMPBAA (4773)
 *
 * Generated from protobuf message <code>AlleyGuaranteedFundsScRsp</code>
 */
class AlleyGuaranteedFundsScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 gfhdankdppc = 7;</code>
     */
    protected $gfhdankdppc = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $gfhdankdppc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
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
     * Generated from protobuf field <code>uint32 gfhdankdppc = 7;</code>
     * @return int
     */
    public function getGfhdankdppc()
    {
        return $this->gfhdankdppc;
    }

    /**
     * Generated from protobuf field <code>uint32 gfhdankdppc = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setGfhdankdppc($var)
    {
        GPBUtil::checkUint32($var);
        $this->gfhdankdppc = $var;

        return $this;
    }

}

