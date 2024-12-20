<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AssistSimpleInfo</code>
 */
class AssistSimpleInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 Pos = 14;</code>
     */
    protected $Pos = 0;
    /**
     * Generated from protobuf field <code>uint32 Level = 7;</code>
     */
    protected $Level = 0;
    /**
     * Generated from protobuf field <code>uint32 AvatarId = 5;</code>
     */
    protected $AvatarId = 0;
    /**
     * Generated from protobuf field <code>uint32 DressedSkinId = 8;</code>
     */
    protected $DressedSkinId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Pos
     *     @type int $Level
     *     @type int $AvatarId
     *     @type int $DressedSkinId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 Pos = 14;</code>
     * @return int
     */
    public function getPos()
    {
        return $this->Pos;
    }

    /**
     * Generated from protobuf field <code>uint32 Pos = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setPos($var)
    {
        GPBUtil::checkUint32($var);
        $this->Pos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Level = 7;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * Generated from protobuf field <code>uint32 Level = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->Level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AvatarId = 5;</code>
     * @return int
     */
    public function getAvatarId()
    {
        return $this->AvatarId;
    }

    /**
     * Generated from protobuf field <code>uint32 AvatarId = 5;</code>
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
     * Generated from protobuf field <code>uint32 DressedSkinId = 8;</code>
     * @return int
     */
    public function getDressedSkinId()
    {
        return $this->DressedSkinId;
    }

    /**
     * Generated from protobuf field <code>uint32 DressedSkinId = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setDressedSkinId($var)
    {
        GPBUtil::checkUint32($var);
        $this->DressedSkinId = $var;

        return $this;
    }

}
