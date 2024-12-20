<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RogueFormulaSelectInfo</code>
 */
class RogueFormulaSelectInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 HintId = 5;</code>
     */
    protected $HintId = 0;
    /**
     * Generated from protobuf field <code>uint32 RollFormulaMaxCount = 2;</code>
     */
    protected $RollFormulaMaxCount = 0;
    /**
     * Generated from protobuf field <code>bool CanRoll = 8;</code>
     */
    protected $CanRoll = false;
    /**
     * Generated from protobuf field <code>uint32 RollFormulaCount = 1;</code>
     */
    protected $RollFormulaCount = 0;
    /**
     * Generated from protobuf field <code>uint32 RollFormulaFreeCount = 11;</code>
     */
    protected $RollFormulaFreeCount = 0;
    /**
     * Generated from protobuf field <code>.ItemCostData RollFormulaCostData = 13;</code>
     */
    protected $RollFormulaCostData = null;
    /**
     * Generated from protobuf field <code>repeated uint32 SelectFormulaIdList = 9;</code>
     */
    private $SelectFormulaIdList;
    /**
     * Generated from protobuf field <code>repeated uint32 HandbookUnlockFormulaIdList = 6;</code>
     */
    private $HandbookUnlockFormulaIdList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $HintId
     *     @type int $RollFormulaMaxCount
     *     @type bool $CanRoll
     *     @type int $RollFormulaCount
     *     @type int $RollFormulaFreeCount
     *     @type \ItemCostData $RollFormulaCostData
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $SelectFormulaIdList
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $HandbookUnlockFormulaIdList
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 HintId = 5;</code>
     * @return int
     */
    public function getHintId()
    {
        return $this->HintId;
    }

    /**
     * Generated from protobuf field <code>uint32 HintId = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setHintId($var)
    {
        GPBUtil::checkUint32($var);
        $this->HintId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 RollFormulaMaxCount = 2;</code>
     * @return int
     */
    public function getRollFormulaMaxCount()
    {
        return $this->RollFormulaMaxCount;
    }

    /**
     * Generated from protobuf field <code>uint32 RollFormulaMaxCount = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRollFormulaMaxCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->RollFormulaMaxCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool CanRoll = 8;</code>
     * @return bool
     */
    public function getCanRoll()
    {
        return $this->CanRoll;
    }

    /**
     * Generated from protobuf field <code>bool CanRoll = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanRoll($var)
    {
        GPBUtil::checkBool($var);
        $this->CanRoll = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 RollFormulaCount = 1;</code>
     * @return int
     */
    public function getRollFormulaCount()
    {
        return $this->RollFormulaCount;
    }

    /**
     * Generated from protobuf field <code>uint32 RollFormulaCount = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRollFormulaCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->RollFormulaCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 RollFormulaFreeCount = 11;</code>
     * @return int
     */
    public function getRollFormulaFreeCount()
    {
        return $this->RollFormulaFreeCount;
    }

    /**
     * Generated from protobuf field <code>uint32 RollFormulaFreeCount = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setRollFormulaFreeCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->RollFormulaFreeCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemCostData RollFormulaCostData = 13;</code>
     * @return \ItemCostData|null
     */
    public function getRollFormulaCostData()
    {
        return $this->RollFormulaCostData;
    }

    public function hasRollFormulaCostData()
    {
        return isset($this->RollFormulaCostData);
    }

    public function clearRollFormulaCostData()
    {
        unset($this->RollFormulaCostData);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData RollFormulaCostData = 13;</code>
     * @param \ItemCostData $var
     * @return $this
     */
    public function setRollFormulaCostData($var)
    {
        GPBUtil::checkMessage($var, \ItemCostData::class);
        $this->RollFormulaCostData = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 SelectFormulaIdList = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelectFormulaIdList()
    {
        return $this->SelectFormulaIdList;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 SelectFormulaIdList = 9;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSelectFormulaIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->SelectFormulaIdList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HandbookUnlockFormulaIdList = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHandbookUnlockFormulaIdList()
    {
        return $this->HandbookUnlockFormulaIdList;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HandbookUnlockFormulaIdList = 6;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHandbookUnlockFormulaIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->HandbookUnlockFormulaIdList = $arr;

        return $this;
    }

}

