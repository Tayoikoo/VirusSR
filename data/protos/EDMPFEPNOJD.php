<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EDMPFEPNOJD</code>
 */
class EDMPFEPNOJD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList EIHNMCKNPAP = 1;</code>
     */
    protected $EIHNMCKNPAP = null;
    /**
     * Generated from protobuf field <code>uint32 MNAKFNFJLFK = 15;</code>
     */
    protected $MNAKFNFJLFK = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 ABJCHBJJMIO = 9;</code>
     */
    protected $ABJCHBJJMIO = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $EIHNMCKNPAP
     *     @type int $MNAKFNFJLFK
     *     @type int $retcode
     *     @type int $ABJCHBJJMIO
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList EIHNMCKNPAP = 1;</code>
     * @return \ItemList|null
     */
    public function getEIHNMCKNPAP()
    {
        return $this->EIHNMCKNPAP;
    }

    public function hasEIHNMCKNPAP()
    {
        return isset($this->EIHNMCKNPAP);
    }

    public function clearEIHNMCKNPAP()
    {
        unset($this->EIHNMCKNPAP);
    }

    /**
     * Generated from protobuf field <code>.ItemList EIHNMCKNPAP = 1;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setEIHNMCKNPAP($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->EIHNMCKNPAP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 MNAKFNFJLFK = 15;</code>
     * @return int
     */
    public function getMNAKFNFJLFK()
    {
        return $this->MNAKFNFJLFK;
    }

    /**
     * Generated from protobuf field <code>uint32 MNAKFNFJLFK = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setMNAKFNFJLFK($var)
    {
        GPBUtil::checkUint32($var);
        $this->MNAKFNFJLFK = $var;

        return $this;
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
     * Generated from protobuf field <code>uint32 ABJCHBJJMIO = 9;</code>
     * @return int
     */
    public function getABJCHBJJMIO()
    {
        return $this->ABJCHBJJMIO;
    }

    /**
     * Generated from protobuf field <code>uint32 ABJCHBJJMIO = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setABJCHBJJMIO($var)
    {
        GPBUtil::checkUint32($var);
        $this->ABJCHBJJMIO = $var;

        return $this;
    }

}

