<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IDIPCGNOGOG</code>
 */
class IDIPCGNOGOG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GFJLNPBAHGB = 15;</code>
     */
    protected $GFJLNPBAHGB = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GFJLNPBAHGB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GFJLNPBAHGB = 15;</code>
     * @return int
     */
    public function getGFJLNPBAHGB()
    {
        return $this->GFJLNPBAHGB;
    }

    /**
     * Generated from protobuf field <code>uint32 GFJLNPBAHGB = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setGFJLNPBAHGB($var)
    {
        GPBUtil::checkUint32($var);
        $this->GFJLNPBAHGB = $var;

        return $this;
    }

}
