<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JDAHPAHOJJM (1290)
 *
 * Generated from protobuf message <code>InterruptMissionEventCsReq</code>
 */
class InterruptMissionEventCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 mission_event_id = 14;</code>
     */
    protected $mission_event_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $mission_event_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 mission_event_id = 14;</code>
     * @return int
     */
    public function getMissionEventId()
    {
        return $this->mission_event_id;
    }

    /**
     * Generated from protobuf field <code>uint32 mission_event_id = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setMissionEventId($var)
    {
        GPBUtil::checkUint32($var);
        $this->mission_event_id = $var;

        return $this;
    }

}

