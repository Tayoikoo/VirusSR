<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IEONGCOGOJI (23)
 *
 * Generated from protobuf message <code>StaminaInfoScNotify</code>
 */
class StaminaInfoScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 stamina = 15;</code>
     */
    protected $stamina = 0;
    /**
     * Generated from protobuf field <code>uint32 oalfodgnfje = 1;</code>
     */
    protected $oalfodgnfje = 0;
    /**
     * Generated from protobuf field <code>int64 pfjlcgieifa = 7;</code>
     */
    protected $pfjlcgieifa = 0;
    /**
     * Generated from protobuf field <code>int64 oldmlmdcifd = 6;</code>
     */
    protected $oldmlmdcifd = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $stamina
     *     @type int $oalfodgnfje
     *     @type int|string $pfjlcgieifa
     *     @type int|string $oldmlmdcifd
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 stamina = 15;</code>
     * @return int
     */
    public function getStamina()
    {
        return $this->stamina;
    }

    /**
     * Generated from protobuf field <code>uint32 stamina = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setStamina($var)
    {
        GPBUtil::checkUint32($var);
        $this->stamina = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 oalfodgnfje = 1;</code>
     * @return int
     */
    public function getOalfodgnfje()
    {
        return $this->oalfodgnfje;
    }

    /**
     * Generated from protobuf field <code>uint32 oalfodgnfje = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOalfodgnfje($var)
    {
        GPBUtil::checkUint32($var);
        $this->oalfodgnfje = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 pfjlcgieifa = 7;</code>
     * @return int|string
     */
    public function getPfjlcgieifa()
    {
        return $this->pfjlcgieifa;
    }

    /**
     * Generated from protobuf field <code>int64 pfjlcgieifa = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPfjlcgieifa($var)
    {
        GPBUtil::checkInt64($var);
        $this->pfjlcgieifa = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 oldmlmdcifd = 6;</code>
     * @return int|string
     */
    public function getOldmlmdcifd()
    {
        return $this->oldmlmdcifd;
    }

    /**
     * Generated from protobuf field <code>int64 oldmlmdcifd = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOldmlmdcifd($var)
    {
        GPBUtil::checkInt64($var);
        $this->oldmlmdcifd = $var;

        return $this;
    }

}
