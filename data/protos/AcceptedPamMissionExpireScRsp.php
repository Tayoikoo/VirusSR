<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DOKCDGPELLI (4095)
 *
 * Generated from protobuf message <code>AcceptedPamMissionExpireScRsp</code>
 */
class AcceptedPamMissionExpireScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 main_mission_id = 8;</code>
     */
    protected $main_mission_id = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $main_mission_id
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 main_mission_id = 8;</code>
     * @return int
     */
    public function getMainMissionId()
    {
        return $this->main_mission_id;
    }

    /**
     * Generated from protobuf field <code>uint32 main_mission_id = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setMainMissionId($var)
    {
        GPBUtil::checkUint32($var);
        $this->main_mission_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

