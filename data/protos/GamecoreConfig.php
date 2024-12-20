<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GamecoreConfig</code>
 */
class GamecoreConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool is_skip_verify = 1;</code>
     */
    protected $is_skip_verify = false;
    /**
     * Generated from protobuf field <code>uint32 max_turn_cnt = 2;</code>
     */
    protected $max_turn_cnt = 0;
    /**
     * Generated from protobuf field <code>bool is_auto_fight = 3;</code>
     */
    protected $is_auto_fight = false;
    /**
     * Generated from protobuf field <code>string csv_path = 4;</code>
     */
    protected $csv_path = '';
    /**
     * Generated from protobuf field <code>bool cpghfddhdah = 5;</code>
     */
    protected $cpghfddhdah = false;
    /**
     * Generated from protobuf field <code>bool bplaapfgnbi = 6;</code>
     */
    protected $bplaapfgnbi = false;
    /**
     * Generated from protobuf field <code>uint32 deefbboiclj = 7;</code>
     */
    protected $deefbboiclj = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_skip_verify
     *     @type int $max_turn_cnt
     *     @type bool $is_auto_fight
     *     @type string $csv_path
     *     @type bool $cpghfddhdah
     *     @type bool $bplaapfgnbi
     *     @type int $deefbboiclj
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool is_skip_verify = 1;</code>
     * @return bool
     */
    public function getIsSkipVerify()
    {
        return $this->is_skip_verify;
    }

    /**
     * Generated from protobuf field <code>bool is_skip_verify = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsSkipVerify($var)
    {
        GPBUtil::checkBool($var);
        $this->is_skip_verify = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max_turn_cnt = 2;</code>
     * @return int
     */
    public function getMaxTurnCnt()
    {
        return $this->max_turn_cnt;
    }

    /**
     * Generated from protobuf field <code>uint32 max_turn_cnt = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxTurnCnt($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_turn_cnt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_auto_fight = 3;</code>
     * @return bool
     */
    public function getIsAutoFight()
    {
        return $this->is_auto_fight;
    }

    /**
     * Generated from protobuf field <code>bool is_auto_fight = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAutoFight($var)
    {
        GPBUtil::checkBool($var);
        $this->is_auto_fight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string csv_path = 4;</code>
     * @return string
     */
    public function getCsvPath()
    {
        return $this->csv_path;
    }

    /**
     * Generated from protobuf field <code>string csv_path = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCsvPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->csv_path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool cpghfddhdah = 5;</code>
     * @return bool
     */
    public function getCpghfddhdah()
    {
        return $this->cpghfddhdah;
    }

    /**
     * Generated from protobuf field <code>bool cpghfddhdah = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setCpghfddhdah($var)
    {
        GPBUtil::checkBool($var);
        $this->cpghfddhdah = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool bplaapfgnbi = 6;</code>
     * @return bool
     */
    public function getBplaapfgnbi()
    {
        return $this->bplaapfgnbi;
    }

    /**
     * Generated from protobuf field <code>bool bplaapfgnbi = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setBplaapfgnbi($var)
    {
        GPBUtil::checkBool($var);
        $this->bplaapfgnbi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 deefbboiclj = 7;</code>
     * @return int
     */
    public function getDeefbboiclj()
    {
        return $this->deefbboiclj;
    }

    /**
     * Generated from protobuf field <code>uint32 deefbboiclj = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setDeefbboiclj($var)
    {
        GPBUtil::checkUint32($var);
        $this->deefbboiclj = $var;

        return $this;
    }

}
