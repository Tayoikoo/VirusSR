<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KPIENAMLPJE</code>
 */
class KPIENAMLPJE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GMOJJNBEIFL = 6;</code>
     */
    protected $GMOJJNBEIFL = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GMOJJNBEIFL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GMOJJNBEIFL = 6;</code>
     * @return int
     */
    public function getGMOJJNBEIFL()
    {
        return $this->GMOJJNBEIFL;
    }

    /**
     * Generated from protobuf field <code>uint32 GMOJJNBEIFL = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setGMOJJNBEIFL($var)
    {
        GPBUtil::checkUint32($var);
        $this->GMOJJNBEIFL = $var;

        return $this;
    }

}

