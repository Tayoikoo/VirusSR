<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IAMDHPNCEFK</code>
 */
class IAMDHPNCEFK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 LIKGPACLGBN = 5;</code>
     */
    protected $LIKGPACLGBN = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 9;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>.ItemList reward = 4;</code>
     */
    protected $reward = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $LIKGPACLGBN
     *     @type int $level
     *     @type \ItemList $reward
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
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
     * Generated from protobuf field <code>uint32 LIKGPACLGBN = 5;</code>
     * @return int
     */
    public function getLIKGPACLGBN()
    {
        return $this->LIKGPACLGBN;
    }

    /**
     * Generated from protobuf field <code>uint32 LIKGPACLGBN = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLIKGPACLGBN($var)
    {
        GPBUtil::checkUint32($var);
        $this->LIKGPACLGBN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 9;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 4;</code>
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
     * Generated from protobuf field <code>.ItemList reward = 4;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setReward($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->reward = $var;

        return $this;
    }

}
