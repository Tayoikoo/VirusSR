<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MPNCFLHHIOC (8267)
 *
 * Generated from protobuf message <code>RelicSmartWearUpdatePlanCsReq</code>
 */
class RelicSmartWearUpdatePlanCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.CPJHGCECOIE mbgncggbepp = 10;</code>
     */
    protected $mbgncggbepp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \CPJHGCECOIE $mbgncggbepp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.CPJHGCECOIE mbgncggbepp = 10;</code>
     * @return \CPJHGCECOIE|null
     */
    public function getMbgncggbepp()
    {
        return $this->mbgncggbepp;
    }

    public function hasMbgncggbepp()
    {
        return isset($this->mbgncggbepp);
    }

    public function clearMbgncggbepp()
    {
        unset($this->mbgncggbepp);
    }

    /**
     * Generated from protobuf field <code>.CPJHGCECOIE mbgncggbepp = 10;</code>
     * @param \CPJHGCECOIE $var
     * @return $this
     */
    public function setMbgncggbepp($var)
    {
        GPBUtil::checkMessage($var, \CPJHGCECOIE::class);
        $this->mbgncggbepp = $var;

        return $this;
    }

}

