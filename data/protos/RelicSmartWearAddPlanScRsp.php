<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FNADNJHEAFH (8253)
 *
 * Generated from protobuf message <code>RelicSmartWearAddPlanScRsp</code>
 */
class RelicSmartWearAddPlanScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.CPJHGCECOIE mbgncggbepp = 13;</code>
     */
    protected $mbgncggbepp = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \CPJHGCECOIE $mbgncggbepp
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.CPJHGCECOIE mbgncggbepp = 13;</code>
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
     * Generated from protobuf field <code>.CPJHGCECOIE mbgncggbepp = 13;</code>
     * @param \CPJHGCECOIE $var
     * @return $this
     */
    public function setMbgncggbepp($var)
    {
        GPBUtil::checkMessage($var, \CPJHGCECOIE::class);
        $this->mbgncggbepp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
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

