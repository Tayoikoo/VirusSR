<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JMOIJNKFBCF (2236)
 *
 * Generated from protobuf message <code>StartRaidCsReq</code>
 */
class StartRaidCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 prop_entity_id = 1;</code>
     */
    protected $prop_entity_id = 0;
    /**
     * Generated from protobuf field <code>uint32 is_save = 11;</code>
     */
    protected $is_save = 0;
    /**
     * Generated from protobuf field <code>uint32 world_level = 2;</code>
     */
    protected $world_level = 0;
    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 12;</code>
     */
    protected $nbljpgfhdfi = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 avatar_list = 7;</code>
     */
    private $avatar_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $prop_entity_id
     *     @type int $is_save
     *     @type int $world_level
     *     @type int $nbljpgfhdfi
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $avatar_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 prop_entity_id = 1;</code>
     * @return int
     */
    public function getPropEntityId()
    {
        return $this->prop_entity_id;
    }

    /**
     * Generated from protobuf field <code>uint32 prop_entity_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPropEntityId($var)
    {
        GPBUtil::checkUint32($var);
        $this->prop_entity_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 is_save = 11;</code>
     * @return int
     */
    public function getIsSave()
    {
        return $this->is_save;
    }

    /**
     * Generated from protobuf field <code>uint32 is_save = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setIsSave($var)
    {
        GPBUtil::checkUint32($var);
        $this->is_save = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 2;</code>
     * @return int
     */
    public function getWorldLevel()
    {
        return $this->world_level;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setWorldLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->world_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 12;</code>
     * @return int
     */
    public function getNbljpgfhdfi()
    {
        return $this->nbljpgfhdfi;
    }

    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setNbljpgfhdfi($var)
    {
        GPBUtil::checkUint32($var);
        $this->nbljpgfhdfi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 avatar_list = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarList()
    {
        return $this->avatar_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 avatar_list = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->avatar_list = $arr;

        return $this;
    }

}
