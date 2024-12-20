<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BMPMEDHEHJE (2692)
 *
 * Generated from protobuf message <code>GetTrialActivityDataScRsp</code>
 */
class GetTrialActivityDataScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 activity_stage_id = 5;</code>
     */
    protected $activity_stage_id = 0;
    /**
     * Generated from protobuf field <code>repeated .TrialActivityInfo trial_activity_info_list = 13;</code>
     */
    private $trial_activity_info_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $activity_stage_id
     *     @type array<\TrialActivityInfo>|\Google\Protobuf\Internal\RepeatedField $trial_activity_info_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
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
     * Generated from protobuf field <code>uint32 activity_stage_id = 5;</code>
     * @return int
     */
    public function getActivityStageId()
    {
        return $this->activity_stage_id;
    }

    /**
     * Generated from protobuf field <code>uint32 activity_stage_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setActivityStageId($var)
    {
        GPBUtil::checkUint32($var);
        $this->activity_stage_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .TrialActivityInfo trial_activity_info_list = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrialActivityInfoList()
    {
        return $this->trial_activity_info_list;
    }

    /**
     * Generated from protobuf field <code>repeated .TrialActivityInfo trial_activity_info_list = 13;</code>
     * @param array<\TrialActivityInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrialActivityInfoList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \TrialActivityInfo::class);
        $this->trial_activity_info_list = $arr;

        return $this;
    }

}

