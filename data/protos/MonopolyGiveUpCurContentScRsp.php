<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * INBOAPKHCEL (7029)
 *
 * Generated from protobuf message <code>MonopolyGiveUpCurContentScRsp</code>
 */
class MonopolyGiveUpCurContentScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 content_id = 2;</code>
     */
    protected $content_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $content_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
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
     * Generated from protobuf field <code>uint32 content_id = 2;</code>
     * @return int
     */
    public function getContentId()
    {
        return $this->content_id;
    }

    /**
     * Generated from protobuf field <code>uint32 content_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setContentId($var)
    {
        GPBUtil::checkUint32($var);
        $this->content_id = $var;

        return $this;
    }

}

