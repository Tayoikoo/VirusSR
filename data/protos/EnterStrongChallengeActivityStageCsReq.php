<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AAAJNGLEKJG (6684)
 *
 * Generated from protobuf message <code>EnterStrongChallengeActivityStageCsReq</code>
 */
class EnterStrongChallengeActivityStageCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 buff_list = 14;</code>
     */
    private $buff_list;
    /**
     * Generated from protobuf field <code>repeated .StrongChallengeAvatar avatar_list = 10;</code>
     */
    private $avatar_list;
    /**
     * Generated from protobuf field <code>uint32 stage_id = 12;</code>
     */
    protected $stage_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $buff_list
     *     @type array<\StrongChallengeAvatar>|\Google\Protobuf\Internal\RepeatedField $avatar_list
     *     @type int $stage_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 buff_list = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuffList()
    {
        return $this->buff_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 buff_list = 14;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuffList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->buff_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .StrongChallengeAvatar avatar_list = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarList()
    {
        return $this->avatar_list;
    }

    /**
     * Generated from protobuf field <code>repeated .StrongChallengeAvatar avatar_list = 10;</code>
     * @param array<\StrongChallengeAvatar>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \StrongChallengeAvatar::class);
        $this->avatar_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 stage_id = 12;</code>
     * @return int
     */
    public function getStageId()
    {
        return $this->stage_id;
    }

    /**
     * Generated from protobuf field <code>uint32 stage_id = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setStageId($var)
    {
        GPBUtil::checkUint32($var);
        $this->stage_id = $var;

        return $this;
    }

}
