<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LGIFOCBFJLH</code>
 */
class LGIFOCBFJLH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool EGPENEEKJMB = 1;</code>
     */
    protected $EGPENEEKJMB = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $EGPENEEKJMB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool EGPENEEKJMB = 1;</code>
     * @return bool
     */
    public function getEGPENEEKJMB()
    {
        return $this->EGPENEEKJMB;
    }

    /**
     * Generated from protobuf field <code>bool EGPENEEKJMB = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEGPENEEKJMB($var)
    {
        GPBUtil::checkBool($var);
        $this->EGPENEEKJMB = $var;

        return $this;
    }

}

