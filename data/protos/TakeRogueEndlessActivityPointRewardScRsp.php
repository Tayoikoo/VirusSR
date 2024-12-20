<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JPPPICEMBHP (6004)
 *
 * Generated from protobuf message <code>TakeRogueEndlessActivityPointRewardScRsp</code>
 */
class TakeRogueEndlessActivityPointRewardScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 echiomnmfek = 2;</code>
     */
    protected $echiomnmfek = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>bool hgoijnknioa = 9;</code>
     */
    protected $hgoijnknioa = false;
    /**
     * Generated from protobuf field <code>.ItemList reward = 4;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>repeated uint32 emghlpgepme = 12;</code>
     */
    private $emghlpgepme;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $echiomnmfek
     *     @type int $level
     *     @type bool $hgoijnknioa
     *     @type \ItemList $reward
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $emghlpgepme
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
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
     * Generated from protobuf field <code>uint32 echiomnmfek = 2;</code>
     * @return int
     */
    public function getEchiomnmfek()
    {
        return $this->echiomnmfek;
    }

    /**
     * Generated from protobuf field <code>uint32 echiomnmfek = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEchiomnmfek($var)
    {
        GPBUtil::checkUint32($var);
        $this->echiomnmfek = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
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
     * Generated from protobuf field <code>bool hgoijnknioa = 9;</code>
     * @return bool
     */
    public function getHgoijnknioa()
    {
        return $this->hgoijnknioa;
    }

    /**
     * Generated from protobuf field <code>bool hgoijnknioa = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setHgoijnknioa($var)
    {
        GPBUtil::checkBool($var);
        $this->hgoijnknioa = $var;

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

    /**
     * Generated from protobuf field <code>repeated uint32 emghlpgepme = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEmghlpgepme()
    {
        return $this->emghlpgepme;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 emghlpgepme = 12;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEmghlpgepme($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->emghlpgepme = $arr;

        return $this;
    }

}

