<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DDOLOAHPEGO</code>
 */
class DDOLOAHPEGO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 efccjkghjdk = 10;</code>
     */
    protected $efccjkghjdk = 0;
    /**
     * Generated from protobuf field <code>uint32 num = 12;</code>
     */
    protected $num = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $efccjkghjdk
     *     @type int $num
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 efccjkghjdk = 10;</code>
     * @return int
     */
    public function getEfccjkghjdk()
    {
        return $this->efccjkghjdk;
    }

    /**
     * Generated from protobuf field <code>uint32 efccjkghjdk = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setEfccjkghjdk($var)
    {
        GPBUtil::checkUint32($var);
        $this->efccjkghjdk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 num = 12;</code>
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Generated from protobuf field <code>uint32 num = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setNum($var)
    {
        GPBUtil::checkUint32($var);
        $this->num = $var;

        return $this;
    }

}

