<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DNMKLJPHHBG (7003)
 *
 * Generated from protobuf message <code>GetMbtiReportScRsp</code>
 */
class GetMbtiReportScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .PBOIJFBEFFB jeimcaicclf = 4;</code>
     */
    private $jeimcaicclf;
    /**
     * Generated from protobuf field <code>bool palkhghnfbm = 7;</code>
     */
    protected $palkhghnfbm = false;
    /**
     * Generated from protobuf field <code>repeated .DPLPMBFKIAL lmkdkjecngg = 6;</code>
     */
    private $lmkdkjecngg;
    /**
     * Generated from protobuf field <code>uint32 progress = 5;</code>
     */
    protected $progress = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>int32 kgighdjlhdh = 15;</code>
     */
    protected $kgighdjlhdh = 0;
    /**
     * Generated from protobuf field <code>bool is_taken_reward = 13;</code>
     */
    protected $is_taken_reward = false;
    /**
     * Generated from protobuf field <code>int32 gchiehlpnhc = 12;</code>
     */
    protected $gchiehlpnhc = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\PBOIJFBEFFB>|\Google\Protobuf\Internal\RepeatedField $jeimcaicclf
     *     @type bool $palkhghnfbm
     *     @type array<\DPLPMBFKIAL>|\Google\Protobuf\Internal\RepeatedField $lmkdkjecngg
     *     @type int $progress
     *     @type int $retcode
     *     @type int $kgighdjlhdh
     *     @type bool $is_taken_reward
     *     @type int $gchiehlpnhc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .PBOIJFBEFFB jeimcaicclf = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJeimcaicclf()
    {
        return $this->jeimcaicclf;
    }

    /**
     * Generated from protobuf field <code>repeated .PBOIJFBEFFB jeimcaicclf = 4;</code>
     * @param array<\PBOIJFBEFFB>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJeimcaicclf($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \PBOIJFBEFFB::class);
        $this->jeimcaicclf = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool palkhghnfbm = 7;</code>
     * @return bool
     */
    public function getPalkhghnfbm()
    {
        return $this->palkhghnfbm;
    }

    /**
     * Generated from protobuf field <code>bool palkhghnfbm = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setPalkhghnfbm($var)
    {
        GPBUtil::checkBool($var);
        $this->palkhghnfbm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .DPLPMBFKIAL lmkdkjecngg = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLmkdkjecngg()
    {
        return $this->lmkdkjecngg;
    }

    /**
     * Generated from protobuf field <code>repeated .DPLPMBFKIAL lmkdkjecngg = 6;</code>
     * @param array<\DPLPMBFKIAL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLmkdkjecngg($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \DPLPMBFKIAL::class);
        $this->lmkdkjecngg = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 progress = 5;</code>
     * @return int
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Generated from protobuf field <code>uint32 progress = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkUint32($var);
        $this->progress = $var;

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
     * Generated from protobuf field <code>int32 kgighdjlhdh = 15;</code>
     * @return int
     */
    public function getKgighdjlhdh()
    {
        return $this->kgighdjlhdh;
    }

    /**
     * Generated from protobuf field <code>int32 kgighdjlhdh = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setKgighdjlhdh($var)
    {
        GPBUtil::checkInt32($var);
        $this->kgighdjlhdh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_taken_reward = 13;</code>
     * @return bool
     */
    public function getIsTakenReward()
    {
        return $this->is_taken_reward;
    }

    /**
     * Generated from protobuf field <code>bool is_taken_reward = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsTakenReward($var)
    {
        GPBUtil::checkBool($var);
        $this->is_taken_reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 gchiehlpnhc = 12;</code>
     * @return int
     */
    public function getGchiehlpnhc()
    {
        return $this->gchiehlpnhc;
    }

    /**
     * Generated from protobuf field <code>int32 gchiehlpnhc = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setGchiehlpnhc($var)
    {
        GPBUtil::checkInt32($var);
        $this->gchiehlpnhc = $var;

        return $this;
    }

}

