<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JFGHGEEIMIH (5607)
 *
 * Generated from protobuf message <code>ExchangeRogueBuffWithMiracleScRsp</code>
 */
class ExchangeRogueBuffWithMiracleScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.RogueCommonBuff jlbkiechnbh = 1;</code>
     */
    protected $jlbkiechnbh = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \RogueCommonBuff $jlbkiechnbh
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
     * Generated from protobuf field <code>.RogueCommonBuff jlbkiechnbh = 1;</code>
     * @return \RogueCommonBuff|null
     */
    public function getJlbkiechnbh()
    {
        return $this->jlbkiechnbh;
    }

    public function hasJlbkiechnbh()
    {
        return isset($this->jlbkiechnbh);
    }

    public function clearJlbkiechnbh()
    {
        unset($this->jlbkiechnbh);
    }

    /**
     * Generated from protobuf field <code>.RogueCommonBuff jlbkiechnbh = 1;</code>
     * @param \RogueCommonBuff $var
     * @return $this
     */
    public function setJlbkiechnbh($var)
    {
        GPBUtil::checkMessage($var, \RogueCommonBuff::class);
        $this->jlbkiechnbh = $var;

        return $this;
    }

}
