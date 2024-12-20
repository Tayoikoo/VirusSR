<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ExpeditionInfo</code>
 */
class ExpeditionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 avatar_id_list = 5;</code>
     */
    private $avatar_id_list;
    /**
     * Generated from protobuf field <code>uint32 total_duration = 8;</code>
     */
    protected $total_duration = 0;
    /**
     * Generated from protobuf field <code>uint32 id = 6;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>int64 start_expedition_time = 4;</code>
     */
    protected $start_expedition_time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $avatar_id_list
     *     @type int $total_duration
     *     @type int $id
     *     @type int|string $start_expedition_time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 avatar_id_list = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarIdList()
    {
        return $this->avatar_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 avatar_id_list = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->avatar_id_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 total_duration = 8;</code>
     * @return int
     */
    public function getTotalDuration()
    {
        return $this->total_duration;
    }

    /**
     * Generated from protobuf field <code>uint32 total_duration = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalDuration($var)
    {
        GPBUtil::checkUint32($var);
        $this->total_duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 6;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 6;</code>
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
     * Generated from protobuf field <code>int64 start_expedition_time = 4;</code>
     * @return int|string
     */
    public function getStartExpeditionTime()
    {
        return $this->start_expedition_time;
    }

    /**
     * Generated from protobuf field <code>int64 start_expedition_time = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartExpeditionTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->start_expedition_time = $var;

        return $this;
    }

}

