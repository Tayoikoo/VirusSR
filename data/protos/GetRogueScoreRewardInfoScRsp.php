<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FEAPOFOMCMG (1820)
 *
 * Generated from protobuf message <code>GetRogueScoreRewardInfoScRsp</code>
 */
class GetRogueScoreRewardInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.RogueScoreRewardInfo lddcaaekfob = 3;</code>
     */
    protected $lddcaaekfob = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \RogueScoreRewardInfo $lddcaaekfob
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
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
     * Generated from protobuf field <code>.RogueScoreRewardInfo lddcaaekfob = 3;</code>
     * @return \RogueScoreRewardInfo|null
     */
    public function getLddcaaekfob()
    {
        return $this->lddcaaekfob;
    }

    public function hasLddcaaekfob()
    {
        return isset($this->lddcaaekfob);
    }

    public function clearLddcaaekfob()
    {
        unset($this->lddcaaekfob);
    }

    /**
     * Generated from protobuf field <code>.RogueScoreRewardInfo lddcaaekfob = 3;</code>
     * @param \RogueScoreRewardInfo $var
     * @return $this
     */
    public function setLddcaaekfob($var)
    {
        GPBUtil::checkMessage($var, \RogueScoreRewardInfo::class);
        $this->lddcaaekfob = $var;

        return $this;
    }

}

