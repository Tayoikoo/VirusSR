<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BMBPBHMOABJ</code>
 */
class BMBPBHMOABJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ljcckmkcjhh = 2;</code>
     */
    protected $ljcckmkcjhh = 0;
    /**
     * Generated from protobuf field <code>repeated .RogueAdventureRoomGameplayWolfGunTarget battle_target_list = 10;</code>
     */
    private $battle_target_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ljcckmkcjhh
     *     @type array<\RogueAdventureRoomGameplayWolfGunTarget>|\Google\Protobuf\Internal\RepeatedField $battle_target_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ljcckmkcjhh = 2;</code>
     * @return int
     */
    public function getLjcckmkcjhh()
    {
        return $this->ljcckmkcjhh;
    }

    /**
     * Generated from protobuf field <code>uint32 ljcckmkcjhh = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLjcckmkcjhh($var)
    {
        GPBUtil::checkUint32($var);
        $this->ljcckmkcjhh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueAdventureRoomGameplayWolfGunTarget battle_target_list = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBattleTargetList()
    {
        return $this->battle_target_list;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueAdventureRoomGameplayWolfGunTarget battle_target_list = 10;</code>
     * @param array<\RogueAdventureRoomGameplayWolfGunTarget>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBattleTargetList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RogueAdventureRoomGameplayWolfGunTarget::class);
        $this->battle_target_list = $arr;

        return $this;
    }

}
