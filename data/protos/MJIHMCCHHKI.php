<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MJIHMCCHHKI</code>
 */
class MJIHMCCHHKI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 PNGDHFGNAMA = 3;</code>
     */
    protected $PNGDHFGNAMA = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $PNGDHFGNAMA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 PNGDHFGNAMA = 3;</code>
     * @return int
     */
    public function getPNGDHFGNAMA()
    {
        return $this->PNGDHFGNAMA;
    }

    /**
     * Generated from protobuf field <code>uint32 PNGDHFGNAMA = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPNGDHFGNAMA($var)
    {
        GPBUtil::checkUint32($var);
        $this->PNGDHFGNAMA = $var;

        return $this;
    }

}

