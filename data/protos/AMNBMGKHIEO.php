<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AMNBMGKHIEO</code>
 */
class AMNBMGKHIEO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 NHBIBLNJLNP = 11;</code>
     */
    protected $NHBIBLNJLNP = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $NHBIBLNJLNP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 NHBIBLNJLNP = 11;</code>
     * @return int
     */
    public function getNHBIBLNJLNP()
    {
        return $this->NHBIBLNJLNP;
    }

    /**
     * Generated from protobuf field <code>uint32 NHBIBLNJLNP = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setNHBIBLNJLNP($var)
    {
        GPBUtil::checkUint32($var);
        $this->NHBIBLNJLNP = $var;

        return $this;
    }

}

