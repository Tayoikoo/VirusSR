<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SceneGroupInfo</code>
 */
class SceneGroupInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *map<string, int32> gbnnlkibhon = 9;
     *
     * Generated from protobuf field <code>uint32 group_id = 13;</code>
     */
    protected $group_id = 0;
    /**
     * Generated from protobuf field <code>repeated .SceneEntityInfo entity_list = 10;</code>
     */
    private $entity_list;
    /**
     * Generated from protobuf field <code>uint32 state = 8;</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $group_id
     *          map<string, int32> gbnnlkibhon = 9;
     *     @type array<\SceneEntityInfo>|\Google\Protobuf\Internal\RepeatedField $entity_list
     *     @type int $state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     *map<string, int32> gbnnlkibhon = 9;
     *
     * Generated from protobuf field <code>uint32 group_id = 13;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     *map<string, int32> gbnnlkibhon = 9;
     *
     * Generated from protobuf field <code>uint32 group_id = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->group_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .SceneEntityInfo entity_list = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntityList()
    {
        return $this->entity_list;
    }

    /**
     * Generated from protobuf field <code>repeated .SceneEntityInfo entity_list = 10;</code>
     * @param array<\SceneEntityInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntityList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SceneEntityInfo::class);
        $this->entity_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 state = 8;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>uint32 state = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkUint32($var);
        $this->state = $var;

        return $this;
    }

}

