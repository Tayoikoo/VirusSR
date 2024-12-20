<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetRaidInfoScRsp (2243)
 *
 * Generated from protobuf message <code>GetRaidInfoScRsp</code>
 */
class GetRaidInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .HMJENOAHIHE ChallengeRaidList = 5;</code>
     */
    private $ChallengeRaidList;
    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 ChallengeTakenRewardIdList = 3;</code>
     */
    private $ChallengeTakenRewardIdList;
    /**
     * Generated from protobuf field <code>repeated .PNLGMICNEKB FinishedRaidInfoList = 11;</code>
     */
    private $FinishedRaidInfoList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\HMJENOAHIHE>|\Google\Protobuf\Internal\RepeatedField $ChallengeRaidList
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $ChallengeTakenRewardIdList
     *     @type array<\PNLGMICNEKB>|\Google\Protobuf\Internal\RepeatedField $FinishedRaidInfoList
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .HMJENOAHIHE ChallengeRaidList = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChallengeRaidList()
    {
        return $this->ChallengeRaidList;
    }

    /**
     * Generated from protobuf field <code>repeated .HMJENOAHIHE ChallengeRaidList = 5;</code>
     * @param array<\HMJENOAHIHE>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChallengeRaidList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \HMJENOAHIHE::class);
        $this->ChallengeRaidList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
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
     * Generated from protobuf field <code>repeated uint32 ChallengeTakenRewardIdList = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChallengeTakenRewardIdList()
    {
        return $this->ChallengeTakenRewardIdList;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ChallengeTakenRewardIdList = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChallengeTakenRewardIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->ChallengeTakenRewardIdList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .PNLGMICNEKB FinishedRaidInfoList = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinishedRaidInfoList()
    {
        return $this->FinishedRaidInfoList;
    }

    /**
     * Generated from protobuf field <code>repeated .PNLGMICNEKB FinishedRaidInfoList = 11;</code>
     * @param array<\PNLGMICNEKB>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinishedRaidInfoList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \PNLGMICNEKB::class);
        $this->FinishedRaidInfoList = $arr;

        return $this;
    }

}

