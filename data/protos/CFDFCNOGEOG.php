<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CFDFCNOGEOG</code>
 */
class CFDFCNOGEOG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 NMEHGPBPMIG = 1;</code>
     */
    protected $NMEHGPBPMIG = 0;
    /**
     * Generated from protobuf field <code>uint32 PGHAPHCHHDA = 9;</code>
     */
    protected $PGHAPHCHHDA = 0;
    /**
     * Generated from protobuf field <code>uint32 IBGBNAJCIHD = 8;</code>
     */
    protected $IBGBNAJCIHD = 0;
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
     *     @type int $NMEHGPBPMIG
     *     @type int $PGHAPHCHHDA
     *     @type int $IBGBNAJCIHD
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 NMEHGPBPMIG = 1;</code>
     * @return int
     */
    public function getNMEHGPBPMIG()
    {
        return $this->NMEHGPBPMIG;
    }

    /**
     * Generated from protobuf field <code>uint32 NMEHGPBPMIG = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNMEHGPBPMIG($var)
    {
        GPBUtil::checkUint32($var);
        $this->NMEHGPBPMIG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PGHAPHCHHDA = 9;</code>
     * @return int
     */
    public function getPGHAPHCHHDA()
    {
        return $this->PGHAPHCHHDA;
    }

    /**
     * Generated from protobuf field <code>uint32 PGHAPHCHHDA = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setPGHAPHCHHDA($var)
    {
        GPBUtil::checkUint32($var);
        $this->PGHAPHCHHDA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IBGBNAJCIHD = 8;</code>
     * @return int
     */
    public function getIBGBNAJCIHD()
    {
        return $this->IBGBNAJCIHD;
    }

    /**
     * Generated from protobuf field <code>uint32 IBGBNAJCIHD = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setIBGBNAJCIHD($var)
    {
        GPBUtil::checkUint32($var);
        $this->IBGBNAJCIHD = $var;

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

