<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OptionalReward</code>
 */
class OptionalReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 Level = 7;</code>
     */
    protected $Level = 0;
    /**
     * Generated from protobuf field <code>uint32 OptionalRewardId = 1;</code>
     */
    protected $OptionalRewardId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Level
     *     @type int $OptionalRewardId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 Level = 7;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * Generated from protobuf field <code>uint32 Level = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->Level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OptionalRewardId = 1;</code>
     * @return int
     */
    public function getOptionalRewardId()
    {
        return $this->OptionalRewardId;
    }

    /**
     * Generated from protobuf field <code>uint32 OptionalRewardId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOptionalRewardId($var)
    {
        GPBUtil::checkUint32($var);
        $this->OptionalRewardId = $var;

        return $this;
    }

}
