<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HGMAKMKJHOJ (1205)
 *
 * Generated from protobuf message <code>GetMissionEventDataScRsp</code>
 */
class GetMissionEventDataScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 challenge_event_id = 5;</code>
     */
    protected $challenge_event_id = 0;
    /**
     * Generated from protobuf field <code>repeated .Mission mission_event_list = 13;</code>
     */
    private $mission_event_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $challenge_event_id
     *     @type array<\Mission>|\Google\Protobuf\Internal\RepeatedField $mission_event_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
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
     * Generated from protobuf field <code>uint32 challenge_event_id = 5;</code>
     * @return int
     */
    public function getChallengeEventId()
    {
        return $this->challenge_event_id;
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_event_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setChallengeEventId($var)
    {
        GPBUtil::checkUint32($var);
        $this->challenge_event_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Mission mission_event_list = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMissionEventList()
    {
        return $this->mission_event_list;
    }

    /**
     * Generated from protobuf field <code>repeated .Mission mission_event_list = 13;</code>
     * @param array<\Mission>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMissionEventList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Mission::class);
        $this->mission_event_list = $arr;

        return $this;
    }

}

