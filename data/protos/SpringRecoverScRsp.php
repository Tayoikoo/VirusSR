<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpringRecoverScRsp</code>
 */
class SpringRecoverScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ELJHLDOEKID heal_pool_info = 7;</code>
     */
    protected $heal_pool_info = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ELJHLDOEKID $heal_pool_info
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ELJHLDOEKID heal_pool_info = 7;</code>
     * @return \ELJHLDOEKID|null
     */
    public function getHealPoolInfo()
    {
        return $this->heal_pool_info;
    }

    public function hasHealPoolInfo()
    {
        return isset($this->heal_pool_info);
    }

    public function clearHealPoolInfo()
    {
        unset($this->heal_pool_info);
    }

    /**
     * Generated from protobuf field <code>.ELJHLDOEKID heal_pool_info = 7;</code>
     * @param \ELJHLDOEKID $var
     * @return $this
     */
    public function setHealPoolInfo($var)
    {
        GPBUtil::checkMessage($var, \ELJHLDOEKID::class);
        $this->heal_pool_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}
