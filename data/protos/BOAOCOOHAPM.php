<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BOAOCOOHAPM</code>
 */
class BOAOCOOHAPM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GJHJNEEHAAM = 11;</code>
     */
    protected $GJHJNEEHAAM = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GJHJNEEHAAM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GJHJNEEHAAM = 11;</code>
     * @return int
     */
    public function getGJHJNEEHAAM()
    {
        return $this->GJHJNEEHAAM;
    }

    /**
     * Generated from protobuf field <code>uint32 GJHJNEEHAAM = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setGJHJNEEHAAM($var)
    {
        GPBUtil::checkUint32($var);
        $this->GJHJNEEHAAM = $var;

        return $this;
    }

}

