<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JGPBCJGKFED (5483)
 *
 * Generated from protobuf message <code>GetChessRogueStoryAeonTalkInfoCsReq</code>
 */
class GetChessRogueStoryAeonTalkInfoCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 talk_dialogue_id = 3;</code>
     */
    protected $talk_dialogue_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $talk_dialogue_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 talk_dialogue_id = 3;</code>
     * @return int
     */
    public function getTalkDialogueId()
    {
        return $this->talk_dialogue_id;
    }

    /**
     * Generated from protobuf field <code>uint32 talk_dialogue_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTalkDialogueId($var)
    {
        GPBUtil::checkUint32($var);
        $this->talk_dialogue_id = $var;

        return $this;
    }

}

