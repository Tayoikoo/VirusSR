<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ODHKPDCMAEB</code>
 */
class ODHKPDCMAEB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 BKDDNDCAMOP = 5;</code>
     */
    protected $BKDDNDCAMOP = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $BKDDNDCAMOP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 BKDDNDCAMOP = 5;</code>
     * @return int|string
     */
    public function getBKDDNDCAMOP()
    {
        return $this->BKDDNDCAMOP;
    }

    /**
     * Generated from protobuf field <code>uint64 BKDDNDCAMOP = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBKDDNDCAMOP($var)
    {
        GPBUtil::checkUint64($var);
        $this->BKDDNDCAMOP = $var;

        return $this;
    }

}
