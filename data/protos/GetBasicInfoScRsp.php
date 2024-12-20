<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetBasicInfoScRsp (100)
 *
 * Generated from protobuf message <code>GetBasicInfoScRsp</code>
 */
class GetBasicInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 WeekCocoonFinishedCount = 10;</code>
     */
    protected $WeekCocoonFinishedCount = 0;
    /**
     * Generated from protobuf field <code>uint32 Gender = 14;</code>
     */
    protected $Gender = 0;
    /**
     * Generated from protobuf field <code>int64 LastSetNicknameTime = 6;</code>
     */
    protected $LastSetNicknameTime = 0;
    /**
     * Generated from protobuf field <code>uint32 CurDay = 4;</code>
     */
    protected $CurDay = 0;
    /**
     * Generated from protobuf field <code>.PlayerSettingInfo PlayerSettingInfo = 15;</code>
     */
    protected $PlayerSettingInfo = null;
    /**
     * Generated from protobuf field <code>int64 NextRecoverTime = 3;</code>
     */
    protected $NextRecoverTime = 0;
    /**
     * Generated from protobuf field <code>bool IsGenderSet = 8;</code>
     */
    protected $IsGenderSet = false;
    /**
     * Generated from protobuf field <code>uint32 GameplayBirthday = 5;</code>
     */
    protected $GameplayBirthday = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 ExchangeTimes = 1;</code>
     */
    protected $ExchangeTimes = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $WeekCocoonFinishedCount
     *     @type int $Gender
     *     @type int|string $LastSetNicknameTime
     *     @type int $CurDay
     *     @type \PlayerSettingInfo $PlayerSettingInfo
     *     @type int|string $NextRecoverTime
     *     @type bool $IsGenderSet
     *     @type int $GameplayBirthday
     *     @type int $retcode
     *     @type int $ExchangeTimes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 WeekCocoonFinishedCount = 10;</code>
     * @return int
     */
    public function getWeekCocoonFinishedCount()
    {
        return $this->WeekCocoonFinishedCount;
    }

    /**
     * Generated from protobuf field <code>uint32 WeekCocoonFinishedCount = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setWeekCocoonFinishedCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->WeekCocoonFinishedCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Gender = 14;</code>
     * @return int
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * Generated from protobuf field <code>uint32 Gender = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkUint32($var);
        $this->Gender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 LastSetNicknameTime = 6;</code>
     * @return int|string
     */
    public function getLastSetNicknameTime()
    {
        return $this->LastSetNicknameTime;
    }

    /**
     * Generated from protobuf field <code>int64 LastSetNicknameTime = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastSetNicknameTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->LastSetNicknameTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 CurDay = 4;</code>
     * @return int
     */
    public function getCurDay()
    {
        return $this->CurDay;
    }

    /**
     * Generated from protobuf field <code>uint32 CurDay = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCurDay($var)
    {
        GPBUtil::checkUint32($var);
        $this->CurDay = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PlayerSettingInfo PlayerSettingInfo = 15;</code>
     * @return \PlayerSettingInfo|null
     */
    public function getPlayerSettingInfo()
    {
        return $this->PlayerSettingInfo;
    }

    public function hasPlayerSettingInfo()
    {
        return isset($this->PlayerSettingInfo);
    }

    public function clearPlayerSettingInfo()
    {
        unset($this->PlayerSettingInfo);
    }

    /**
     * Generated from protobuf field <code>.PlayerSettingInfo PlayerSettingInfo = 15;</code>
     * @param \PlayerSettingInfo $var
     * @return $this
     */
    public function setPlayerSettingInfo($var)
    {
        GPBUtil::checkMessage($var, \PlayerSettingInfo::class);
        $this->PlayerSettingInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 NextRecoverTime = 3;</code>
     * @return int|string
     */
    public function getNextRecoverTime()
    {
        return $this->NextRecoverTime;
    }

    /**
     * Generated from protobuf field <code>int64 NextRecoverTime = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNextRecoverTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->NextRecoverTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsGenderSet = 8;</code>
     * @return bool
     */
    public function getIsGenderSet()
    {
        return $this->IsGenderSet;
    }

    /**
     * Generated from protobuf field <code>bool IsGenderSet = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsGenderSet($var)
    {
        GPBUtil::checkBool($var);
        $this->IsGenderSet = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 GameplayBirthday = 5;</code>
     * @return int
     */
    public function getGameplayBirthday()
    {
        return $this->GameplayBirthday;
    }

    /**
     * Generated from protobuf field <code>uint32 GameplayBirthday = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGameplayBirthday($var)
    {
        GPBUtil::checkUint32($var);
        $this->GameplayBirthday = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
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
     * Generated from protobuf field <code>uint32 ExchangeTimes = 1;</code>
     * @return int
     */
    public function getExchangeTimes()
    {
        return $this->ExchangeTimes;
    }

    /**
     * Generated from protobuf field <code>uint32 ExchangeTimes = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setExchangeTimes($var)
    {
        GPBUtil::checkUint32($var);
        $this->ExchangeTimes = $var;

        return $this;
    }

}

