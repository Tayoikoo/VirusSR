<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BBKJDDFHPAH</code>
 */
class BBKJDDFHPAH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 hhhlohfnnhg = 11;</code>
     */
    private $hhhlohfnnhg;
    /**
     * Generated from protobuf field <code>.OJGOLPCJIJB status = 1;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>uint32 olopddjgafc = 12;</code>
     */
    protected $olopddjgafc = 0;
    /**
     * Generated from protobuf field <code>uint32 dmmelmgmhlo = 6;</code>
     */
    protected $dmmelmgmhlo = 0;
    /**
     * Generated from protobuf field <code>bool gpkiekapdgb = 5;</code>
     */
    protected $gpkiekapdgb = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $hhhlohfnnhg
     *     @type int $status
     *     @type int $olopddjgafc
     *     @type int $dmmelmgmhlo
     *     @type bool $gpkiekapdgb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 hhhlohfnnhg = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHhhlohfnnhg()
    {
        return $this->hhhlohfnnhg;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 hhhlohfnnhg = 11;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHhhlohfnnhg($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->hhhlohfnnhg = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.OJGOLPCJIJB status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.OJGOLPCJIJB status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \OJGOLPCJIJB::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 olopddjgafc = 12;</code>
     * @return int
     */
    public function getOlopddjgafc()
    {
        return $this->olopddjgafc;
    }

    /**
     * Generated from protobuf field <code>uint32 olopddjgafc = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setOlopddjgafc($var)
    {
        GPBUtil::checkUint32($var);
        $this->olopddjgafc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dmmelmgmhlo = 6;</code>
     * @return int
     */
    public function getDmmelmgmhlo()
    {
        return $this->dmmelmgmhlo;
    }

    /**
     * Generated from protobuf field <code>uint32 dmmelmgmhlo = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setDmmelmgmhlo($var)
    {
        GPBUtil::checkUint32($var);
        $this->dmmelmgmhlo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool gpkiekapdgb = 5;</code>
     * @return bool
     */
    public function getGpkiekapdgb()
    {
        return $this->gpkiekapdgb;
    }

    /**
     * Generated from protobuf field <code>bool gpkiekapdgb = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setGpkiekapdgb($var)
    {
        GPBUtil::checkBool($var);
        $this->gpkiekapdgb = $var;

        return $this;
    }

}

