<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CEDCFKLCBAN (6559)
 *
 * Generated from protobuf message <code>EnterEraFlipperRegionCsReq</code>
 */
class EnterEraFlipperRegionCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 state = 13;</code>
     */
    protected $state = 0;
    /**
     * Generated from protobuf field <code>uint32 fdggllhcpli = 15;</code>
     */
    protected $fdggllhcpli = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *     @type int $fdggllhcpli
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 state = 13;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>uint32 state = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkUint32($var);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 fdggllhcpli = 15;</code>
     * @return int
     */
    public function getFdggllhcpli()
    {
        return $this->fdggllhcpli;
    }

    /**
     * Generated from protobuf field <code>uint32 fdggllhcpli = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setFdggllhcpli($var)
    {
        GPBUtil::checkUint32($var);
        $this->fdggllhcpli = $var;

        return $this;
    }

}

