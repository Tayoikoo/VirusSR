<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IEGGGCKOJIA (993)
 *
 * Generated from protobuf message <code>FinishQuestCsReq</code>
 */
class FinishQuestCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 prop_id = 7;</code>
     */
    protected $prop_id = 0;
    /**
     * Generated from protobuf field <code>uint32 quest_id = 12;</code>
     */
    protected $quest_id = 0;
    /**
     * Generated from protobuf field <code>uint32 group_id = 2;</code>
     */
    protected $group_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $prop_id
     *     @type int $quest_id
     *     @type int $group_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 prop_id = 7;</code>
     * @return int
     */
    public function getPropId()
    {
        return $this->prop_id;
    }

    /**
     * Generated from protobuf field <code>uint32 prop_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPropId($var)
    {
        GPBUtil::checkUint32($var);
        $this->prop_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 quest_id = 12;</code>
     * @return int
     */
    public function getQuestId()
    {
        return $this->quest_id;
    }

    /**
     * Generated from protobuf field <code>uint32 quest_id = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setQuestId($var)
    {
        GPBUtil::checkUint32($var);
        $this->quest_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 2;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->group_id = $var;

        return $this;
    }

}
