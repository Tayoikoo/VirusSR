<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ChallengeGroup</code>
 */
class ChallengeGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 taken_stars_count_reward = 2;</code>
     */
    protected $taken_stars_count_reward = 0;
    /**
     * Generated from protobuf field <code>uint32 group_id = 1;</code>
     */
    protected $group_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $taken_stars_count_reward
     *     @type int $group_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 taken_stars_count_reward = 2;</code>
     * @return int|string
     */
    public function getTakenStarsCountReward()
    {
        return $this->taken_stars_count_reward;
    }

    /**
     * Generated from protobuf field <code>uint64 taken_stars_count_reward = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTakenStarsCountReward($var)
    {
        GPBUtil::checkUint64($var);
        $this->taken_stars_count_reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 1;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->group_id = $var;

        return $this;
    }

}

