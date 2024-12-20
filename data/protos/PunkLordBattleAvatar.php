<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PunkLordBattleAvatar</code>
 */
class PunkLordBattleAvatar extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 AvatarId = 1;</code>
     */
    protected $AvatarId = 0;
    /**
     * Generated from protobuf field <code>uint32 AvatarLevel = 2;</code>
     */
    protected $AvatarLevel = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $AvatarId
     *     @type int $AvatarLevel
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 AvatarId = 1;</code>
     * @return int
     */
    public function getAvatarId()
    {
        return $this->AvatarId;
    }

    /**
     * Generated from protobuf field <code>uint32 AvatarId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarId($var)
    {
        GPBUtil::checkUint32($var);
        $this->AvatarId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AvatarLevel = 2;</code>
     * @return int
     */
    public function getAvatarLevel()
    {
        return $this->AvatarLevel;
    }

    /**
     * Generated from protobuf field <code>uint32 AvatarLevel = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->AvatarLevel = $var;

        return $this;
    }

}

