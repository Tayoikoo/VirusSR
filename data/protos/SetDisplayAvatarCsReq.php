<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MBFBJPKFBLK (2867)
 *
 * Generated from protobuf message <code>SetDisplayAvatarCsReq</code>
 */
class SetDisplayAvatarCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .DisplayAvatarData display_avatar_list = 15;</code>
     */
    private $display_avatar_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\DisplayAvatarData>|\Google\Protobuf\Internal\RepeatedField $display_avatar_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .DisplayAvatarData display_avatar_list = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDisplayAvatarList()
    {
        return $this->display_avatar_list;
    }

    /**
     * Generated from protobuf field <code>repeated .DisplayAvatarData display_avatar_list = 15;</code>
     * @param array<\DisplayAvatarData>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDisplayAvatarList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \DisplayAvatarData::class);
        $this->display_avatar_list = $arr;

        return $this;
    }

}

