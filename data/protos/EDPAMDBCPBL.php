<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EDPAMDBCPBL</code>
 */
class EDPAMDBCPBL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 GBJLDALBCNF = 2;</code>
     */
    private $GBJLDALBCNF;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $GBJLDALBCNF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 GBJLDALBCNF = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGBJLDALBCNF()
    {
        return $this->GBJLDALBCNF;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 GBJLDALBCNF = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGBJLDALBCNF($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->GBJLDALBCNF = $arr;

        return $this;
    }

}

