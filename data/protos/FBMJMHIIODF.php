<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FBMJMHIIODF</code>
 */
class FBMJMHIIODF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 lgalficmhho = 12;</code>
     */
    protected $lgalficmhho = 0;
    /**
     * Generated from protobuf field <code>uint32 event_id = 3;</code>
     */
    protected $event_id = 0;
    /**
     * Generated from protobuf field <code>.AlleyEventState state = 1;</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $lgalficmhho
     *     @type int $event_id
     *     @type int $state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 lgalficmhho = 12;</code>
     * @return int
     */
    public function getLgalficmhho()
    {
        return $this->lgalficmhho;
    }

    /**
     * Generated from protobuf field <code>uint32 lgalficmhho = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setLgalficmhho($var)
    {
        GPBUtil::checkUint32($var);
        $this->lgalficmhho = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 event_id = 3;</code>
     * @return int
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Generated from protobuf field <code>uint32 event_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkUint32($var);
        $this->event_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AlleyEventState state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.AlleyEventState state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \AlleyEventState::class);
        $this->state = $var;

        return $this;
    }

}
