<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GBOGACDAJNL (1489)
 *
 * Generated from protobuf message <code>EnteredSceneChangeScNotify</code>
 */
class EnteredSceneChangeScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .EnteredSceneInfo entered_scene_info_list = 12;</code>
     */
    private $entered_scene_info_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\EnteredSceneInfo>|\Google\Protobuf\Internal\RepeatedField $entered_scene_info_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .EnteredSceneInfo entered_scene_info_list = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnteredSceneInfoList()
    {
        return $this->entered_scene_info_list;
    }

    /**
     * Generated from protobuf field <code>repeated .EnteredSceneInfo entered_scene_info_list = 12;</code>
     * @param array<\EnteredSceneInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnteredSceneInfoList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \EnteredSceneInfo::class);
        $this->entered_scene_info_list = $arr;

        return $this;
    }

}

