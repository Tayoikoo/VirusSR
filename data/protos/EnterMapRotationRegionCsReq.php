<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BOGLDKKADHM (6836)
 *
 * Generated from protobuf message <code>EnterMapRotationRegionCsReq</code>
 */
class EnterMapRotationRegionCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ifdgjojkbpn = 12;</code>
     */
    protected $ifdgjojkbpn = 0;
    /**
     * Generated from protobuf field <code>uint32 fdggllhcpli = 13;</code>
     */
    protected $fdggllhcpli = 0;
    /**
     * Generated from protobuf field <code>.MotionInfo motion = 11;</code>
     */
    protected $motion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ifdgjojkbpn
     *     @type int $fdggllhcpli
     *     @type \MotionInfo $motion
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ifdgjojkbpn = 12;</code>
     * @return int
     */
    public function getIfdgjojkbpn()
    {
        return $this->ifdgjojkbpn;
    }

    /**
     * Generated from protobuf field <code>uint32 ifdgjojkbpn = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setIfdgjojkbpn($var)
    {
        GPBUtil::checkUint32($var);
        $this->ifdgjojkbpn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 fdggllhcpli = 13;</code>
     * @return int
     */
    public function getFdggllhcpli()
    {
        return $this->fdggllhcpli;
    }

    /**
     * Generated from protobuf field <code>uint32 fdggllhcpli = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setFdggllhcpli($var)
    {
        GPBUtil::checkUint32($var);
        $this->fdggllhcpli = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MotionInfo motion = 11;</code>
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
     * Generated from protobuf field <code>.MotionInfo motion = 11;</code>
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

