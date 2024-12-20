<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HCOGPCGEJDI (7662)
 *
 * Generated from protobuf message <code>RogueArcadeStartCsReq</code>
 */
class RogueArcadeStartCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 base_avatar_id_list = 13;</code>
     */
    private $base_avatar_id_list;
    /**
     * Generated from protobuf field <code>uint32 room_id = 4;</code>
     */
    protected $room_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $base_avatar_id_list
     *     @type int $room_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 base_avatar_id_list = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBaseAvatarIdList()
    {
        return $this->base_avatar_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 base_avatar_id_list = 13;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBaseAvatarIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->base_avatar_id_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 room_id = 4;</code>
     * @return int
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * Generated from protobuf field <code>uint32 room_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkUint32($var);
        $this->room_id = $var;

        return $this;
    }

}
