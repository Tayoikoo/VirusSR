<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FAFGMGHBBAK (1208)
 *
 * Generated from protobuf message <code>FinishedMissionScNotify</code>
 */
class FinishedMissionScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 finished_main_mission_id_list = 4;</code>
     */
    private $finished_main_mission_id_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $finished_main_mission_id_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 finished_main_mission_id_list = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinishedMainMissionIdList()
    {
        return $this->finished_main_mission_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 finished_main_mission_id_list = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinishedMainMissionIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->finished_main_mission_id_list = $arr;

        return $this;
    }

}

