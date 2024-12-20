<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EJNJNOOPBIL (767)
 *
 * Generated from protobuf message <code>JoinLineupCsReq</code>
 */
class JoinLineupCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 index = 5;</code>
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>.AvatarType avatar_type = 12;</code>
     */
    protected $avatar_type = 0;
    /**
     * Generated from protobuf field <code>uint32 plane_id = 13;</code>
     */
    protected $plane_id = 0;
    /**
     * Generated from protobuf field <code>uint32 slot_type = 6;</code>
     */
    protected $slot_type = 0;
    /**
     * Generated from protobuf field <code>bool is_virtual = 10;</code>
     */
    protected $is_virtual = false;
    /**
     * Generated from protobuf field <code>.ExtraLineupType extra_lineup_type = 14;</code>
     */
    protected $extra_lineup_type = 0;
    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 4;</code>
     */
    protected $base_avatar_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $index
     *     @type int $avatar_type
     *     @type int $plane_id
     *     @type int $slot_type
     *     @type bool $is_virtual
     *     @type int $extra_lineup_type
     *     @type int $base_avatar_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 index = 5;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AvatarType avatar_type = 12;</code>
     * @return int
     */
    public function getAvatarType()
    {
        return $this->avatar_type;
    }

    /**
     * Generated from protobuf field <code>.AvatarType avatar_type = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarType($var)
    {
        GPBUtil::checkEnum($var, \AvatarType::class);
        $this->avatar_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 plane_id = 13;</code>
     * @return int
     */
    public function getPlaneId()
    {
        return $this->plane_id;
    }

    /**
     * Generated from protobuf field <code>uint32 plane_id = 13;</code>
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
     * Generated from protobuf field <code>uint32 slot_type = 6;</code>
     * @return int
     */
    public function getSlotType()
    {
        return $this->slot_type;
    }

    /**
     * Generated from protobuf field <code>uint32 slot_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSlotType($var)
    {
        GPBUtil::checkUint32($var);
        $this->slot_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_virtual = 10;</code>
     * @return bool
     */
    public function getIsVirtual()
    {
        return $this->is_virtual;
    }

    /**
     * Generated from protobuf field <code>bool is_virtual = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsVirtual($var)
    {
        GPBUtil::checkBool($var);
        $this->is_virtual = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ExtraLineupType extra_lineup_type = 14;</code>
     * @return int
     */
    public function getExtraLineupType()
    {
        return $this->extra_lineup_type;
    }

    /**
     * Generated from protobuf field <code>.ExtraLineupType extra_lineup_type = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setExtraLineupType($var)
    {
        GPBUtil::checkEnum($var, \ExtraLineupType::class);
        $this->extra_lineup_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 4;</code>
     * @return int
     */
    public function getBaseAvatarId()
    {
        return $this->base_avatar_id;
    }

    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setBaseAvatarId($var)
    {
        GPBUtil::checkUint32($var);
        $this->base_avatar_id = $var;

        return $this;
    }

}

