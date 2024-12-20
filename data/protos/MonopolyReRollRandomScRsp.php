<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BGPGPFCLIAH (7019)
 *
 * Generated from protobuf message <code>MonopolyReRollRandomScRsp</code>
 */
class MonopolyReRollRandomScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 event_id = 8;</code>
     */
    protected $event_id = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.OHJAIJKAADK babpbdkofph = 12;</code>
     */
    protected $babpbdkofph = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $event_id
     *     @type int $retcode
     *     @type \OHJAIJKAADK $babpbdkofph
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 event_id = 8;</code>
     * @return int
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Generated from protobuf field <code>uint32 event_id = 8;</code>
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
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
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
     * Generated from protobuf field <code>.OHJAIJKAADK babpbdkofph = 12;</code>
     * @return \OHJAIJKAADK|null
     */
    public function getBabpbdkofph()
    {
        return $this->babpbdkofph;
    }

    public function hasBabpbdkofph()
    {
        return isset($this->babpbdkofph);
    }

    public function clearBabpbdkofph()
    {
        unset($this->babpbdkofph);
    }

    /**
     * Generated from protobuf field <code>.OHJAIJKAADK babpbdkofph = 12;</code>
     * @param \OHJAIJKAADK $var
     * @return $this
     */
    public function setBabpbdkofph($var)
    {
        GPBUtil::checkMessage($var, \OHJAIJKAADK::class);
        $this->babpbdkofph = $var;

        return $this;
    }

}

