<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IPCJBKOELAN (774)
 *
 * Generated from protobuf message <code>QuitLineupScRsp</code>
 */
class QuitLineupScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool is_mainline = 15;</code>
     */
    protected $is_mainline = false;
    /**
     * Generated from protobuf field <code>uint32 plane_id = 4;</code>
     */
    protected $plane_id = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 3;</code>
     */
    protected $base_avatar_id = 0;
    /**
     * Generated from protobuf field <code>bool is_virtual = 9;</code>
     */
    protected $is_virtual = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_mainline
     *     @type int $plane_id
     *     @type int $retcode
     *     @type int $base_avatar_id
     *     @type bool $is_virtual
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool is_mainline = 15;</code>
     * @return bool
     */
    public function getIsMainline()
    {
        return $this->is_mainline;
    }

    /**
     * Generated from protobuf field <code>bool is_mainline = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsMainline($var)
    {
        GPBUtil::checkBool($var);
        $this->is_mainline = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 plane_id = 4;</code>
     * @return int
     */
    public function getPlaneId()
    {
        return $this->plane_id;
    }

    /**
     * Generated from protobuf field <code>uint32 plane_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPlaneId($var)
    {
        GPBUtil::checkUint32($var);
        $this->plane_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 3;</code>
     * @return int
     */
    public function getBaseAvatarId()
    {
        return $this->base_avatar_id;
    }

    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setBaseAvatarId($var)
    {
        GPBUtil::checkUint32($var);
        $this->base_avatar_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_virtual = 9;</code>
     * @return bool
     */
    public function getIsVirtual()
    {
        return $this->is_virtual;
    }

    /**
     * Generated from protobuf field <code>bool is_virtual = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsVirtual($var)
    {
        GPBUtil::checkBool($var);
        $this->is_virtual = $var;

        return $this;
    }

}

