<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KIKOMHKAPGH</code>
 */
class KIKOMHKAPGH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 MINJKLLBIIF = 14;</code>
     */
    protected $MINJKLLBIIF = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $MINJKLLBIIF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 MINJKLLBIIF = 14;</code>
     * @return int|string
     */
    public function getMINJKLLBIIF()
    {
        return $this->MINJKLLBIIF;
    }

    /**
     * Generated from protobuf field <code>uint64 MINJKLLBIIF = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMINJKLLBIIF($var)
    {
        GPBUtil::checkUint64($var);
        $this->MINJKLLBIIF = $var;

        return $this;
    }

}

