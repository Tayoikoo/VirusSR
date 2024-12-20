<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DHPLCGPHNDL</code>
 */
class DHPLCGPHNDL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList reward = 5;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 FJHBEFPHDIH = 10;</code>
     */
    protected $FJHBEFPHDIH = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $reward
     *     @type int $retcode
     *     @type int $FJHBEFPHDIH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 5;</code>
     * @return \ItemList|null
     */
    public function getReward()
    {
        return $this->reward;
    }

    public function hasReward()
    {
        return isset($this->reward);
    }

    public function clearReward()
    {
        unset($this->reward);
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 5;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setReward($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->reward = $var;

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
     * Generated from protobuf field <code>uint32 FJHBEFPHDIH = 10;</code>
     * @return int
     */
    public function getFJHBEFPHDIH()
    {
        return $this->FJHBEFPHDIH;
    }

    /**
     * Generated from protobuf field <code>uint32 FJHBEFPHDIH = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setFJHBEFPHDIH($var)
    {
        GPBUtil::checkUint32($var);
        $this->FJHBEFPHDIH = $var;

        return $this;
    }

}
