<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IJIILDKGJCI</code>
 */
class IJIILDKGJCI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ADNEJCJKBNF LHMKHBFOLHE = 1;</code>
     */
    protected $LHMKHBFOLHE = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 scene_event_id = 12;</code>
     */
    protected $scene_event_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ADNEJCJKBNF $LHMKHBFOLHE
     *     @type int $retcode
     *     @type int $scene_event_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ADNEJCJKBNF LHMKHBFOLHE = 1;</code>
     * @return \ADNEJCJKBNF|null
     */
    public function getLHMKHBFOLHE()
    {
        return $this->LHMKHBFOLHE;
    }

    public function hasLHMKHBFOLHE()
    {
        return isset($this->LHMKHBFOLHE);
    }

    public function clearLHMKHBFOLHE()
    {
        unset($this->LHMKHBFOLHE);
    }

    /**
     * Generated from protobuf field <code>.ADNEJCJKBNF LHMKHBFOLHE = 1;</code>
     * @param \ADNEJCJKBNF $var
     * @return $this
     */
    public function setLHMKHBFOLHE($var)
    {
        GPBUtil::checkMessage($var, \ADNEJCJKBNF::class);
        $this->LHMKHBFOLHE = $var;

        return $this;
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
     * Generated from protobuf field <code>uint32 scene_event_id = 12;</code>
     * @return int
     */
    public function getSceneEventId()
    {
        return $this->scene_event_id;
    }

    /**
     * Generated from protobuf field <code>uint32 scene_event_id = 12;</code>
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

