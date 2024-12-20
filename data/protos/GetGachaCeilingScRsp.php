<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OKHHELLHHPC (1928)
 *
 * Generated from protobuf message <code>GetGachaCeilingScRsp</code>
 */
class GetGachaCeilingScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.GachaCeiling gacha_ceiling = 8;</code>
     */
    protected $gacha_ceiling = null;
    /**
     * Generated from protobuf field <code>uint32 gacha_type = 14;</code>
     */
    protected $gacha_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \GachaCeiling $gacha_ceiling
     *     @type int $gacha_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
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
     * Generated from protobuf field <code>.GachaCeiling gacha_ceiling = 8;</code>
     * @return \GachaCeiling|null
     */
    public function getGachaCeiling()
    {
        return $this->gacha_ceiling;
    }

    public function hasGachaCeiling()
    {
        return isset($this->gacha_ceiling);
    }

    public function clearGachaCeiling()
    {
        unset($this->gacha_ceiling);
    }

    /**
     * Generated from protobuf field <code>.GachaCeiling gacha_ceiling = 8;</code>
     * @param \GachaCeiling $var
     * @return $this
     */
    public function setGachaCeiling($var)
    {
        GPBUtil::checkMessage($var, \GachaCeiling::class);
        $this->gacha_ceiling = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gacha_type = 14;</code>
     * @return int
     */
    public function getGachaType()
    {
        return $this->gacha_type;
    }

    /**
     * Generated from protobuf field <code>uint32 gacha_type = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setGachaType($var)
    {
        GPBUtil::checkUint32($var);
        $this->gacha_type = $var;

        return $this;
    }

}

