<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GEKHFPIGFBI (6528)
 *
 * Generated from protobuf message <code>WolfBroGameUseBulletCsReq</code>
 */
class WolfBroGameUseBulletCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 assist_monster_entity_id_list = 14;</code>
     */
    private $assist_monster_entity_id_list;
    /**
     * Generated from protobuf field <code>.Vector iikmhchcoge = 8;</code>
     */
    protected $iikmhchcoge = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $assist_monster_entity_id_list
     *     @type \Vector $iikmhchcoge
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 assist_monster_entity_id_list = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssistMonsterEntityIdList()
    {
        return $this->assist_monster_entity_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 assist_monster_entity_id_list = 14;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssistMonsterEntityIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->assist_monster_entity_id_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Vector iikmhchcoge = 8;</code>
     * @return \Vector|null
     */
    public function getIikmhchcoge()
    {
        return $this->iikmhchcoge;
    }

    public function hasIikmhchcoge()
    {
        return isset($this->iikmhchcoge);
    }

    public function clearIikmhchcoge()
    {
        unset($this->iikmhchcoge);
    }

    /**
     * Generated from protobuf field <code>.Vector iikmhchcoge = 8;</code>
     * @param \Vector $var
     * @return $this
     */
    public function setIikmhchcoge($var)
    {
        GPBUtil::checkMessage($var, \Vector::class);
        $this->iikmhchcoge = $var;

        return $this;
    }

}

