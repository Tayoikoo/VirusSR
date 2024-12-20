<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GHHLFKBCHPC</code>
 */
class GHHLFKBCHPC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.PlayerSimpleInfo player_info = 14;</code>
     */
    protected $player_info = null;
    /**
     * Generated from protobuf field <code>repeated .ChallengeLineupList lineup_list = 8;</code>
     */
    private $lineup_list;
    /**
     * Generated from protobuf field <code>uint32 buff_two = 12;</code>
     */
    protected $buff_two = 0;
    /**
     * Generated from protobuf field <code>uint32 score_id = 13;</code>
     */
    protected $score_id = 0;
    /**
     * Generated from protobuf field <code>uint32 njldipkclbp = 7;</code>
     */
    protected $njldipkclbp = 0;
    /**
     * Generated from protobuf field <code>string remark_name = 15;</code>
     */
    protected $remark_name = '';
    /**
     * Generated from protobuf field <code>uint32 buff_one = 5;</code>
     */
    protected $buff_one = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \PlayerSimpleInfo $player_info
     *     @type array<\ChallengeLineupList>|\Google\Protobuf\Internal\RepeatedField $lineup_list
     *     @type int $buff_two
     *     @type int $score_id
     *     @type int $njldipkclbp
     *     @type string $remark_name
     *     @type int $buff_one
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.PlayerSimpleInfo player_info = 14;</code>
     * @return \PlayerSimpleInfo|null
     */
    public function getPlayerInfo()
    {
        return $this->player_info;
    }

    public function hasPlayerInfo()
    {
        return isset($this->player_info);
    }

    public function clearPlayerInfo()
    {
        unset($this->player_info);
    }

    /**
     * Generated from protobuf field <code>.PlayerSimpleInfo player_info = 14;</code>
     * @param \PlayerSimpleInfo $var
     * @return $this
     */
    public function setPlayerInfo($var)
    {
        GPBUtil::checkMessage($var, \PlayerSimpleInfo::class);
        $this->player_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ChallengeLineupList lineup_list = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLineupList()
    {
        return $this->lineup_list;
    }

    /**
     * Generated from protobuf field <code>repeated .ChallengeLineupList lineup_list = 8;</code>
     * @param array<\ChallengeLineupList>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLineupList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ChallengeLineupList::class);
        $this->lineup_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 buff_two = 12;</code>
     * @return int
     */
    public function getBuffTwo()
    {
        return $this->buff_two;
    }

    /**
     * Generated from protobuf field <code>uint32 buff_two = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setBuffTwo($var)
    {
        GPBUtil::checkUint32($var);
        $this->buff_two = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 score_id = 13;</code>
     * @return int
     */
    public function getScoreId()
    {
        return $this->score_id;
    }

    /**
     * Generated from protobuf field <code>uint32 score_id = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setScoreId($var)
    {
        GPBUtil::checkUint32($var);
        $this->score_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 njldipkclbp = 7;</code>
     * @return int
     */
    public function getNjldipkclbp()
    {
        return $this->njldipkclbp;
    }

    /**
     * Generated from protobuf field <code>uint32 njldipkclbp = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setNjldipkclbp($var)
    {
        GPBUtil::checkUint32($var);
        $this->njldipkclbp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string remark_name = 15;</code>
     * @return string
     */
    public function getRemarkName()
    {
        return $this->remark_name;
    }

    /**
     * Generated from protobuf field <code>string remark_name = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setRemarkName($var)
    {
        GPBUtil::checkString($var, True);
        $this->remark_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 buff_one = 5;</code>
     * @return int
     */
    public function getBuffOne()
    {
        return $this->buff_one;
    }

    /**
     * Generated from protobuf field <code>uint32 buff_one = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setBuffOne($var)
    {
        GPBUtil::checkUint32($var);
        $this->buff_one = $var;

        return $this;
    }

}

