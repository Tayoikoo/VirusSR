<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MOIAJAKOHCF (34)
 *
 * Generated from protobuf message <code>GmTalkScRsp</code>
 */
class GmTalkScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string gmccipoejhd = 3;</code>
     */
    protected $gmccipoejhd = '';
    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gmccipoejhd
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string gmccipoejhd = 3;</code>
     * @return string
     */
    public function getGmccipoejhd()
    {
        return $this->gmccipoejhd;
    }

    /**
     * Generated from protobuf field <code>string gmccipoejhd = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGmccipoejhd($var)
    {
        GPBUtil::checkString($var, True);
        $this->gmccipoejhd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

