<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LECLPMBCAEM</code>
 */
class LECLPMBCAEM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 CFBAHAPGBFC = 5;</code>
     */
    protected $CFBAHAPGBFC = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CFBAHAPGBFC
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 CFBAHAPGBFC = 5;</code>
     * @return int
     */
    public function getCFBAHAPGBFC()
    {
        return $this->CFBAHAPGBFC;
    }

    /**
     * Generated from protobuf field <code>uint32 CFBAHAPGBFC = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCFBAHAPGBFC($var)
    {
        GPBUtil::checkUint32($var);
        $this->CFBAHAPGBFC = $var;

        return $this;
    }

}

