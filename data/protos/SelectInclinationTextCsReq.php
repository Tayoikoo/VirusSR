<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NLMDNMAFBPK (2124)
 *
 * Generated from protobuf message <code>SelectInclinationTextCsReq</code>
 */
class SelectInclinationTextCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 talk_sentence_id = 14;</code>
     */
    protected $talk_sentence_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $talk_sentence_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 talk_sentence_id = 14;</code>
     * @return int
     */
    public function getTalkSentenceId()
    {
        return $this->talk_sentence_id;
    }

    /**
     * Generated from protobuf field <code>uint32 talk_sentence_id = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setTalkSentenceId($var)
    {
        GPBUtil::checkUint32($var);
        $this->talk_sentence_id = $var;

        return $this;
    }

}
