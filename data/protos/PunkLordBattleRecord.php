<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PunkLordBattleRecord</code>
 */
class PunkLordBattleRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 Uid = 1;</code>
     */
    protected $Uid = 0;
    /**
     * Generated from protobuf field <code>uint32 DamageHp = 2;</code>
     */
    protected $DamageHp = 0;
    /**
     * Generated from protobuf field <code>bool IsFinalHit = 3;</code>
     */
    protected $IsFinalHit = false;
    /**
     * Generated from protobuf field <code>uint32 OverKillDamageHp = 4;</code>
     */
    protected $OverKillDamageHp = 0;
    /**
     * Generated from protobuf field <code>string BattleReplayKey = 5;</code>
     */
    protected $BattleReplayKey = '';
    /**
     * Generated from protobuf field <code>repeated .PunkLordBattleAvatar AvatarList = 6;</code>
     */
    private $AvatarList;
    /**
     * Generated from protobuf field <code>uint32 AssistScore = 7;</code>
     */
    protected $AssistScore = 0;
    /**
     * Generated from protobuf field <code>uint32 DamageScore = 8;</code>
     */
    protected $DamageScore = 0;
    /**
     * Generated from protobuf field <code>uint32 FinalHitScore = 9;</code>
     */
    protected $FinalHitScore = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Uid
     *     @type int $DamageHp
     *     @type bool $IsFinalHit
     *     @type int $OverKillDamageHp
     *     @type string $BattleReplayKey
     *     @type array<\PunkLordBattleAvatar>|\Google\Protobuf\Internal\RepeatedField $AvatarList
     *     @type int $AssistScore
     *     @type int $DamageScore
     *     @type int $FinalHitScore
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 Uid = 1;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->Uid;
    }

    /**
     * Generated from protobuf field <code>uint32 Uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->Uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DamageHp = 2;</code>
     * @return int
     */
    public function getDamageHp()
    {
        return $this->DamageHp;
    }

    /**
     * Generated from protobuf field <code>uint32 DamageHp = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDamageHp($var)
    {
        GPBUtil::checkUint32($var);
        $this->DamageHp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsFinalHit = 3;</code>
     * @return bool
     */
    public function getIsFinalHit()
    {
        return $this->IsFinalHit;
    }

    /**
     * Generated from protobuf field <code>bool IsFinalHit = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFinalHit($var)
    {
        GPBUtil::checkBool($var);
        $this->IsFinalHit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OverKillDamageHp = 4;</code>
     * @return int
     */
    public function getOverKillDamageHp()
    {
        return $this->OverKillDamageHp;
    }

    /**
     * Generated from protobuf field <code>uint32 OverKillDamageHp = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setOverKillDamageHp($var)
    {
        GPBUtil::checkUint32($var);
        $this->OverKillDamageHp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string BattleReplayKey = 5;</code>
     * @return string
     */
    public function getBattleReplayKey()
    {
        return $this->BattleReplayKey;
    }

    /**
     * Generated from protobuf field <code>string BattleReplayKey = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBattleReplayKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->BattleReplayKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .PunkLordBattleAvatar AvatarList = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarList()
    {
        return $this->AvatarList;
    }

    /**
     * Generated from protobuf field <code>repeated .PunkLordBattleAvatar AvatarList = 6;</code>
     * @param array<\PunkLordBattleAvatar>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \PunkLordBattleAvatar::class);
        $this->AvatarList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AssistScore = 7;</code>
     * @return int
     */
    public function getAssistScore()
    {
        return $this->AssistScore;
    }

    /**
     * Generated from protobuf field <code>uint32 AssistScore = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setAssistScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->AssistScore = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DamageScore = 8;</code>
     * @return int
     */
    public function getDamageScore()
    {
        return $this->DamageScore;
    }

    /**
     * Generated from protobuf field <code>uint32 DamageScore = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setDamageScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->DamageScore = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 FinalHitScore = 9;</code>
     * @return int
     */
    public function getFinalHitScore()
    {
        return $this->FinalHitScore;
    }

    /**
     * Generated from protobuf field <code>uint32 FinalHitScore = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setFinalHitScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->FinalHitScore = $var;

        return $this;
    }

}

