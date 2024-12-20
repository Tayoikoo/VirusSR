<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PlayerAssistInfo</code>
 */
class PlayerAssistInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.PlayerSimpleInfo player_info = 14;</code>
     */
    protected $player_info = null;
    /**
     * Generated from protobuf field <code>.DisplayAvatarDetailInfo assist_avatar = 9;</code>
     */
    protected $assist_avatar = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \PlayerSimpleInfo $player_info
     *     @type \DisplayAvatarDetailInfo $assist_avatar
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.PlayerSimpleInfo player_info = 14;</code>
     * @return \PlayerSimpleInfo|null
     */
    public function getPlayerInfo()
    {
        return $this->player_info;
    }

    public function hasPlayerInfo()
    {
        return isset($this->player_info);
    }

    public function clearPlayerInfo()
    {
        unset($this->player_info);
    }

    /**
     * Generated from protobuf field <code>.PlayerSimpleInfo player_info = 14;</code>
     * @param \PlayerSimpleInfo $var
     * @return $this
     */
    public function setPlayerInfo($var)
    {
        GPBUtil::checkMessage($var, \PlayerSimpleInfo::class);
        $this->player_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.DisplayAvatarDetailInfo assist_avatar = 9;</code>
     * @return \DisplayAvatarDetailInfo|null
     */
    public function getAssistAvatar()
    {
        return $this->assist_avatar;
    }

    public function hasAssistAvatar()
    {
        return isset($this->assist_avatar);
    }

    public function clearAssistAvatar()
    {
        unset($this->assist_avatar);
    }

    /**
     * Generated from protobuf field <code>.DisplayAvatarDetailInfo assist_avatar = 9;</code>
     * @param \DisplayAvatarDetailInfo $var
     * @return $this
     */
    public function setAssistAvatar($var)
    {
        GPBUtil::checkMessage($var, \DisplayAvatarDetailInfo::class);
        $this->assist_avatar = $var;

        return $this;
    }

}
