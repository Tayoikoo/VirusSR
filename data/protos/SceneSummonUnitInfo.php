<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SceneSummonUnitInfo</code>
 */
class SceneSummonUnitInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 caster_entity_id = 4;</code>
     */
    protected $caster_entity_id = 0;
    /**
     * Generated from protobuf field <code>int32 life_time_ms = 6;</code>
     */
    protected $life_time_ms = 0;
    /**
     * Generated from protobuf field <code>uint64 create_time_ms = 10;</code>
     */
    protected $create_time_ms = 0;
    /**
     * Generated from protobuf field <code>uint32 summon_unit_id = 13;</code>
     */
    protected $summon_unit_id = 0;
    /**
     * Generated from protobuf field <code>repeated string trigger_name_list = 14;</code>
     */
    private $trigger_name_list;
    /**
     * Generated from protobuf field <code>uint32 attach_entity_id = 5;</code>
     */
    protected $attach_entity_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $caster_entity_id
     *     @type int $life_time_ms
     *     @type int|string $create_time_ms
     *     @type int $summon_unit_id
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $trigger_name_list
     *     @type int $attach_entity_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 caster_entity_id = 4;</code>
     * @return int
     */
    public function getCasterEntityId()
    {
        return $this->caster_entity_id;
    }

    /**
     * Generated from protobuf field <code>uint32 caster_entity_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCasterEntityId($var)
    {
        GPBUtil::checkUint32($var);
        $this->caster_entity_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 life_time_ms = 6;</code>
     * @return int
     */
    public function getLifeTimeMs()
    {
        return $this->life_time_ms;
    }

    /**
     * Generated from protobuf field <code>int32 life_time_ms = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setLifeTimeMs($var)
    {
        GPBUtil::checkInt32($var);
        $this->life_time_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 create_time_ms = 10;</code>
     * @return int|string
     */
    public function getCreateTimeMs()
    {
        return $this->create_time_ms;
    }

    /**
     * Generated from protobuf field <code>uint64 create_time_ms = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateTimeMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->create_time_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 summon_unit_id = 13;</code>
     * @return int
     */
    public function getSummonUnitId()
    {
        return $this->summon_unit_id;
    }

    /**
     * Generated from protobuf field <code>uint32 summon_unit_id = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setSummonUnitId($var)
    {
        GPBUtil::checkUint32($var);
        $this->summon_unit_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string trigger_name_list = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTriggerNameList()
    {
        return $this->trigger_name_list;
    }

    /**
     * Generated from protobuf field <code>repeated string trigger_name_list = 14;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTriggerNameList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->trigger_name_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 attach_entity_id = 5;</code>
     * @return int
     */
    public function getAttachEntityId()
    {
        return $this->attach_entity_id;
    }

    /**
     * Generated from protobuf field <code>uint32 attach_entity_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAttachEntityId($var)
    {
        GPBUtil::checkUint32($var);
        $this->attach_entity_id = $var;

        return $this;
    }

}

