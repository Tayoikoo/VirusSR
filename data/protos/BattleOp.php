<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BattleOp</code>
 */
class BattleOp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 turn_counter = 1;</code>
     */
    protected $turn_counter = 0;
    /**
     * Generated from protobuf field <code>uint32 state = 2;</code>
     */
    protected $state = 0;
    /**
     * Generated from protobuf field <code>uint32 action_entity_id = 3;</code>
     */
    protected $action_entity_id = 0;
    /**
     * Generated from protobuf field <code>uint32 target_entity_id = 4;</code>
     */
    protected $target_entity_id = 0;
    /**
     * Generated from protobuf field <code>uint32 op_type = 5;</code>
     */
    protected $op_type = 0;
    /**
     * Generated from protobuf field <code>uint32 skill_index = 6;</code>
     */
    protected $skill_index = 0;
    /**
     * Generated from protobuf field <code>uint32 operation_counter = 7;</code>
     */
    protected $operation_counter = 0;
    /**
     * Generated from protobuf field <code>string ckkopnhbfom = 8;</code>
     */
    protected $ckkopnhbfom = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $turn_counter
     *     @type int $state
     *     @type int $action_entity_id
     *     @type int $target_entity_id
     *     @type int $op_type
     *     @type int $skill_index
     *     @type int $operation_counter
     *     @type string $ckkopnhbfom
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 turn_counter = 1;</code>
     * @return int
     */
    public function getTurnCounter()
    {
        return $this->turn_counter;
    }

    /**
     * Generated from protobuf field <code>uint32 turn_counter = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTurnCounter($var)
    {
        GPBUtil::checkUint32($var);
        $this->turn_counter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>uint32 state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkUint32($var);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 action_entity_id = 3;</code>
     * @return int
     */
    public function getActionEntityId()
    {
        return $this->action_entity_id;
    }

    /**
     * Generated from protobuf field <code>uint32 action_entity_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setActionEntityId($var)
    {
        GPBUtil::checkUint32($var);
        $this->action_entity_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 target_entity_id = 4;</code>
     * @return int
     */
    public function getTargetEntityId()
    {
        return $this->target_entity_id;
    }

    /**
     * Generated from protobuf field <code>uint32 target_entity_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetEntityId($var)
    {
        GPBUtil::checkUint32($var);
        $this->target_entity_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 op_type = 5;</code>
     * @return int
     */
    public function getOpType()
    {
        return $this->op_type;
    }

    /**
     * Generated from protobuf field <code>uint32 op_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setOpType($var)
    {
        GPBUtil::checkUint32($var);
        $this->op_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 skill_index = 6;</code>
     * @return int
     */
    public function getSkillIndex()
    {
        return $this->skill_index;
    }

    /**
     * Generated from protobuf field <code>uint32 skill_index = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSkillIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->skill_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 operation_counter = 7;</code>
     * @return int
     */
    public function getOperationCounter()
    {
        return $this->operation_counter;
    }

    /**
     * Generated from protobuf field <code>uint32 operation_counter = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setOperationCounter($var)
    {
        GPBUtil::checkUint32($var);
        $this->operation_counter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ckkopnhbfom = 8;</code>
     * @return string
     */
    public function getCkkopnhbfom()
    {
        return $this->ckkopnhbfom;
    }

    /**
     * Generated from protobuf field <code>string ckkopnhbfom = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCkkopnhbfom($var)
    {
        GPBUtil::checkString($var, True);
        $this->ckkopnhbfom = $var;

        return $this;
    }

}

