<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BattleTargetList</code>
 */
class BattleTargetList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .BattleTarget battle_target_list = 1;</code>
     */
    private $battle_target_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\BattleTarget>|\Google\Protobuf\Internal\RepeatedField $battle_target_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .BattleTarget battle_target_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBattleTargetList()
    {
        return $this->battle_target_list;
    }

    /**
     * Generated from protobuf field <code>repeated .BattleTarget battle_target_list = 1;</code>
     * @param array<\BattleTarget>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBattleTargetList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BattleTarget::class);
        $this->battle_target_list = $arr;

        return $this;
    }

}
