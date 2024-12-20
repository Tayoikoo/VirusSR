<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AMPMPFCEHKE</code>
 */
class AMPMPFCEHKE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 select_cell_id = 1;</code>
     */
    protected $select_cell_id = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 onnpombhihb = 6;</code>
     */
    private $onnpombhihb;
    /**
     * Generated from protobuf field <code>bool confirm = 11;</code>
     */
    protected $confirm = false;
    /**
     * Generated from protobuf field <code>uint32 akeeeahdeec = 4;</code>
     */
    protected $akeeeahdeec = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $select_cell_id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $onnpombhihb
     *     @type bool $confirm
     *     @type int $akeeeahdeec
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 select_cell_id = 1;</code>
     * @return int
     */
    public function getSelectCellId()
    {
        return $this->select_cell_id;
    }

    /**
     * Generated from protobuf field <code>uint32 select_cell_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSelectCellId($var)
    {
        GPBUtil::checkUint32($var);
        $this->select_cell_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 onnpombhihb = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOnnpombhihb()
    {
        return $this->onnpombhihb;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 onnpombhihb = 6;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOnnpombhihb($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->onnpombhihb = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool confirm = 11;</code>
     * @return bool
     */
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * Generated from protobuf field <code>bool confirm = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setConfirm($var)
    {
        GPBUtil::checkBool($var);
        $this->confirm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 akeeeahdeec = 4;</code>
     * @return int
     */
    public function getAkeeeahdeec()
    {
        return $this->akeeeahdeec;
    }

    /**
     * Generated from protobuf field <code>uint32 akeeeahdeec = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAkeeeahdeec($var)
    {
        GPBUtil::checkUint32($var);
        $this->akeeeahdeec = $var;

        return $this;
    }

}
