<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EKPMDCOLHMC (6874)
 *
 * Generated from protobuf message <code>RotateMapScRsp</code>
 */
class RotateMapScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 client_pos_version = 13;</code>
     */
    protected $client_pos_version = 0;
    /**
     * Generated from protobuf field <code>.MotionInfo motion = 3;</code>
     */
    protected $motion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $client_pos_version
     *     @type \MotionInfo $motion
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
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
     * Generated from protobuf field <code>uint32 client_pos_version = 13;</code>
     * @return int
     */
    public function getClientPosVersion()
    {
        return $this->client_pos_version;
    }

    /**
     * Generated from protobuf field <code>uint32 client_pos_version = 13;</code>
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
     * Generated from protobuf field <code>.MotionInfo motion = 3;</code>
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
     * Generated from protobuf field <code>.MotionInfo motion = 3;</code>
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
