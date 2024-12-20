<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KODBOONBEBO</code>
 */
class KODBOONBEBO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 pnlohhmogfp = 15;</code>
     */
    private $pnlohhmogfp;
    /**
     * Generated from protobuf field <code>bool is_taken_reward = 7;</code>
     */
    protected $is_taken_reward = false;
    /**
     * Generated from protobuf field <code>uint32 lbdmholpjke = 4;</code>
     */
    protected $lbdmholpjke = 0;
    /**
     * Generated from protobuf field <code>uint32 mjookhjfbbh = 3;</code>
     */
    protected $mjookhjfbbh = 0;
    /**
     * Generated from protobuf field <code>int64 finish_time = 13;</code>
     */
    protected $finish_time = 0;
    /**
     * Generated from protobuf field <code>uint32 jhhiighdnnk = 5;</code>
     */
    protected $jhhiighdnnk = 0;
    /**
     * Generated from protobuf field <code>int64 odhloenbbjh = 8;</code>
     */
    protected $odhloenbbjh = 0;
    /**
     * Generated from protobuf field <code>.HJGEEFNGKGM status = 12;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 eldncdbbema = 14;</code>
     */
    private $eldncdbbema;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $pnlohhmogfp
     *     @type bool $is_taken_reward
     *     @type int $lbdmholpjke
     *     @type int $mjookhjfbbh
     *     @type int|string $finish_time
     *     @type int $jhhiighdnnk
     *     @type int|string $odhloenbbjh
     *     @type int $status
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $eldncdbbema
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 pnlohhmogfp = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPnlohhmogfp()
    {
        return $this->pnlohhmogfp;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 pnlohhmogfp = 15;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPnlohhmogfp($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->pnlohhmogfp = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_taken_reward = 7;</code>
     * @return bool
     */
    public function getIsTakenReward()
    {
        return $this->is_taken_reward;
    }

    /**
     * Generated from protobuf field <code>bool is_taken_reward = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsTakenReward($var)
    {
        GPBUtil::checkBool($var);
        $this->is_taken_reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lbdmholpjke = 4;</code>
     * @return int
     */
    public function getLbdmholpjke()
    {
        return $this->lbdmholpjke;
    }

    /**
     * Generated from protobuf field <code>uint32 lbdmholpjke = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLbdmholpjke($var)
    {
        GPBUtil::checkUint32($var);
        $this->lbdmholpjke = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 mjookhjfbbh = 3;</code>
     * @return int
     */
    public function getMjookhjfbbh()
    {
        return $this->mjookhjfbbh;
    }

    /**
     * Generated from protobuf field <code>uint32 mjookhjfbbh = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMjookhjfbbh($var)
    {
        GPBUtil::checkUint32($var);
        $this->mjookhjfbbh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 finish_time = 13;</code>
     * @return int|string
     */
    public function getFinishTime()
    {
        return $this->finish_time;
    }

    /**
     * Generated from protobuf field <code>int64 finish_time = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFinishTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->finish_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 jhhiighdnnk = 5;</code>
     * @return int
     */
    public function getJhhiighdnnk()
    {
        return $this->jhhiighdnnk;
    }

    /**
     * Generated from protobuf field <code>uint32 jhhiighdnnk = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setJhhiighdnnk($var)
    {
        GPBUtil::checkUint32($var);
        $this->jhhiighdnnk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 odhloenbbjh = 8;</code>
     * @return int|string
     */
    public function getOdhloenbbjh()
    {
        return $this->odhloenbbjh;
    }

    /**
     * Generated from protobuf field <code>int64 odhloenbbjh = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOdhloenbbjh($var)
    {
        GPBUtil::checkInt64($var);
        $this->odhloenbbjh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.HJGEEFNGKGM status = 12;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.HJGEEFNGKGM status = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \HJGEEFNGKGM::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 eldncdbbema = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEldncdbbema()
    {
        return $this->eldncdbbema;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 eldncdbbema = 14;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEldncdbbema($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->eldncdbbema = $arr;

        return $this;
    }

}
