<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NKCAJIPCBAI</code>
 */
class NKCAJIPCBAI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 FABMDJGFNGD = 3;</code>
     */
    protected $FABMDJGFNGD = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $FABMDJGFNGD
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 FABMDJGFNGD = 3;</code>
     * @return int
     */
    public function getFABMDJGFNGD()
    {
        return $this->FABMDJGFNGD;
    }

    /**
     * Generated from protobuf field <code>uint32 FABMDJGFNGD = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFABMDJGFNGD($var)
    {
        GPBUtil::checkUint32($var);
        $this->FABMDJGFNGD = $var;

        return $this;
    }

}

