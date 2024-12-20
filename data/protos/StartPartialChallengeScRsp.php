<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GNMFHDJAHEG (1707)
 *
 * Generated from protobuf message <code>StartPartialChallengeScRsp</code>
 */
class StartPartialChallengeScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ChallengeInfo challenge_info = 8;</code>
     */
    protected $challenge_info = null;
    /**
     * Generated from protobuf field <code>.SceneInfo scene = 13;</code>
     */
    protected $scene = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.LineupInfo lineup = 9;</code>
     */
    protected $lineup = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ChallengeInfo $challenge_info
     *     @type \SceneInfo $scene
     *     @type int $retcode
     *     @type \LineupInfo $lineup
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ChallengeInfo challenge_info = 8;</code>
     * @return \ChallengeInfo|null
     */
    public function getChallengeInfo()
    {
        return $this->challenge_info;
    }

    public function hasChallengeInfo()
    {
        return isset($this->challenge_info);
    }

    public function clearChallengeInfo()
    {
        unset($this->challenge_info);
    }

    /**
     * Generated from protobuf field <code>.ChallengeInfo challenge_info = 8;</code>
     * @param \ChallengeInfo $var
     * @return $this
     */
    public function setChallengeInfo($var)
    {
        GPBUtil::checkMessage($var, \ChallengeInfo::class);
        $this->challenge_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.SceneInfo scene = 13;</code>
     * @return \SceneInfo|null
     */
    public function getScene()
    {
        return $this->scene;
    }

    public function hasScene()
    {
        return isset($this->scene);
    }

    public function clearScene()
    {
        unset($this->scene);
    }

    /**
     * Generated from protobuf field <code>.SceneInfo scene = 13;</code>
     * @param \SceneInfo $var
     * @return $this
     */
    public function setScene($var)
    {
        GPBUtil::checkMessage($var, \SceneInfo::class);
        $this->scene = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
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
     * Generated from protobuf field <code>.LineupInfo lineup = 9;</code>
     * @return \LineupInfo|null
     */
    public function getLineup()
    {
        return $this->lineup;
    }

    public function hasLineup()
    {
        return isset($this->lineup);
    }

    public function clearLineup()
    {
        unset($this->lineup);
    }

    /**
     * Generated from protobuf field <code>.LineupInfo lineup = 9;</code>
     * @param \LineupInfo $var
     * @return $this
     */
    public function setLineup($var)
    {
        GPBUtil::checkMessage($var, \LineupInfo::class);
        $this->lineup = $var;

        return $this;
    }

}

