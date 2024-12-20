<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EGAFMMCGFMA (336)
 *
 * Generated from protobuf message <code>GetAvatarDataCsReq</code>
 */
class GetAvatarDataCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 base_avatar_id_list = 4;</code>
     */
    private $base_avatar_id_list;
    /**
     * Generated from protobuf field <code>bool is_get_all = 3;</code>
     */
    protected $is_get_all = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $base_avatar_id_list
     *     @type bool $is_get_all
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
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

    /**
     * Generated from protobuf field <code>bool is_get_all = 3;</code>
     * @return bool
     */
    public function getIsGetAll()
    {
        return $this->is_get_all;
    }

    /**
     * Generated from protobuf field <code>bool is_get_all = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsGetAll($var)
    {
        GPBUtil::checkBool($var);
        $this->is_get_all = $var;

        return $this;
    }

}
