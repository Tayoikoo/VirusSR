<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MissionStatusBySceneInfo</code>
 */
class MissionStatusBySceneInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 kckknnnlpdd = 1;</code>
     */
    private $kckknnnlpdd;
    /**
     * Generated from protobuf field <code>repeated .MainMissionCustomValue main_mission_mcv_list = 2;</code>
     */
    private $main_mission_mcv_list;
    /**
     * Generated from protobuf field <code>repeated .Mission sub_mission_status_list = 14;</code>
     */
    private $sub_mission_status_list;
    /**
     * Generated from protobuf field <code>repeated uint32 finished_main_mission_id_list = 4;</code>
     */
    private $finished_main_mission_id_list;
    /**
     * Generated from protobuf field <code>repeated uint32 aoeodfgekko = 10;</code>
     */
    private $aoeodfgekko;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $kckknnnlpdd
     *     @type array<\MainMissionCustomValue>|\Google\Protobuf\Internal\RepeatedField $main_mission_mcv_list
     *     @type array<\Mission>|\Google\Protobuf\Internal\RepeatedField $sub_mission_status_list
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $finished_main_mission_id_list
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $aoeodfgekko
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 kckknnnlpdd = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKckknnnlpdd()
    {
        return $this->kckknnnlpdd;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 kckknnnlpdd = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKckknnnlpdd($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->kckknnnlpdd = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .MainMissionCustomValue main_mission_mcv_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMainMissionMcvList()
    {
        return $this->main_mission_mcv_list;
    }

    /**
     * Generated from protobuf field <code>repeated .MainMissionCustomValue main_mission_mcv_list = 2;</code>
     * @param array<\MainMissionCustomValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMainMissionMcvList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MainMissionCustomValue::class);
        $this->main_mission_mcv_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Mission sub_mission_status_list = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubMissionStatusList()
    {
        return $this->sub_mission_status_list;
    }

    /**
     * Generated from protobuf field <code>repeated .Mission sub_mission_status_list = 14;</code>
     * @param array<\Mission>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubMissionStatusList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Mission::class);
        $this->sub_mission_status_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 finished_main_mission_id_list = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinishedMainMissionIdList()
    {
        return $this->finished_main_mission_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 finished_main_mission_id_list = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinishedMainMissionIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->finished_main_mission_id_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 aoeodfgekko = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAoeodfgekko()
    {
        return $this->aoeodfgekko;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 aoeodfgekko = 10;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAoeodfgekko($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->aoeodfgekko = $arr;

        return $this;
    }

}

