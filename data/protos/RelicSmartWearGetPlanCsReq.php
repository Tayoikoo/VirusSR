<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PLJBPFKACMK (8270)
 *
 * Generated from protobuf message <code>RelicSmartWearGetPlanCsReq</code>
 */
class RelicSmartWearGetPlanCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 avatar_id = 1;</code>
     */
    protected $avatar_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $avatar_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 avatar_id = 1;</code>
     * @return int
     */
    public function getAvatarId()
    {
        return $this->avatar_id;
    }

    /**
     * Generated from protobuf field <code>uint32 avatar_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarId($var)
    {
        GPBUtil::checkUint32($var);
        $this->avatar_id = $var;

        return $this;
    }

}

