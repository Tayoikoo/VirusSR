<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>StrongChallengeActivityInfo</code>
 */
class StrongChallengeActivityInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<uint32, .StrongChallengeActivityData> donehdjmhad = 8;</code>
     */
    private $donehdjmhad;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $donehdjmhad
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<uint32, .StrongChallengeActivityData> donehdjmhad = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDonehdjmhad()
    {
        return $this->donehdjmhad;
    }

    /**
     * Generated from protobuf field <code>map<uint32, .StrongChallengeActivityData> donehdjmhad = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDonehdjmhad($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::MESSAGE, \StrongChallengeActivityData::class);
        $this->donehdjmhad = $arr;

        return $this;
    }

}

