<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GJGLOCODECG (1267)
 *
 * Generated from protobuf message <code>MissionRewardScNotify</code>
 */
class MissionRewardScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList reward = 8;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>uint32 sub_mission_id = 12;</code>
     */
    protected $sub_mission_id = 0;
    /**
     * Generated from protobuf field <code>uint32 main_mission_id = 10;</code>
     */
    protected $main_mission_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $reward
     *     @type int $sub_mission_id
     *     @type int $main_mission_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 8;</code>
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
     * Generated from protobuf field <code>.ItemList reward = 8;</code>
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
     * Generated from protobuf field <code>uint32 sub_mission_id = 12;</code>
     * @return int
     */
    public function getSubMissionId()
    {
        return $this->sub_mission_id;
    }

    /**
     * Generated from protobuf field <code>uint32 sub_mission_id = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setSubMissionId($var)
    {
        GPBUtil::checkUint32($var);
        $this->sub_mission_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 main_mission_id = 10;</code>
     * @return int
     */
    public function getMainMissionId()
    {
        return $this->main_mission_id;
    }

    /**
     * Generated from protobuf field <code>uint32 main_mission_id = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setMainMissionId($var)
    {
        GPBUtil::checkUint32($var);
        $this->main_mission_id = $var;

        return $this;
    }

}
