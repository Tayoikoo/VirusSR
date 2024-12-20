<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JNLKKEGIJON (1829)
 *
 * Generated from protobuf message <code>EnhanceRogueBuffScRsp</code>
 */
class EnhanceRogueBuffScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>bool is_succ = 8;</code>
     */
    protected $is_succ = false;
    /**
     * Generated from protobuf field <code>.RogueBuff iileadjpaem = 6;</code>
     */
    protected $iileadjpaem = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type bool $is_succ
     *     @type \RogueBuff $iileadjpaem
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
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

    /**
     * Generated from protobuf field <code>bool is_succ = 8;</code>
     * @return bool
     */
    public function getIsSucc()
    {
        return $this->is_succ;
    }

    /**
     * Generated from protobuf field <code>bool is_succ = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsSucc($var)
    {
        GPBUtil::checkBool($var);
        $this->is_succ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RogueBuff iileadjpaem = 6;</code>
     * @return \RogueBuff|null
     */
    public function getIileadjpaem()
    {
        return $this->iileadjpaem;
    }

    public function hasIileadjpaem()
    {
        return isset($this->iileadjpaem);
    }

    public function clearIileadjpaem()
    {
        unset($this->iileadjpaem);
    }

    /**
     * Generated from protobuf field <code>.RogueBuff iileadjpaem = 6;</code>
     * @param \RogueBuff $var
     * @return $this
     */
    public function setIileadjpaem($var)
    {
        GPBUtil::checkMessage($var, \RogueBuff::class);
        $this->iileadjpaem = $var;

        return $this;
    }

}

