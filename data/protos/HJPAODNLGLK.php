<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HJPAODNLGLK</code>
 */
class HJPAODNLGLK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool LJEEPKLGLDM = 6;</code>
     */
    protected $LJEEPKLGLDM = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $LJEEPKLGLDM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool LJEEPKLGLDM = 6;</code>
     * @return bool
     */
    public function getLJEEPKLGLDM()
    {
        return $this->LJEEPKLGLDM;
    }

    /**
     * Generated from protobuf field <code>bool LJEEPKLGLDM = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setLJEEPKLGLDM($var)
    {
        GPBUtil::checkBool($var);
        $this->LJEEPKLGLDM = $var;

        return $this;
    }

}

