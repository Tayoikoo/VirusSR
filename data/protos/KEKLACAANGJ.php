<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KEKLACAANGJ</code>
 */
class KEKLACAANGJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 scene_event_id = 6;</code>
     */
    protected $scene_event_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $scene_event_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 scene_event_id = 6;</code>
     * @return int
     */
    public function getSceneEventId()
    {
        return $this->scene_event_id;
    }

    /**
     * Generated from protobuf field <code>uint32 scene_event_id = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSceneEventId($var)
    {
        GPBUtil::checkUint32($var);
        $this->scene_event_id = $var;

        return $this;
    }

}

