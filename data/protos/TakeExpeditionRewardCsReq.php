<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IKDJKNDLNJH (2552)
 *
 * Generated from protobuf message <code>TakeExpeditionRewardCsReq</code>
 */
class TakeExpeditionRewardCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 expedition_id = 11;</code>
     */
    protected $expedition_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $expedition_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 expedition_id = 11;</code>
     * @return int
     */
    public function getExpeditionId()
    {
        return $this->expedition_id;
    }

    /**
     * Generated from protobuf field <code>uint32 expedition_id = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setExpeditionId($var)
    {
        GPBUtil::checkUint32($var);
        $this->expedition_id = $var;

        return $this;
    }

}

