<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MarkRelicFilterPlanCsReq (599)
 *
 * Generated from protobuf message <code>MarkRelicFilterPlanCsReq</code>
 */
class MarkRelicFilterPlanCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool IsBatchOp = 2;</code>
     */
    protected $IsBatchOp = false;
    /**
     * Generated from protobuf field <code>repeated uint32 SlotIndexList = 12;</code>
     */
    private $SlotIndexList;
    /**
     * Generated from protobuf field <code>bool IsMark = 10;</code>
     */
    protected $IsMark = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $IsBatchOp
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $SlotIndexList
     *     @type bool $IsMark
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool IsBatchOp = 2;</code>
     * @return bool
     */
    public function getIsBatchOp()
    {
        return $this->IsBatchOp;
    }

    /**
     * Generated from protobuf field <code>bool IsBatchOp = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsBatchOp($var)
    {
        GPBUtil::checkBool($var);
        $this->IsBatchOp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 SlotIndexList = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSlotIndexList()
    {
        return $this->SlotIndexList;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 SlotIndexList = 12;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSlotIndexList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->SlotIndexList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsMark = 10;</code>
     * @return bool
     */
    public function getIsMark()
    {
        return $this->IsMark;
    }

    /**
     * Generated from protobuf field <code>bool IsMark = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsMark($var)
    {
        GPBUtil::checkBool($var);
        $this->IsMark = $var;

        return $this;
    }

}

