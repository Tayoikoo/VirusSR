<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ODHCECCPMBF (6540)
 *
 * Generated from protobuf message <code>WolfBroGameExplodeMonsterCsReq</code>
 */
class WolfBroGameExplodeMonsterCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 assist_monster_entity_id_list = 6;</code>
     */
    private $assist_monster_entity_id_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $assist_monster_entity_id_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 assist_monster_entity_id_list = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssistMonsterEntityIdList()
    {
        return $this->assist_monster_entity_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 assist_monster_entity_id_list = 6;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssistMonsterEntityIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->assist_monster_entity_id_list = $arr;

        return $this;
    }

}

