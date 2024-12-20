<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RogueSyncContextBoardEvent</code>
 */
class RogueSyncContextBoardEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ModifierEffectType = 10;</code>
     */
    protected $ModifierEffectType = 0;
    /**
     * Generated from protobuf field <code>uint32 BoardEventId = 2;</code>
     */
    protected $BoardEventId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ModifierEffectType
     *     @type int $BoardEventId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ModifierEffectType = 10;</code>
     * @return int
     */
    public function getModifierEffectType()
    {
        return $this->ModifierEffectType;
    }

    /**
     * Generated from protobuf field <code>uint32 ModifierEffectType = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setModifierEffectType($var)
    {
        GPBUtil::checkUint32($var);
        $this->ModifierEffectType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 BoardEventId = 2;</code>
     * @return int
     */
    public function getBoardEventId()
    {
        return $this->BoardEventId;
    }

    /**
     * Generated from protobuf field <code>uint32 BoardEventId = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBoardEventId($var)
    {
        GPBUtil::checkUint32($var);
        $this->BoardEventId = $var;

        return $this;
    }

}
