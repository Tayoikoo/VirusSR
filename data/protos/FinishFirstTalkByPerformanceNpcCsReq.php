<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EAEKAIOILII (2146)
 *
 * Generated from protobuf message <code>FinishFirstTalkByPerformanceNpcCsReq</code>
 */
class FinishFirstTalkByPerformanceNpcCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 npc_talk_id = 6;</code>
     */
    protected $npc_talk_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $npc_talk_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 npc_talk_id = 6;</code>
     * @return int
     */
    public function getNpcTalkId()
    {
        return $this->npc_talk_id;
    }

    /**
     * Generated from protobuf field <code>uint32 npc_talk_id = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setNpcTalkId($var)
    {
        GPBUtil::checkUint32($var);
        $this->npc_talk_id = $var;

        return $this;
    }

}

