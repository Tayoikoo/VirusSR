<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * INFDFJBHMND (1727)
 *
 * Generated from protobuf message <code>StartChallengeScRsp</code>
 */
class StartChallengeScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .LineupInfo lineup_list = 1;</code>
     */
    private $lineup_list;
    /**
     * Generated from protobuf field <code>.ChallengeInfo challenge_info = 12;</code>
     */
    protected $challenge_info = null;
    /**
     * Generated from protobuf field <code>.ChallengeExtInfo ext_info = 2;</code>
     */
    protected $ext_info = null;
    /**
     * Generated from protobuf field <code>.SceneInfo scene = 8;</code>
     */
    protected $scene = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type array<\LineupInfo>|\Google\Protobuf\Internal\RepeatedField $lineup_list
     *     @type \ChallengeInfo $challenge_info
     *     @type \ChallengeExtInfo $ext_info
     *     @type \SceneInfo $scene
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
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
     * Generated from protobuf field <code>repeated .LineupInfo lineup_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLineupList()
    {
        return $this->lineup_list;
    }

    /**
     * Generated from protobuf field <code>repeated .LineupInfo lineup_list = 1;</code>
     * @param array<\LineupInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLineupList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \LineupInfo::class);
        $this->lineup_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ChallengeInfo challenge_info = 12;</code>
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
     * Generated from protobuf field <code>.ChallengeInfo challenge_info = 12;</code>
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
     * Generated from protobuf field <code>.ChallengeExtInfo ext_info = 2;</code>
     * @return \ChallengeExtInfo|null
     */
    public function getExtInfo()
    {
        return $this->ext_info;
    }

    public function hasExtInfo()
    {
        return isset($this->ext_info);
    }

    public function clearExtInfo()
    {
        unset($this->ext_info);
    }

    /**
     * Generated from protobuf field <code>.ChallengeExtInfo ext_info = 2;</code>
     * @param \ChallengeExtInfo $var
     * @return $this
     */
    public function setExtInfo($var)
    {
        GPBUtil::checkMessage($var, \ChallengeExtInfo::class);
        $this->ext_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.SceneInfo scene = 8;</code>
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
     * Generated from protobuf field <code>.SceneInfo scene = 8;</code>
     * @param \SceneInfo $var
     * @return $this
     */
    public function setScene($var)
    {
        GPBUtil::checkMessage($var, \SceneInfo::class);
        $this->scene = $var;

        return $this;
    }

}
