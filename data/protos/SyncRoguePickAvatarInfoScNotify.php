<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BNLANCBBNAK (1851)
 *
 * Generated from protobuf message <code>SyncRoguePickAvatarInfoScNotify</code>
 */
class SyncRoguePickAvatarInfoScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 eljinbjeael = 13;</code>
     */
    private $eljinbjeael;
    /**
     * Generated from protobuf field <code>repeated uint32 base_avatar_id_list = 4;</code>
     */
    private $base_avatar_id_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $eljinbjeael
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $base_avatar_id_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 eljinbjeael = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEljinbjeael()
    {
        return $this->eljinbjeael;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 eljinbjeael = 13;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEljinbjeael($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->eljinbjeael = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 base_avatar_id_list = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBaseAvatarIdList()
    {
        return $this->base_avatar_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 base_avatar_id_list = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBaseAvatarIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->base_avatar_id_list = $arr;

        return $this;
    }

}

