<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EKPNJHDLGCI (62)
 *
 * Generated from protobuf message <code>SetMultipleAvatarPathsCsReq</code>
 */
class SetMultipleAvatarPathsCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .MultiPathAvatarType avatar_id_list = 9;</code>
     */
    private $avatar_id_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $avatar_id_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .MultiPathAvatarType avatar_id_list = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarIdList()
    {
        return $this->avatar_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated .MultiPathAvatarType avatar_id_list = 9;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \MultiPathAvatarType::class);
        $this->avatar_id_list = $arr;

        return $this;
    }

}

