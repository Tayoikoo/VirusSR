<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FOBCIMDNKPI</code>
 */
class FOBCIMDNKPI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool hgmcfbhdadl = 12;</code>
     */
    protected $hgmcfbhdadl = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $hgmcfbhdadl
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool hgmcfbhdadl = 12;</code>
     * @return bool
     */
    public function getHgmcfbhdadl()
    {
        return $this->hgmcfbhdadl;
    }

    /**
     * Generated from protobuf field <code>bool hgmcfbhdadl = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setHgmcfbhdadl($var)
    {
        GPBUtil::checkBool($var);
        $this->hgmcfbhdadl = $var;

        return $this;
    }

}

