<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DOKFNAEEADE</code>
 */
class DOKFNAEEADE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.NADHCNJHLDA onecnikgbgl = 8;</code>
     */
    protected $onecnikgbgl = null;
    /**
     * Generated from protobuf field <code>repeated .IPBDJPAJODO mchonaccdme = 9;</code>
     */
    private $mchonaccdme;
    /**
     * Generated from protobuf field <code>uint32 event_unique_id = 13;</code>
     */
    protected $event_unique_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \NADHCNJHLDA $onecnikgbgl
     *     @type array<\IPBDJPAJODO>|\Google\Protobuf\Internal\RepeatedField $mchonaccdme
     *     @type int $event_unique_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.NADHCNJHLDA onecnikgbgl = 8;</code>
     * @return \NADHCNJHLDA|null
     */
    public function getOnecnikgbgl()
    {
        return $this->onecnikgbgl;
    }

    public function hasOnecnikgbgl()
    {
        return isset($this->onecnikgbgl);
    }

    public function clearOnecnikgbgl()
    {
        unset($this->onecnikgbgl);
    }

    /**
     * Generated from protobuf field <code>.NADHCNJHLDA onecnikgbgl = 8;</code>
     * @param \NADHCNJHLDA $var
     * @return $this
     */
    public function setOnecnikgbgl($var)
    {
        GPBUtil::checkMessage($var, \NADHCNJHLDA::class);
        $this->onecnikgbgl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .IPBDJPAJODO mchonaccdme = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMchonaccdme()
    {
        return $this->mchonaccdme;
    }

    /**
     * Generated from protobuf field <code>repeated .IPBDJPAJODO mchonaccdme = 9;</code>
     * @param array<\IPBDJPAJODO>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMchonaccdme($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \IPBDJPAJODO::class);
        $this->mchonaccdme = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 event_unique_id = 13;</code>
     * @return int
     */
    public function getEventUniqueId()
    {
        return $this->event_unique_id;
    }

    /**
     * Generated from protobuf field <code>uint32 event_unique_id = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setEventUniqueId($var)
    {
        GPBUtil::checkUint32($var);
        $this->event_unique_id = $var;

        return $this;
    }

}

