<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GroupStateInfo</code>
 */
class GroupStateInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * MIJHFMNPLIP ??
     *
     * Generated from protobuf field <code>uint32 group_state = 15;</code>
     */
    protected $group_state = 0;
    /**
     * Generated from protobuf field <code>uint32 hooiclkbeff = 14;</code>
     */
    protected $hooiclkbeff = 0;
    /**
     * Generated from protobuf field <code>uint32 entry_id = 9;</code>
     */
    protected $entry_id = 0;
    /**
     * Generated from protobuf field <code>uint32 group_id = 13;</code>
     */
    protected $group_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $group_state
     *           MIJHFMNPLIP ??
     *     @type int $hooiclkbeff
     *     @type int $entry_id
     *     @type int $group_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * MIJHFMNPLIP ??
     *
     * Generated from protobuf field <code>uint32 group_state = 15;</code>
     * @return int
     */
    public function getGroupState()
    {
        return $this->group_state;
    }

    /**
     * MIJHFMNPLIP ??
     *
     * Generated from protobuf field <code>uint32 group_state = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupState($var)
    {
        GPBUtil::checkUint32($var);
        $this->group_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 hooiclkbeff = 14;</code>
     * @return int
     */
    public function getHooiclkbeff()
    {
        return $this->hooiclkbeff;
    }

    /**
     * Generated from protobuf field <code>uint32 hooiclkbeff = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setHooiclkbeff($var)
    {
        GPBUtil::checkUint32($var);
        $this->hooiclkbeff = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 entry_id = 9;</code>
     * @return int
     */
    public function getEntryId()
    {
        return $this->entry_id;
    }

    /**
     * Generated from protobuf field <code>uint32 entry_id = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setEntryId($var)
    {
        GPBUtil::checkUint32($var);
        $this->entry_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 13;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
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

}

