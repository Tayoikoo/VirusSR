<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ABDOLOFFKBF (4874)
 *
 * Generated from protobuf message <code>StartAetherDivideChallengeBattleScRsp</code>
 */
class StartAetherDivideChallengeBattleScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.AetherDivideBattleInfo battle_info = 13;</code>
     */
    protected $battle_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \AetherDivideBattleInfo $battle_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AetherDivideBattleInfo battle_info = 13;</code>
     * @return \AetherDivideBattleInfo|null
     */
    public function getBattleInfo()
    {
        return $this->battle_info;
    }

    public function hasBattleInfo()
    {
        return isset($this->battle_info);
    }

    public function clearBattleInfo()
    {
        unset($this->battle_info);
    }

    /**
     * Generated from protobuf field <code>.AetherDivideBattleInfo battle_info = 13;</code>
     * @param \AetherDivideBattleInfo $var
     * @return $this
     */
    public function setBattleInfo($var)
    {
        GPBUtil::checkMessage($var, \AetherDivideBattleInfo::class);
        $this->battle_info = $var;

        return $this;
    }

}
