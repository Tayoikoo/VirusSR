<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HIDOJLAHDEA</code>
 */
class HIDOJLAHDEA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 HMPDFKNCGDK = 2;</code>
     */
    private $HMPDFKNCGDK;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $HMPDFKNCGDK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HMPDFKNCGDK = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHMPDFKNCGDK()
    {
        return $this->HMPDFKNCGDK;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HMPDFKNCGDK = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHMPDFKNCGDK($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->HMPDFKNCGDK = $arr;

        return $this;
    }

}

