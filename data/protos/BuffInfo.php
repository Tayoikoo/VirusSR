<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BuffInfo</code>
 */
class BuffInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 buff_id = 14;</code>
     */
    protected $buff_id = 0;
    /**
     * Generated from protobuf field <code>uint64 add_time_ms = 10;</code>
     */
    protected $add_time_ms = 0;
    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 8;</code>
     */
    protected $base_avatar_id = 0;
    /**
     * Generated from protobuf field <code>uint32 count = 1;</code>
     */
    protected $count = 0;
    /**
     * Generated from protobuf field <code>float life_time = 6;</code>
     */
    protected $life_time = 0.0;
    /**
     * Generated from protobuf field <code>map<string, float> dynamic_values = 15;</code>
     */
    private $dynamic_values;
    /**
     * Generated from protobuf field <code>uint32 buff_summon_entity_id = 11;</code>
     */
    protected $buff_summon_entity_id = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
     */
    protected $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $buff_id
     *     @type int|string $add_time_ms
     *     @type int $base_avatar_id
     *     @type int $count
     *     @type float $life_time
     *     @type array|\Google\Protobuf\Internal\MapField $dynamic_values
     *     @type int $buff_summon_entity_id
     *     @type int $level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 buff_id = 14;</code>
     * @return int
     */
    public function getBuffId()
    {
        return $this->buff_id;
    }

    /**
     * Generated from protobuf field <code>uint32 buff_id = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setBuffId($var)
    {
        GPBUtil::checkUint32($var);
        $this->buff_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 add_time_ms = 10;</code>
     * @return int|string
     */
    public function getAddTimeMs()
    {
        return $this->add_time_ms;
    }

    /**
     * Generated from protobuf field <code>uint64 add_time_ms = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAddTimeMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->add_time_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 8;</code>
     * @return int
     */
    public function getBaseAvatarId()
    {
        return $this->base_avatar_id;
    }

    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setBaseAvatarId($var)
    {
        GPBUtil::checkUint32($var);
        $this->base_avatar_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 1;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float life_time = 6;</code>
     * @return float
     */
    public function getLifeTime()
    {
        return $this->life_time;
    }

    /**
     * Generated from protobuf field <code>float life_time = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setLifeTime($var)
    {
        GPBUtil::checkFloat($var);
        $this->life_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, float> dynamic_values = 15;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDynamicValues()
    {
        return $this->dynamic_values;
    }

    /**
     * Generated from protobuf field <code>map<string, float> dynamic_values = 15;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDynamicValues($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->dynamic_values = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 buff_summon_entity_id = 11;</code>
     * @return int
     */
    public function getBuffSummonEntityId()
    {
        return $this->buff_summon_entity_id;
    }

    /**
     * Generated from protobuf field <code>uint32 buff_summon_entity_id = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setBuffSummonEntityId($var)
    {
        GPBUtil::checkUint32($var);
        $this->buff_summon_entity_id = $var;

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

}

