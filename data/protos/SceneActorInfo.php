<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SceneActorInfo</code>
 */
class SceneActorInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 map_layer = 2;</code>
     */
    protected $map_layer = 0;
    /**
     * Generated from protobuf field <code>uint32 uid = 14;</code>
     */
    protected $uid = 0;
    /**
     * Generated from protobuf field <code>.AvatarType avatar_type = 5;</code>
     */
    protected $avatar_type = 0;
    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 8;</code>
     */
    protected $base_avatar_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $map_layer
     *     @type int $uid
     *     @type int $avatar_type
     *     @type int $base_avatar_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 map_layer = 2;</code>
     * @return int
     */
    public function getMapLayer()
    {
        return $this->map_layer;
    }

    /**
     * Generated from protobuf field <code>uint32 map_layer = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMapLayer($var)
    {
        GPBUtil::checkUint32($var);
        $this->map_layer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 14;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AvatarType avatar_type = 5;</code>
     * @return int
     */
    public function getAvatarType()
    {
        return $this->avatar_type;
    }

    /**
     * Generated from protobuf field <code>.AvatarType avatar_type = 5;</code>
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
     * Generated from protobuf field <code>uint32 base_avatar_id = 8;</code>
     * @return int
     */
    public function getBaseAvatarId()
    {
        return $this->base_avatar_id;
    }

    /**
     * Generated from protobuf field <code>uint32 base_avatar_id = 8;</code>
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

