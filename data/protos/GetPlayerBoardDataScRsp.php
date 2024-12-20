<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FJMGECNNNGB (2895)
 *
 * Generated from protobuf message <code>GetPlayerBoardDataScRsp</code>
 */
class GetPlayerBoardDataScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 current_head_icon_id = 15;</code>
     */
    protected $current_head_icon_id = 0;
    /**
     * Generated from protobuf field <code>repeated .HeadIconData unlocked_head_icon_list = 3;</code>
     */
    private $unlocked_head_icon_list;
    /**
     * Generated from protobuf field <code>repeated uint32 assist_avatar_id_list = 14;</code>
     */
    private $assist_avatar_id_list;
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.DisplayAvatarVec display_avatar_vec = 10;</code>
     */
    protected $display_avatar_vec = null;
    /**
     * Generated from protobuf field <code>string signature = 11;</code>
     */
    protected $signature = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $current_head_icon_id
     *     @type array<\HeadIconData>|\Google\Protobuf\Internal\RepeatedField $unlocked_head_icon_list
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $assist_avatar_id_list
     *     @type int $retcode
     *     @type \DisplayAvatarVec $display_avatar_vec
     *     @type string $signature
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 current_head_icon_id = 15;</code>
     * @return int
     */
    public function getCurrentHeadIconId()
    {
        return $this->current_head_icon_id;
    }

    /**
     * Generated from protobuf field <code>uint32 current_head_icon_id = 15;</code>
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
     * Generated from protobuf field <code>repeated .HeadIconData unlocked_head_icon_list = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnlockedHeadIconList()
    {
        return $this->unlocked_head_icon_list;
    }

    /**
     * Generated from protobuf field <code>repeated .HeadIconData unlocked_head_icon_list = 3;</code>
     * @param array<\HeadIconData>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnlockedHeadIconList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \HeadIconData::class);
        $this->unlocked_head_icon_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 assist_avatar_id_list = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssistAvatarIdList()
    {
        return $this->assist_avatar_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 assist_avatar_id_list = 14;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssistAvatarIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->assist_avatar_id_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
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
     * Generated from protobuf field <code>.DisplayAvatarVec display_avatar_vec = 10;</code>
     * @return \DisplayAvatarVec|null
     */
    public function getDisplayAvatarVec()
    {
        return $this->display_avatar_vec;
    }

    public function hasDisplayAvatarVec()
    {
        return isset($this->display_avatar_vec);
    }

    public function clearDisplayAvatarVec()
    {
        unset($this->display_avatar_vec);
    }

    /**
     * Generated from protobuf field <code>.DisplayAvatarVec display_avatar_vec = 10;</code>
     * @param \DisplayAvatarVec $var
     * @return $this
     */
    public function setDisplayAvatarVec($var)
    {
        GPBUtil::checkMessage($var, \DisplayAvatarVec::class);
        $this->display_avatar_vec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string signature = 11;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Generated from protobuf field <code>string signature = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature = $var;

        return $this;
    }

}
