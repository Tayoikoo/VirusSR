<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ChallengeBossStageTertinggi</code>
 */
class ChallengeBossStageTertinggi extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 score_id = 9;</code>
     */
    protected $score_id = 0;
    /**
     * Generated from protobuf field <code>repeated .ChallengeLineupList lineup_list = 1;</code>
     */
    private $lineup_list;
    /**
     * Generated from protobuf field <code>uint32 buff_two = 11;</code>
     */
    protected $buff_two = 0;
    /**
     * Generated from protobuf field <code>uint32 buff_one = 8;</code>
     */
    protected $buff_one = 0;
    /**
     * Generated from protobuf field <code>uint32 njldipkclbp = 6;</code>
     */
    protected $njldipkclbp = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
     */
    protected $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $score_id
     *     @type array<\ChallengeLineupList>|\Google\Protobuf\Internal\RepeatedField $lineup_list
     *     @type int $buff_two
     *     @type int $buff_one
     *     @type int $njldipkclbp
     *     @type int $level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 score_id = 9;</code>
     * @return int
     */
    public function getScoreId()
    {
        return $this->score_id;
    }

    /**
     * Generated from protobuf field <code>uint32 score_id = 9;</code>
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
     * Generated from protobuf field <code>repeated .ChallengeLineupList lineup_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLineupList()
    {
        return $this->lineup_list;
    }

    /**
     * Generated from protobuf field <code>repeated .ChallengeLineupList lineup_list = 1;</code>
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
     * Generated from protobuf field <code>uint32 buff_two = 11;</code>
     * @return int
     */
    public function getBuffTwo()
    {
        return $this->buff_two;
    }

    /**
     * Generated from protobuf field <code>uint32 buff_two = 11;</code>
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
     * Generated from protobuf field <code>uint32 buff_one = 8;</code>
     * @return int
     */
    public function getBuffOne()
    {
        return $this->buff_one;
    }

    /**
     * Generated from protobuf field <code>uint32 buff_one = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setBuffOne($var)
    {
        GPBUtil::checkUint32($var);
        $this->buff_one = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 njldipkclbp = 6;</code>
     * @return int
     */
    public function getNjldipkclbp()
    {
        return $this->njldipkclbp;
    }

    /**
     * Generated from protobuf field <code>uint32 njldipkclbp = 6;</code>
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
     * Generated from protobuf field <code>uint32 level = 3;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

}

