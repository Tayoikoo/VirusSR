<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ECFEPHMPLFI</code>
 */
class ECFEPHMPLFI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 EJGPHOJMGPN = 12;</code>
     */
    protected $EJGPHOJMGPN = 0;
    /**
     * Generated from protobuf field <code>uint32 JPIOKPFKNGK = 6;</code>
     */
    protected $JPIOKPFKNGK = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 10;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>.BIFNMMHLPMM relic_unique_id = 4;</code>
     */
    protected $relic_unique_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $EJGPHOJMGPN
     *     @type int $JPIOKPFKNGK
     *     @type int $level
     *     @type int $relic_unique_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 EJGPHOJMGPN = 12;</code>
     * @return int
     */
    public function getEJGPHOJMGPN()
    {
        return $this->EJGPHOJMGPN;
    }

    /**
     * Generated from protobuf field <code>uint32 EJGPHOJMGPN = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setEJGPHOJMGPN($var)
    {
        GPBUtil::checkUint32($var);
        $this->EJGPHOJMGPN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 JPIOKPFKNGK = 6;</code>
     * @return int
     */
    public function getJPIOKPFKNGK()
    {
        return $this->JPIOKPFKNGK;
    }

    /**
     * Generated from protobuf field <code>uint32 JPIOKPFKNGK = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setJPIOKPFKNGK($var)
    {
        GPBUtil::checkUint32($var);
        $this->JPIOKPFKNGK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 10;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.BIFNMMHLPMM relic_unique_id = 4;</code>
     * @return int
     */
    public function getRelicUniqueId()
    {
        return $this->relic_unique_id;
    }

    /**
     * Generated from protobuf field <code>.BIFNMMHLPMM relic_unique_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRelicUniqueId($var)
    {
        GPBUtil::checkEnum($var, \BIFNMMHLPMM::class);
        $this->relic_unique_id = $var;

        return $this;
    }

}
