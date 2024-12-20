<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PFGEJBALCHH</code>
 */
class PFGEJBALCHH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList reward = 6;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>repeated .ItemList FMEKDBDKALM = 1;</code>
     */
    private $FMEKDBDKALM;
    /**
     * Generated from protobuf field <code>repeated .ItemList OPBKLACOKCA = 8;</code>
     */
    private $OPBKLACOKCA;
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 ABBCAAAPEIH = 11;</code>
     */
    private $ABBCAAAPEIH;
    /**
     * Generated from protobuf field <code>.ItemList HAJEJEFLKJD = 15;</code>
     */
    protected $HAJEJEFLKJD = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $reward
     *     @type array<\ItemList>|\Google\Protobuf\Internal\RepeatedField $FMEKDBDKALM
     *     @type array<\ItemList>|\Google\Protobuf\Internal\RepeatedField $OPBKLACOKCA
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $ABBCAAAPEIH
     *     @type \ItemList $HAJEJEFLKJD
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 6;</code>
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
     * Generated from protobuf field <code>.ItemList reward = 6;</code>
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
     * Generated from protobuf field <code>repeated .ItemList FMEKDBDKALM = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFMEKDBDKALM()
    {
        return $this->FMEKDBDKALM;
    }

    /**
     * Generated from protobuf field <code>repeated .ItemList FMEKDBDKALM = 1;</code>
     * @param array<\ItemList>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFMEKDBDKALM($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ItemList::class);
        $this->FMEKDBDKALM = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ItemList OPBKLACOKCA = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOPBKLACOKCA()
    {
        return $this->OPBKLACOKCA;
    }

    /**
     * Generated from protobuf field <code>repeated .ItemList OPBKLACOKCA = 8;</code>
     * @param array<\ItemList>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOPBKLACOKCA($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ItemList::class);
        $this->OPBKLACOKCA = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
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
     * Generated from protobuf field <code>repeated uint32 ABBCAAAPEIH = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getABBCAAAPEIH()
    {
        return $this->ABBCAAAPEIH;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ABBCAAAPEIH = 11;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setABBCAAAPEIH($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->ABBCAAAPEIH = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList HAJEJEFLKJD = 15;</code>
     * @return \ItemList|null
     */
    public function getHAJEJEFLKJD()
    {
        return $this->HAJEJEFLKJD;
    }

    public function hasHAJEJEFLKJD()
    {
        return isset($this->HAJEJEFLKJD);
    }

    public function clearHAJEJEFLKJD()
    {
        unset($this->HAJEJEFLKJD);
    }

    /**
     * Generated from protobuf field <code>.ItemList HAJEJEFLKJD = 15;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setHAJEJEFLKJD($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->HAJEJEFLKJD = $var;

        return $this;
    }

}

