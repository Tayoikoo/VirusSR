<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MABACLHABGN</code>
 */
class MABACLHABGN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 basic_type = 9;</code>
     */
    protected $basic_type = 0;
    /**
     * Generated from protobuf field <code>uint32 NBBKLJBJPNP = 1;</code>
     */
    protected $NBBKLJBJPNP = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $basic_type
     *     @type int $NBBKLJBJPNP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 basic_type = 9;</code>
     * @return int
     */
    public function getBasicType()
    {
        return $this->basic_type;
    }

    /**
     * Generated from protobuf field <code>uint32 basic_type = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setBasicType($var)
    {
        GPBUtil::checkUint32($var);
        $this->basic_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NBBKLJBJPNP = 1;</code>
     * @return int
     */
    public function getNBBKLJBJPNP()
    {
        return $this->NBBKLJBJPNP;
    }

    /**
     * Generated from protobuf field <code>uint32 NBBKLJBJPNP = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNBBKLJBJPNP($var)
    {
        GPBUtil::checkUint32($var);
        $this->NBBKLJBJPNP = $var;

        return $this;
    }

}

