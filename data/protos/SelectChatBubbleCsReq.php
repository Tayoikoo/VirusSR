<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ADIACGAMFPE (5184)
 *
 * Generated from protobuf message <code>SelectChatBubbleCsReq</code>
 */
class SelectChatBubbleCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 bubble_id = 8;</code>
     */
    protected $bubble_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $bubble_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 bubble_id = 8;</code>
     * @return int
     */
    public function getBubbleId()
    {
        return $this->bubble_id;
    }

    /**
     * Generated from protobuf field <code>uint32 bubble_id = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setBubbleId($var)
    {
        GPBUtil::checkUint32($var);
        $this->bubble_id = $var;

        return $this;
    }

}

