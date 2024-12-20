<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RogueInfo</code>
 */
class RogueInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.RogueGetInfo rogue_get_info = 196;</code>
     */
    protected $rogue_get_info = null;
    /**
     * Generated from protobuf field <code>.RogueCurrentInfo rogue_current_info = 675;</code>
     */
    protected $rogue_current_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RogueGetInfo $rogue_get_info
     *     @type \RogueCurrentInfo $rogue_current_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.RogueGetInfo rogue_get_info = 196;</code>
     * @return \RogueGetInfo|null
     */
    public function getRogueGetInfo()
    {
        return $this->rogue_get_info;
    }

    public function hasRogueGetInfo()
    {
        return isset($this->rogue_get_info);
    }

    public function clearRogueGetInfo()
    {
        unset($this->rogue_get_info);
    }

    /**
     * Generated from protobuf field <code>.RogueGetInfo rogue_get_info = 196;</code>
     * @param \RogueGetInfo $var
     * @return $this
     */
    public function setRogueGetInfo($var)
    {
        GPBUtil::checkMessage($var, \RogueGetInfo::class);
        $this->rogue_get_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RogueCurrentInfo rogue_current_info = 675;</code>
     * @return \RogueCurrentInfo|null
     */
    public function getRogueCurrentInfo()
    {
        return $this->rogue_current_info;
    }

    public function hasRogueCurrentInfo()
    {
        return isset($this->rogue_current_info);
    }

    public function clearRogueCurrentInfo()
    {
        unset($this->rogue_current_info);
    }

    /**
     * Generated from protobuf field <code>.RogueCurrentInfo rogue_current_info = 675;</code>
     * @param \RogueCurrentInfo $var
     * @return $this
     */
    public function setRogueCurrentInfo($var)
    {
        GPBUtil::checkMessage($var, \RogueCurrentInfo::class);
        $this->rogue_current_info = $var;

        return $this;
    }

}

