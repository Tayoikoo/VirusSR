<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FKBJCFKLFEH (15)
 *
 * Generated from protobuf message <code>UnlockAvatarPathCsReq</code>
 */
class UnlockAvatarPathCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.MultiPathAvatarType avatar_id = 12;</code>
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
     * Generated from protobuf field <code>.MultiPathAvatarType avatar_id = 12;</code>
     * @return int
     */
    public function getAvatarId()
    {
        return $this->avatar_id;
    }

    /**
     * Generated from protobuf field <code>.MultiPathAvatarType avatar_id = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarId($var)
    {
        GPBUtil::checkEnum($var, \MultiPathAvatarType::class);
        $this->avatar_id = $var;

        return $this;
    }

}

