<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NBNJNEMFNJJ</code>
 */
class NBNJNEMFNJJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.IAMINGHLBDJ makghkojddl = 1;</code>
     */
    protected $makghkojddl = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \IAMINGHLBDJ $makghkojddl
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.IAMINGHLBDJ makghkojddl = 1;</code>
     * @return \IAMINGHLBDJ|null
     */
    public function getMakghkojddl()
    {
        return $this->makghkojddl;
    }

    public function hasMakghkojddl()
    {
        return isset($this->makghkojddl);
    }

    public function clearMakghkojddl()
    {
        unset($this->makghkojddl);
    }

    /**
     * Generated from protobuf field <code>.IAMINGHLBDJ makghkojddl = 1;</code>
     * @param \IAMINGHLBDJ $var
     * @return $this
     */
    public function setMakghkojddl($var)
    {
        GPBUtil::checkMessage($var, \IAMINGHLBDJ::class);
        $this->makghkojddl = $var;

        return $this;
    }

}

