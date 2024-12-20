<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MJJMAHOHMBB</code>
 */
class MJJMAHOHMBB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 NOGFLOBEFAC = 14;</code>
     */
    private $NOGFLOBEFAC;
    /**
     * Generated from protobuf field <code>.ItemList reward = 9;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 exp = 2;</code>
     */
    protected $exp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $NOGFLOBEFAC
     *     @type \ItemList $reward
     *     @type int $retcode
     *     @type int $exp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 NOGFLOBEFAC = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNOGFLOBEFAC()
    {
        return $this->NOGFLOBEFAC;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 NOGFLOBEFAC = 14;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNOGFLOBEFAC($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->NOGFLOBEFAC = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 9;</code>
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
     * Generated from protobuf field <code>.ItemList reward = 9;</code>
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
     * Generated from protobuf field <code>uint32 exp = 2;</code>
     * @return int
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setExp($var)
    {
        GPBUtil::checkUint32($var);
        $this->exp = $var;

        return $this;
    }

}
