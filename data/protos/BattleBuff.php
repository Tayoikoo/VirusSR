<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BattleBuff</code>
 */
class BattleBuff extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>uint32 owner_index = 3;</code>
     */
    protected $owner_index = 0;
    /**
     * Generated from protobuf field <code>uint32 wave_flag = 4;</code>
     */
    protected $wave_flag = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 target_index_list = 5;</code>
     */
    private $target_index_list;
    /**
     * Generated from protobuf field <code>map<string, float> dynamic_values = 6;</code>
     */
    private $dynamic_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type int $level
     *     @type int $owner_index
     *     @type int $wave_flag
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $target_index_list
     *     @type array|\Google\Protobuf\Internal\MapField $dynamic_values
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
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
     * Generated from protobuf field <code>uint32 owner_index = 3;</code>
     * @return int
     */
    public function getOwnerIndex()
    {
        return $this->owner_index;
    }

    /**
     * Generated from protobuf field <code>uint32 owner_index = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOwnerIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->owner_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 wave_flag = 4;</code>
     * @return int
     */
    public function getWaveFlag()
    {
        return $this->wave_flag;
    }

    /**
     * Generated from protobuf field <code>uint32 wave_flag = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setWaveFlag($var)
    {
        GPBUtil::checkUint32($var);
        $this->wave_flag = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 target_index_list = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetIndexList()
    {
        return $this->target_index_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 target_index_list = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargetIndexList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->target_index_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, float> dynamic_values = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDynamicValues()
    {
        return $this->dynamic_values;
    }

    /**
     * Generated from protobuf field <code>map<string, float> dynamic_values = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDynamicValues($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->dynamic_values = $arr;

        return $this;
    }

}
