<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KCIJKEKCIOK</code>
 */
class KCIJKEKCIOK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 7;</code>
     */
    protected $OMBLHJDKEJA = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $OMBLHJDKEJA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 7;</code>
     * @return int
     */
    public function getOMBLHJDKEJA()
    {
        return $this->OMBLHJDKEJA;
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setOMBLHJDKEJA($var)
    {
        GPBUtil::checkUint32($var);
        $this->OMBLHJDKEJA = $var;

        return $this;
    }

}

