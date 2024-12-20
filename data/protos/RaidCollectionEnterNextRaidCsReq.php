<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OLOHGCCGNAI (6943)
 *
 * Generated from protobuf message <code>RaidCollectionEnterNextRaidCsReq</code>
 */
class RaidCollectionEnterNextRaidCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 avatar_list = 7;</code>
     */
    private $avatar_list;
    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 8;</code>
     */
    protected $nbljpgfhdfi = 0;
    /**
     * Generated from protobuf field <code>uint32 world_level = 5;</code>
     */
    protected $world_level = 0;
    /**
     * Generated from protobuf field <code>uint32 is_save = 14;</code>
     */
    protected $is_save = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $avatar_list
     *     @type int $nbljpgfhdfi
     *     @type int $world_level
     *     @type int $is_save
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
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

    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 8;</code>
     * @return int
     */
    public function getNbljpgfhdfi()
    {
        return $this->nbljpgfhdfi;
    }

    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 8;</code>
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
     * Generated from protobuf field <code>uint32 world_level = 5;</code>
     * @return int
     */
    public function getWorldLevel()
    {
        return $this->world_level;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 5;</code>
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
     * Generated from protobuf field <code>uint32 is_save = 14;</code>
     * @return int
     */
    public function getIsSave()
    {
        return $this->is_save;
    }

    /**
     * Generated from protobuf field <code>uint32 is_save = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setIsSave($var)
    {
        GPBUtil::checkUint32($var);
        $this->is_save = $var;

        return $this;
    }

}

