<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KNOKJFOBIME</code>
 */
class KNOKJFOBIME extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string AEJDEBCIJNA = 15;</code>
     */
    private $AEJDEBCIJNA;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $AEJDEBCIJNA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string AEJDEBCIJNA = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAEJDEBCIJNA()
    {
        return $this->AEJDEBCIJNA;
    }

    /**
     * Generated from protobuf field <code>repeated string AEJDEBCIJNA = 15;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAEJDEBCIJNA($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->AEJDEBCIJNA = $arr;

        return $this;
    }

}

