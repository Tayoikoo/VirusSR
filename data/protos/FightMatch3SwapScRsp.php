<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GMMJOJIHKHA (30152)
 *
 * Generated from protobuf message <code>FightMatch3SwapScRsp</code>
 */
class FightMatch3SwapScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool gjhbhnbpkmg = 6;</code>
     */
    protected $gjhbhnbpkmg = false;
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.ABOIFBHJJJH idkjpdgjcdk = 11;</code>
     */
    protected $idkjpdgjcdk = null;
    /**
     * Generated from protobuf field <code>uint32 lhflcfnaopb = 9;</code>
     */
    protected $lhflcfnaopb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $gjhbhnbpkmg
     *     @type int $retcode
     *     @type \ABOIFBHJJJH $idkjpdgjcdk
     *     @type int $lhflcfnaopb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool gjhbhnbpkmg = 6;</code>
     * @return bool
     */
    public function getGjhbhnbpkmg()
    {
        return $this->gjhbhnbpkmg;
    }

    /**
     * Generated from protobuf field <code>bool gjhbhnbpkmg = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setGjhbhnbpkmg($var)
    {
        GPBUtil::checkBool($var);
        $this->gjhbhnbpkmg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
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
     * Generated from protobuf field <code>.ABOIFBHJJJH idkjpdgjcdk = 11;</code>
     * @return \ABOIFBHJJJH|null
     */
    public function getIdkjpdgjcdk()
    {
        return $this->idkjpdgjcdk;
    }

    public function hasIdkjpdgjcdk()
    {
        return isset($this->idkjpdgjcdk);
    }

    public function clearIdkjpdgjcdk()
    {
        unset($this->idkjpdgjcdk);
    }

    /**
     * Generated from protobuf field <code>.ABOIFBHJJJH idkjpdgjcdk = 11;</code>
     * @param \ABOIFBHJJJH $var
     * @return $this
     */
    public function setIdkjpdgjcdk($var)
    {
        GPBUtil::checkMessage($var, \ABOIFBHJJJH::class);
        $this->idkjpdgjcdk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lhflcfnaopb = 9;</code>
     * @return int
     */
    public function getLhflcfnaopb()
    {
        return $this->lhflcfnaopb;
    }

    /**
     * Generated from protobuf field <code>uint32 lhflcfnaopb = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setLhflcfnaopb($var)
    {
        GPBUtil::checkUint32($var);
        $this->lhflcfnaopb = $var;

        return $this;
    }

}

