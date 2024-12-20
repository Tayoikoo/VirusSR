<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BattleRogueMagicItemInfo</code>
 */
class BattleRogueMagicItemInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.BattleRogueMagicRoundCount battle_round_count = 1;</code>
     */
    protected $battle_round_count = null;
    /**
     * Generated from protobuf field <code>repeated .BattleRogueMagicScepter battle_scepter_list = 2;</code>
     */
    private $battle_scepter_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \BattleRogueMagicRoundCount $battle_round_count
     *     @type array<\BattleRogueMagicScepter>|\Google\Protobuf\Internal\RepeatedField $battle_scepter_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.BattleRogueMagicRoundCount battle_round_count = 1;</code>
     * @return \BattleRogueMagicRoundCount|null
     */
    public function getBattleRoundCount()
    {
        return $this->battle_round_count;
    }

    public function hasBattleRoundCount()
    {
        return isset($this->battle_round_count);
    }

    public function clearBattleRoundCount()
    {
        unset($this->battle_round_count);
    }

    /**
     * Generated from protobuf field <code>.BattleRogueMagicRoundCount battle_round_count = 1;</code>
     * @param \BattleRogueMagicRoundCount $var
     * @return $this
     */
    public function setBattleRoundCount($var)
    {
        GPBUtil::checkMessage($var, \BattleRogueMagicRoundCount::class);
        $this->battle_round_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .BattleRogueMagicScepter battle_scepter_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBattleScepterList()
    {
        return $this->battle_scepter_list;
    }

    /**
     * Generated from protobuf field <code>repeated .BattleRogueMagicScepter battle_scepter_list = 2;</code>
     * @param array<\BattleRogueMagicScepter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBattleScepterList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BattleRogueMagicScepter::class);
        $this->battle_scepter_list = $arr;

        return $this;
    }

}

