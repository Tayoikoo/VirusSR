<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HFOENJFJIPC (1434)
 *
 * Generated from protobuf message <code>SceneEntityMoveScNotify</code>
 */
class SceneEntityMoveScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 client_pos_version = 15;</code>
     */
    protected $client_pos_version = 0;
    /**
     * Generated from protobuf field <code>uint32 entry_id = 2;</code>
     */
    protected $entry_id = 0;
    /**
     * Generated from protobuf field <code>uint32 entity_id = 4;</code>
     */
    protected $entity_id = 0;
    /**
     * Generated from protobuf field <code>.MotionInfo motion = 1;</code>
     */
    protected $motion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $client_pos_version
     *     @type int $entry_id
     *     @type int $entity_id
     *     @type \MotionInfo $motion
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 client_pos_version = 15;</code>
     * @return int
     */
    public function getClientPosVersion()
    {
        return $this->client_pos_version;
    }

    /**
     * Generated from protobuf field <code>uint32 client_pos_version = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setClientPosVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->client_pos_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 entry_id = 2;</code>
     * @return int
     */
    public function getEntryId()
    {
        return $this->entry_id;
    }

    /**
     * Generated from protobuf field <code>uint32 entry_id = 2;</code>
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
     * Generated from protobuf field <code>uint32 entity_id = 4;</code>
     * @return int
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * Generated from protobuf field <code>uint32 entity_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setEntityId($var)
    {
        GPBUtil::checkUint32($var);
        $this->entity_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MotionInfo motion = 1;</code>
     * @return \MotionInfo|null
     */
    public function getMotion()
    {
        return $this->motion;
    }

    public function hasMotion()
    {
        return isset($this->motion);
    }

    public function clearMotion()
    {
        unset($this->motion);
    }

    /**
     * Generated from protobuf field <code>.MotionInfo motion = 1;</code>
     * @param \MotionInfo $var
     * @return $this
     */
    public function setMotion($var)
    {
        GPBUtil::checkMessage($var, \MotionInfo::class);
        $this->motion = $var;

        return $this;
    }

}
