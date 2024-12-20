<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EvolveBuildBattleInfo</code>
 */
class EvolveBuildBattleInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 CurLevelId = 1;</code>
     */
    protected $CurLevelId = 0;
    /**
     * Generated from protobuf field <code>uint32 CurPeriod = 2;</code>
     */
    protected $CurPeriod = 0;
    /**
     * Generated from protobuf field <code>uint32 CurCoin = 3;</code>
     */
    protected $CurCoin = 0;
    /**
     * Generated from protobuf field <code>repeated .BAFDPJPGGOG WeaponSlotList = 4;</code>
     */
    private $WeaponSlotList;
    /**
     * Generated from protobuf field <code>repeated .BAFDPJPGGOG AccessorySlotList = 5;</code>
     */
    private $AccessorySlotList;
    /**
     * Generated from protobuf field <code>repeated uint32 BanGearList = 6;</code>
     */
    private $BanGearList;
    /**
     * Generated from protobuf field <code>.ANDFBODMGFK Collection = 7;</code>
     */
    protected $Collection = null;
    /**
     * Generated from protobuf field <code>repeated uint32 AllowedGearList = 8;</code>
     */
    private $AllowedGearList;
    /**
     * Generated from protobuf field <code>uint32 CurExp = 9;</code>
     */
    protected $CurExp = 0;
    /**
     * Generated from protobuf field <code>uint32 CurReroll = 10;</code>
     */
    protected $CurReroll = 0;
    /**
     * Generated from protobuf field <code>uint32 CurTreasureMissCnt = 11;</code>
     */
    protected $CurTreasureMissCnt = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 PeriodIdList = 12;</code>
     */
    private $PeriodIdList;
    /**
     * Generated from protobuf field <code>uint32 CurGearLostCnt = 13;</code>
     */
    protected $CurGearLostCnt = 0;
    /**
     * Generated from protobuf field <code>uint32 CurWave = 14;</code>
     */
    protected $CurWave = 0;
    /**
     * Generated from protobuf field <code>bool IsUnlockGearReroll = 15;</code>
     */
    protected $IsUnlockGearReroll = false;
    /**
     * Generated from protobuf field <code>bool IsUnlockGearBan = 16;</code>
     */
    protected $IsUnlockGearBan = false;
    /**
     * Generated from protobuf field <code>repeated .AKPEJLAIBLA CardList = 17;</code>
     */
    private $CardList;
    /**
     * Generated from protobuf field <code>repeated .EvolveBuildGearDamageInfo GearDamageList = 18;</code>
     */
    private $GearDamageList;
    /**
     * Generated from protobuf field <code>repeated uint32 StatParams = 19;</code>
     */
    private $StatParams;
    /**
     * Generated from protobuf field <code>bool IsGiveup = 20;</code>
     */
    protected $IsGiveup = false;
    /**
     * Generated from protobuf field <code>uint32 CurUnusedRoundCnt = 21;</code>
     */
    protected $CurUnusedRoundCnt = 0;
    /**
     * Generated from protobuf field <code>.OJGEIANDJOE StatLogInfo = 22;</code>
     */
    protected $StatLogInfo = null;
    /**
     * Generated from protobuf field <code>uint32 PeriodFirstRandomSeed = 23;</code>
     */
    protected $PeriodFirstRandomSeed = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CurLevelId
     *     @type int $CurPeriod
     *     @type int $CurCoin
     *     @type array<\BAFDPJPGGOG>|\Google\Protobuf\Internal\RepeatedField $WeaponSlotList
     *     @type array<\BAFDPJPGGOG>|\Google\Protobuf\Internal\RepeatedField $AccessorySlotList
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $BanGearList
     *     @type \ANDFBODMGFK $Collection
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $AllowedGearList
     *     @type int $CurExp
     *     @type int $CurReroll
     *     @type int $CurTreasureMissCnt
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $PeriodIdList
     *     @type int $CurGearLostCnt
     *     @type int $CurWave
     *     @type bool $IsUnlockGearReroll
     *     @type bool $IsUnlockGearBan
     *     @type array<\AKPEJLAIBLA>|\Google\Protobuf\Internal\RepeatedField $CardList
     *     @type array<\EvolveBuildGearDamageInfo>|\Google\Protobuf\Internal\RepeatedField $GearDamageList
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $StatParams
     *     @type bool $IsGiveup
     *     @type int $CurUnusedRoundCnt
     *     @type \OJGEIANDJOE $StatLogInfo
     *     @type int $PeriodFirstRandomSeed
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 CurLevelId = 1;</code>
     * @return int
     */
    public function getCurLevelId()
    {
        return $this->CurLevelId;
    }

    /**
     * Generated from protobuf field <code>uint32 CurLevelId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCurLevelId($var)
    {
        GPBUtil::checkUint32($var);
        $this->CurLevelId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 CurPeriod = 2;</code>
     * @return int
     */
    public function getCurPeriod()
    {
        return $this->CurPeriod;
    }

    /**
     * Generated from protobuf field <code>uint32 CurPeriod = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCurPeriod($var)
    {
        GPBUtil::checkUint32($var);
        $this->CurPeriod = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 CurCoin = 3;</code>
     * @return int
     */
    public function getCurCoin()
    {
        return $this->CurCoin;
    }

    /**
     * Generated from protobuf field <code>uint32 CurCoin = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCurCoin($var)
    {
        GPBUtil::checkUint32($var);
        $this->CurCoin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .BAFDPJPGGOG WeaponSlotList = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWeaponSlotList()
    {
        return $this->WeaponSlotList;
    }

    /**
     * Generated from protobuf field <code>repeated .BAFDPJPGGOG WeaponSlotList = 4;</code>
     * @param array<\BAFDPJPGGOG>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWeaponSlotList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BAFDPJPGGOG::class);
        $this->WeaponSlotList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .BAFDPJPGGOG AccessorySlotList = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccessorySlotList()
    {
        return $this->AccessorySlotList;
    }

    /**
     * Generated from protobuf field <code>repeated .BAFDPJPGGOG AccessorySlotList = 5;</code>
     * @param array<\BAFDPJPGGOG>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccessorySlotList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BAFDPJPGGOG::class);
        $this->AccessorySlotList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 BanGearList = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBanGearList()
    {
        return $this->BanGearList;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 BanGearList = 6;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBanGearList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->BanGearList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ANDFBODMGFK Collection = 7;</code>
     * @return \ANDFBODMGFK|null
     */
    public function getCollection()
    {
        return $this->Collection;
    }

    public function hasCollection()
    {
        return isset($this->Collection);
    }

    public function clearCollection()
    {
        unset($this->Collection);
    }

    /**
     * Generated from protobuf field <code>.ANDFBODMGFK Collection = 7;</code>
     * @param \ANDFBODMGFK $var
     * @return $this
     */
    public function setCollection($var)
    {
        GPBUtil::checkMessage($var, \ANDFBODMGFK::class);
        $this->Collection = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 AllowedGearList = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedGearList()
    {
        return $this->AllowedGearList;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 AllowedGearList = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedGearList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->AllowedGearList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 CurExp = 9;</code>
     * @return int
     */
    public function getCurExp()
    {
        return $this->CurExp;
    }

    /**
     * Generated from protobuf field <code>uint32 CurExp = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setCurExp($var)
    {
        GPBUtil::checkUint32($var);
        $this->CurExp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 CurReroll = 10;</code>
     * @return int
     */
    public function getCurReroll()
    {
        return $this->CurReroll;
    }

    /**
     * Generated from protobuf field <code>uint32 CurReroll = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setCurReroll($var)
    {
        GPBUtil::checkUint32($var);
        $this->CurReroll = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 CurTreasureMissCnt = 11;</code>
     * @return int
     */
    public function getCurTreasureMissCnt()
    {
        return $this->CurTreasureMissCnt;
    }

    /**
     * Generated from protobuf field <code>uint32 CurTreasureMissCnt = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setCurTreasureMissCnt($var)
    {
        GPBUtil::checkUint32($var);
        $this->CurTreasureMissCnt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 PeriodIdList = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPeriodIdList()
    {
        return $this->PeriodIdList;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 PeriodIdList = 12;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPeriodIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->PeriodIdList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 CurGearLostCnt = 13;</code>
     * @return int
     */
    public function getCurGearLostCnt()
    {
        return $this->CurGearLostCnt;
    }

    /**
     * Generated from protobuf field <code>uint32 CurGearLostCnt = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setCurGearLostCnt($var)
    {
        GPBUtil::checkUint32($var);
        $this->CurGearLostCnt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 CurWave = 14;</code>
     * @return int
     */
    public function getCurWave()
    {
        return $this->CurWave;
    }

    /**
     * Generated from protobuf field <code>uint32 CurWave = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setCurWave($var)
    {
        GPBUtil::checkUint32($var);
        $this->CurWave = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsUnlockGearReroll = 15;</code>
     * @return bool
     */
    public function getIsUnlockGearReroll()
    {
        return $this->IsUnlockGearReroll;
    }

    /**
     * Generated from protobuf field <code>bool IsUnlockGearReroll = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsUnlockGearReroll($var)
    {
        GPBUtil::checkBool($var);
        $this->IsUnlockGearReroll = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsUnlockGearBan = 16;</code>
     * @return bool
     */
    public function getIsUnlockGearBan()
    {
        return $this->IsUnlockGearBan;
    }

    /**
     * Generated from protobuf field <code>bool IsUnlockGearBan = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsUnlockGearBan($var)
    {
        GPBUtil::checkBool($var);
        $this->IsUnlockGearBan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .AKPEJLAIBLA CardList = 17;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCardList()
    {
        return $this->CardList;
    }

    /**
     * Generated from protobuf field <code>repeated .AKPEJLAIBLA CardList = 17;</code>
     * @param array<\AKPEJLAIBLA>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCardList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AKPEJLAIBLA::class);
        $this->CardList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .EvolveBuildGearDamageInfo GearDamageList = 18;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGearDamageList()
    {
        return $this->GearDamageList;
    }

    /**
     * Generated from protobuf field <code>repeated .EvolveBuildGearDamageInfo GearDamageList = 18;</code>
     * @param array<\EvolveBuildGearDamageInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGearDamageList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \EvolveBuildGearDamageInfo::class);
        $this->GearDamageList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 StatParams = 19;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatParams()
    {
        return $this->StatParams;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 StatParams = 19;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatParams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->StatParams = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsGiveup = 20;</code>
     * @return bool
     */
    public function getIsGiveup()
    {
        return $this->IsGiveup;
    }

    /**
     * Generated from protobuf field <code>bool IsGiveup = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsGiveup($var)
    {
        GPBUtil::checkBool($var);
        $this->IsGiveup = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 CurUnusedRoundCnt = 21;</code>
     * @return int
     */
    public function getCurUnusedRoundCnt()
    {
        return $this->CurUnusedRoundCnt;
    }

    /**
     * Generated from protobuf field <code>uint32 CurUnusedRoundCnt = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setCurUnusedRoundCnt($var)
    {
        GPBUtil::checkUint32($var);
        $this->CurUnusedRoundCnt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.OJGEIANDJOE StatLogInfo = 22;</code>
     * @return \OJGEIANDJOE|null
     */
    public function getStatLogInfo()
    {
        return $this->StatLogInfo;
    }

    public function hasStatLogInfo()
    {
        return isset($this->StatLogInfo);
    }

    public function clearStatLogInfo()
    {
        unset($this->StatLogInfo);
    }

    /**
     * Generated from protobuf field <code>.OJGEIANDJOE StatLogInfo = 22;</code>
     * @param \OJGEIANDJOE $var
     * @return $this
     */
    public function setStatLogInfo($var)
    {
        GPBUtil::checkMessage($var, \OJGEIANDJOE::class);
        $this->StatLogInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PeriodFirstRandomSeed = 23;</code>
     * @return int
     */
    public function getPeriodFirstRandomSeed()
    {
        return $this->PeriodFirstRandomSeed;
    }

    /**
     * Generated from protobuf field <code>uint32 PeriodFirstRandomSeed = 23;</code>
     * @param int $var
     * @return $this
     */
    public function setPeriodFirstRandomSeed($var)
    {
        GPBUtil::checkUint32($var);
        $this->PeriodFirstRandomSeed = $var;

        return $this;
    }

}
