<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HNLIMOMNHGG (2827)
 *
 * Generated from protobuf message <code>SetHeadIconScRsp</code>
 */
class SetHeadIconScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 current_head_icon_id = 13;</code>
     */
    protected $current_head_icon_id = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $current_head_icon_id
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 current_head_icon_id = 13;</code>
     * @return int
     */
    public function getCurrentHeadIconId()
    {
        return $this->current_head_icon_id;
    }

    /**
     * Generated from protobuf field <code>uint32 current_head_icon_id = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setCurrentHeadIconId($var)
    {
        GPBUtil::checkUint32($var);
        $this->current_head_icon_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}
