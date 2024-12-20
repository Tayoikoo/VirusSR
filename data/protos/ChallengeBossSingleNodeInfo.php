<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ChallengeBossSingleNodeInfo</code>
 */
class ChallengeBossSingleNodeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 buff_id = 2;</code>
     */
    protected $buff_id = 0;
    /**
     * Generated from protobuf field <code>bool is_win = 1;</code>
     */
    protected $is_win = false;
    /**
     * Generated from protobuf field <code>bool pekpichopml = 11;</code>
     */
    protected $pekpichopml = false;
    /**
     * Generated from protobuf field <code>uint32 max_score = 10;</code>
     */
    protected $max_score = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $buff_id
     *     @type bool $is_win
     *     @type bool $pekpichopml
     *     @type int $max_score
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 buff_id = 2;</code>
     * @return int
     */
    public function getBuffId()
    {
        return $this->buff_id;
    }

    /**
     * Generated from protobuf field <code>uint32 buff_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBuffId($var)
    {
        GPBUtil::checkUint32($var);
        $this->buff_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_win = 1;</code>
     * @return bool
     */
    public function getIsWin()
    {
        return $this->is_win;
    }

    /**
     * Generated from protobuf field <code>bool is_win = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsWin($var)
    {
        GPBUtil::checkBool($var);
        $this->is_win = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool pekpichopml = 11;</code>
     * @return bool
     */
    public function getPekpichopml()
    {
        return $this->pekpichopml;
    }

    /**
     * Generated from protobuf field <code>bool pekpichopml = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setPekpichopml($var)
    {
        GPBUtil::checkBool($var);
        $this->pekpichopml = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max_score = 10;</code>
     * @return int
     */
    public function getMaxScore()
    {
        return $this->max_score;
    }

    /**
     * Generated from protobuf field <code>uint32 max_score = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_score = $var;

        return $this;
    }

}

