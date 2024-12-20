<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KEKMJKOHBOH</code>
 */
class KEKMJKOHBOH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 config_id = 5;</code>
     */
    protected $config_id = 0;
    /**
     * Generated from protobuf field <code>uint32 group_id = 3;</code>
     */
    protected $group_id = 0;
    /**
     * Generated from protobuf field <code>uint32 floor_id = 15;</code>
     */
    protected $floor_id = 0;
    /**
     * Generated from protobuf field <code>uint32 plane_id = 10;</code>
     */
    protected $plane_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $config_id
     *     @type int $group_id
     *     @type int $floor_id
     *     @type int $plane_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 config_id = 5;</code>
     * @return int
     */
    public function getConfigId()
    {
        return $this->config_id;
    }

    /**
     * Generated from protobuf field <code>uint32 config_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setConfigId($var)
    {
        GPBUtil::checkUint32($var);
        $this->config_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 3;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 3;</code>
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
     * Generated from protobuf field <code>uint32 floor_id = 15;</code>
     * @return int
     */
    public function getFloorId()
    {
        return $this->floor_id;
    }

    /**
     * Generated from protobuf field <code>uint32 floor_id = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setFloorId($var)
    {
        GPBUtil::checkUint32($var);
        $this->floor_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 plane_id = 10;</code>
     * @return int
     */
    public function getPlaneId()
    {
        return $this->plane_id;
    }

    /**
     * Generated from protobuf field <code>uint32 plane_id = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setPlaneId($var)
    {
        GPBUtil::checkUint32($var);
        $this->plane_id = $var;

        return $this;
    }

}

