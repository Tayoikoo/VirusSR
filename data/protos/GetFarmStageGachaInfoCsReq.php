<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CDNMHFOMNIG (1384)
 *
 * Generated from protobuf message <code>GetFarmStageGachaInfoCsReq</code>
 */
class GetFarmStageGachaInfoCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 farm_stage_gacha_id_list = 2;</code>
     */
    private $farm_stage_gacha_id_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $farm_stage_gacha_id_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 farm_stage_gacha_id_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFarmStageGachaIdList()
    {
        return $this->farm_stage_gacha_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 farm_stage_gacha_id_list = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFarmStageGachaIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->farm_stage_gacha_id_list = $arr;

        return $this;
    }

}

