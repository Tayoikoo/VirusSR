<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GMJEGFMHPAA (1896)
 *
 * Generated from protobuf message <code>SyncRogueFinishScNotify</code>
 */
class SyncRogueFinishScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.RogueFinishInfo rogue_finish_info = 14;</code>
     */
    protected $rogue_finish_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RogueFinishInfo $rogue_finish_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.RogueFinishInfo rogue_finish_info = 14;</code>
     * @return \RogueFinishInfo|null
     */
    public function getRogueFinishInfo()
    {
        return $this->rogue_finish_info;
    }

    public function hasRogueFinishInfo()
    {
        return isset($this->rogue_finish_info);
    }

    public function clearRogueFinishInfo()
    {
        unset($this->rogue_finish_info);
    }

    /**
     * Generated from protobuf field <code>.RogueFinishInfo rogue_finish_info = 14;</code>
     * @param \RogueFinishInfo $var
     * @return $this
     */
    public function setRogueFinishInfo($var)
    {
        GPBUtil::checkMessage($var, \RogueFinishInfo::class);
        $this->rogue_finish_info = $var;

        return $this;
    }

}

