<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MOHJEDGCLCN</code>
 */
class MOHJEDGCLCN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string IANCKKGKNCO = 14;</code>
     */
    protected $IANCKKGKNCO = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $IANCKKGKNCO
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string IANCKKGKNCO = 14;</code>
     * @return string
     */
    public function getIANCKKGKNCO()
    {
        return $this->IANCKKGKNCO;
    }

    /**
     * Generated from protobuf field <code>string IANCKKGKNCO = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setIANCKKGKNCO($var)
    {
        GPBUtil::checkString($var, True);
        $this->IANCKKGKNCO = $var;

        return $this;
    }

}

