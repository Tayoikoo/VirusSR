<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MEBEFPGLCDE (6530)
 *
 * Generated from protobuf message <code>ArchiveWolfBroGameCsReq</code>
 */
class ArchiveWolfBroGameCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 id = 7;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>.MotionInfo motion = 12;</code>
     */
    protected $motion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type \MotionInfo $motion
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 id = 7;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MotionInfo motion = 12;</code>
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
     * Generated from protobuf field <code>.MotionInfo motion = 12;</code>
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

