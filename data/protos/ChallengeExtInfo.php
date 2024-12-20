<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ChallengeExtInfo</code>
 */
class ChallengeExtInfo extends \Google\Protobuf\Internal\Message
{
    protected $info_case;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ChallengeBossInfo $boss_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ChallengeBossInfo boss_info = 12;</code>
     * @return \ChallengeBossInfo|null
     */
    public function getBossInfo()
    {
        return $this->readOneof(12);
    }

    public function hasBossInfo()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.ChallengeBossInfo boss_info = 12;</code>
     * @param \ChallengeBossInfo $var
     * @return $this
     */
    public function setBossInfo($var)
    {
        GPBUtil::checkMessage($var, \ChallengeBossInfo::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getInfoCase()
    {
        return $this->whichOneof("info_case");
    }

}
