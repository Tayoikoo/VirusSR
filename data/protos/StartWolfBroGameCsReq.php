<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ACJLPNNNBKK (6512)
 *
 * Generated from protobuf message <code>StartWolfBroGameCsReq</code>
 */
class StartWolfBroGameCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.MotionInfo motion = 3;</code>
     */
    protected $motion = null;
    /**
     * Generated from protobuf field <code>bool fcggbomjjoa = 15;</code>
     */
    protected $fcggbomjjoa = false;
    /**
     * Generated from protobuf field <code>.GroupStateInfo group_state_info = 5;</code>
     */
    protected $group_state_info = null;
    /**
     * Generated from protobuf field <code>uint32 id = 10;</code>
     */
    protected $id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MotionInfo $motion
     *     @type bool $fcggbomjjoa
     *     @type \GroupStateInfo $group_state_info
     *     @type int $id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.MotionInfo motion = 3;</code>
     * @return \MotionInfo|null
     */
    public function getMotion()
    {
        return $this->motion;
    }

    public function hasMotion()
    {
        return isset($this->motion);
    }

    public function clearMotion()
    {
        unset($this->motion);
    }

    /**
     * Generated from protobuf field <code>.MotionInfo motion = 3;</code>
     * @param \MotionInfo $var
     * @return $this
     */
    public function setMotion($var)
    {
        GPBUtil::checkMessage($var, \MotionInfo::class);
        $this->motion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool fcggbomjjoa = 15;</code>
     * @return bool
     */
    public function getFcggbomjjoa()
    {
        return $this->fcggbomjjoa;
    }

    /**
     * Generated from protobuf field <code>bool fcggbomjjoa = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setFcggbomjjoa($var)
    {
        GPBUtil::checkBool($var);
        $this->fcggbomjjoa = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GroupStateInfo group_state_info = 5;</code>
     * @return \GroupStateInfo|null
     */
    public function getGroupStateInfo()
    {
        return $this->group_state_info;
    }

    public function hasGroupStateInfo()
    {
        return isset($this->group_state_info);
    }

    public function clearGroupStateInfo()
    {
        unset($this->group_state_info);
    }

    /**
     * Generated from protobuf field <code>.GroupStateInfo group_state_info = 5;</code>
     * @param \GroupStateInfo $var
     * @return $this
     */
    public function setGroupStateInfo($var)
    {
        GPBUtil::checkMessage($var, \GroupStateInfo::class);
        $this->group_state_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 10;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

}

