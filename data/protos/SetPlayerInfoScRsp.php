<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EPBEBPLEKIA (37)
 *
 * Generated from protobuf message <code>SetPlayerInfoScRsp</code>
 */
class SetPlayerInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .MultiPathAvatarInfo cur_avatar_path_info_list = 8;</code>
     */
    private $cur_avatar_path_info_list;
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>bool is_modify = 7;</code>
     */
    protected $is_modify = false;
    /**
     * Generated from protobuf field <code>.MultiPathAvatarType cur_avatar_path = 14;</code>
     */
    protected $cur_avatar_path = 0;
    /**
     * Generated from protobuf field <code>int64 gjkemkapjal = 1;</code>
     */
    protected $gjkemkapjal = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\MultiPathAvatarInfo>|\Google\Protobuf\Internal\RepeatedField $cur_avatar_path_info_list
     *     @type int $retcode
     *     @type bool $is_modify
     *     @type int $cur_avatar_path
     *     @type int|string $gjkemkapjal
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .MultiPathAvatarInfo cur_avatar_path_info_list = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCurAvatarPathInfoList()
    {
        return $this->cur_avatar_path_info_list;
    }

    /**
     * Generated from protobuf field <code>repeated .MultiPathAvatarInfo cur_avatar_path_info_list = 8;</code>
     * @param array<\MultiPathAvatarInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCurAvatarPathInfoList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MultiPathAvatarInfo::class);
        $this->cur_avatar_path_info_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
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
     * Generated from protobuf field <code>bool is_modify = 7;</code>
     * @return bool
     */
    public function getIsModify()
    {
        return $this->is_modify;
    }

    /**
     * Generated from protobuf field <code>bool is_modify = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsModify($var)
    {
        GPBUtil::checkBool($var);
        $this->is_modify = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MultiPathAvatarType cur_avatar_path = 14;</code>
     * @return int
     */
    public function getCurAvatarPath()
    {
        return $this->cur_avatar_path;
    }

    /**
     * Generated from protobuf field <code>.MultiPathAvatarType cur_avatar_path = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setCurAvatarPath($var)
    {
        GPBUtil::checkEnum($var, \MultiPathAvatarType::class);
        $this->cur_avatar_path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 gjkemkapjal = 1;</code>
     * @return int|string
     */
    public function getGjkemkapjal()
    {
        return $this->gjkemkapjal;
    }

    /**
     * Generated from protobuf field <code>int64 gjkemkapjal = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGjkemkapjal($var)
    {
        GPBUtil::checkInt64($var);
        $this->gjkemkapjal = $var;

        return $this;
    }

}
