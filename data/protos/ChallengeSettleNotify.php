<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GIKNBNHCAPO (1752)
 *
 * Generated from protobuf message <code>ChallengeSettleNotify</code>
 */
class ChallengeSettleNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 nfdjgajbmdo = 4;</code>
     */
    protected $nfdjgajbmdo = 0;
    /**
     * Generated from protobuf field <code>.EALBGFMGCEG pcnophbpgjk = 14;</code>
     */
    protected $pcnophbpgjk = null;
    /**
     * Generated from protobuf field <code>.ChallengeInfo challenge_info = 12;</code>
     */
    protected $challenge_info = null;
    /**
     * Generated from protobuf field <code>uint32 score_two = 15;</code>
     */
    protected $score_two = 0;
    /**
     * Generated from protobuf field <code>uint32 star = 1;</code>
     */
    protected $star = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 npjgdnmiblp = 8;</code>
     */
    private $npjgdnmiblp;
    /**
     * Generated from protobuf field <code>.ItemList reward = 10;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>uint32 challenge_id = 7;</code>
     */
    protected $challenge_id = 0;
    /**
     * Generated from protobuf field <code>uint32 challenge_score = 9;</code>
     */
    protected $challenge_score = 0;
    /**
     * Generated from protobuf field <code>bool is_win = 2;</code>
     */
    protected $is_win = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $nfdjgajbmdo
     *     @type \EALBGFMGCEG $pcnophbpgjk
     *     @type \ChallengeInfo $challenge_info
     *     @type int $score_two
     *     @type int $star
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $npjgdnmiblp
     *     @type \ItemList $reward
     *     @type int $challenge_id
     *     @type int $challenge_score
     *     @type bool $is_win
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 nfdjgajbmdo = 4;</code>
     * @return int
     */
    public function getNfdjgajbmdo()
    {
        return $this->nfdjgajbmdo;
    }

    /**
     * Generated from protobuf field <code>uint32 nfdjgajbmdo = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNfdjgajbmdo($var)
    {
        GPBUtil::checkUint32($var);
        $this->nfdjgajbmdo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.EALBGFMGCEG pcnophbpgjk = 14;</code>
     * @return \EALBGFMGCEG|null
     */
    public function getPcnophbpgjk()
    {
        return $this->pcnophbpgjk;
    }

    public function hasPcnophbpgjk()
    {
        return isset($this->pcnophbpgjk);
    }

    public function clearPcnophbpgjk()
    {
        unset($this->pcnophbpgjk);
    }

    /**
     * Generated from protobuf field <code>.EALBGFMGCEG pcnophbpgjk = 14;</code>
     * @param \EALBGFMGCEG $var
     * @return $this
     */
    public function setPcnophbpgjk($var)
    {
        GPBUtil::checkMessage($var, \EALBGFMGCEG::class);
        $this->pcnophbpgjk = $var;

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
     * Generated from protobuf field <code>uint32 score_two = 15;</code>
     * @return int
     */
    public function getScoreTwo()
    {
        return $this->score_two;
    }

    /**
     * Generated from protobuf field <code>uint32 score_two = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setScoreTwo($var)
    {
        GPBUtil::checkUint32($var);
        $this->score_two = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 star = 1;</code>
     * @return int
     */
    public function getStar()
    {
        return $this->star;
    }

    /**
     * Generated from protobuf field <code>uint32 star = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStar($var)
    {
        GPBUtil::checkUint32($var);
        $this->star = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 npjgdnmiblp = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNpjgdnmiblp()
    {
        return $this->npjgdnmiblp;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 npjgdnmiblp = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNpjgdnmiblp($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->npjgdnmiblp = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 10;</code>
     * @return \ItemList|null
     */
    public function getReward()
    {
        return $this->reward;
    }

    public function hasReward()
    {
        return isset($this->reward);
    }

    public function clearReward()
    {
        unset($this->reward);
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 10;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setReward($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_id = 7;</code>
     * @return int
     */
    public function getChallengeId()
    {
        return $this->challenge_id;
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setChallengeId($var)
    {
        GPBUtil::checkUint32($var);
        $this->challenge_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_score = 9;</code>
     * @return int
     */
    public function getChallengeScore()
    {
        return $this->challenge_score;
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_score = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setChallengeScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->challenge_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_win = 2;</code>
     * @return bool
     */
    public function getIsWin()
    {
        return $this->is_win;
    }

    /**
     * Generated from protobuf field <code>bool is_win = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsWin($var)
    {
        GPBUtil::checkBool($var);
        $this->is_win = $var;

        return $this;
    }

}

