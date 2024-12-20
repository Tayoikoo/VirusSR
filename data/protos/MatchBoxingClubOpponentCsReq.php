<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GBOHLOLOFBD (4284)
 *
 * Generated from protobuf message <code>MatchBoxingClubOpponentCsReq</code>
 */
class MatchBoxingClubOpponentCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 avatar_list = 6;</code>
     */
    private $avatar_list;
    /**
     * Generated from protobuf field <code>repeated .NJMGKBHDGBD liiamdgkpaf = 8;</code>
     */
    private $liiamdgkpaf;
    /**
     * Generated from protobuf field <code>uint32 challenge_id = 12;</code>
     */
    protected $challenge_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $avatar_list
     *     @type array<\NJMGKBHDGBD>|\Google\Protobuf\Internal\RepeatedField $liiamdgkpaf
     *     @type int $challenge_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 avatar_list = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarList()
    {
        return $this->avatar_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 avatar_list = 6;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->avatar_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .NJMGKBHDGBD liiamdgkpaf = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLiiamdgkpaf()
    {
        return $this->liiamdgkpaf;
    }

    /**
     * Generated from protobuf field <code>repeated .NJMGKBHDGBD liiamdgkpaf = 8;</code>
     * @param array<\NJMGKBHDGBD>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLiiamdgkpaf($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \NJMGKBHDGBD::class);
        $this->liiamdgkpaf = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_id = 12;</code>
     * @return int
     */
    public function getChallengeId()
    {
        return $this->challenge_id;
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_id = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setChallengeId($var)
    {
        GPBUtil::checkUint32($var);
        $this->challenge_id = $var;

        return $this;
    }

}
