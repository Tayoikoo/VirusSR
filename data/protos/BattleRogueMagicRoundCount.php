<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BattleRogueMagicRoundCount</code>
 */
class BattleRogueMagicRoundCount extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 battle_standard_round_limit = 1;</code>
     */
    protected $battle_standard_round_limit = 0;
    /**
     * Generated from protobuf field <code>uint32 battle_extra_round_limit = 2;</code>
     */
    protected $battle_extra_round_limit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $battle_standard_round_limit
     *     @type int $battle_extra_round_limit
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 battle_standard_round_limit = 1;</code>
     * @return int
     */
    public function getBattleStandardRoundLimit()
    {
        return $this->battle_standard_round_limit;
    }

    /**
     * Generated from protobuf field <code>uint32 battle_standard_round_limit = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleStandardRoundLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->battle_standard_round_limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 battle_extra_round_limit = 2;</code>
     * @return int
     */
    public function getBattleExtraRoundLimit()
    {
        return $this->battle_extra_round_limit;
    }

    /**
     * Generated from protobuf field <code>uint32 battle_extra_round_limit = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleExtraRoundLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->battle_extra_round_limit = $var;

        return $this;
    }

}

