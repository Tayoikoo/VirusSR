<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IAPJHGFABMK</code>
 */
class IAPJHGFABMK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 PIPLANEBDHB = 8;</code>
     */
    protected $PIPLANEBDHB = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $PIPLANEBDHB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 PIPLANEBDHB = 8;</code>
     * @return int
     */
    public function getPIPLANEBDHB()
    {
        return $this->PIPLANEBDHB;
    }

    /**
     * Generated from protobuf field <code>int32 PIPLANEBDHB = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPIPLANEBDHB($var)
    {
        GPBUtil::checkInt32($var);
        $this->PIPLANEBDHB = $var;

        return $this;
    }

}

