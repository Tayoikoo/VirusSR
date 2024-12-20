<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AddRelicFilterPlanScRsp (592)
 *
 * Generated from protobuf message <code>AddRelicFilterPlanScRsp</code>
 */
class AddRelicFilterPlanScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.RelicFilterPlan Plan = 5;</code>
     */
    protected $Plan = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RelicFilterPlan $Plan
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.RelicFilterPlan Plan = 5;</code>
     * @return \RelicFilterPlan|null
     */
    public function getPlan()
    {
        return $this->Plan;
    }

    public function hasPlan()
    {
        return isset($this->Plan);
    }

    public function clearPlan()
    {
        unset($this->Plan);
    }

    /**
     * Generated from protobuf field <code>.RelicFilterPlan Plan = 5;</code>
     * @param \RelicFilterPlan $var
     * @return $this
     */
    public function setPlan($var)
    {
        GPBUtil::checkMessage($var, \RelicFilterPlan::class);
        $this->Plan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
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

