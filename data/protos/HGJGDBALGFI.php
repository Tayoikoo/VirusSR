<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HGJGDBALGFI</code>
 */
class HGJGDBALGFI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 OBBNODAFPAK = 14;</code>
     */
    protected $OBBNODAFPAK = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $OBBNODAFPAK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 OBBNODAFPAK = 14;</code>
     * @return int
     */
    public function getOBBNODAFPAK()
    {
        return $this->OBBNODAFPAK;
    }

    /**
     * Generated from protobuf field <code>uint32 OBBNODAFPAK = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setOBBNODAFPAK($var)
    {
        GPBUtil::checkUint32($var);
        $this->OBBNODAFPAK = $var;

        return $this;
    }

}
