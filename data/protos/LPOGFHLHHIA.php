<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LPOGFHLHHIA</code>
 */
class LPOGFHLHHIA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 NHNPPIHJJMH = 2;</code>
     */
    protected $NHNPPIHJJMH = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $NHNPPIHJJMH
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 NHNPPIHJJMH = 2;</code>
     * @return int
     */
    public function getNHNPPIHJJMH()
    {
        return $this->NHNPPIHJJMH;
    }

    /**
     * Generated from protobuf field <code>uint32 NHNPPIHJJMH = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNHNPPIHJJMH($var)
    {
        GPBUtil::checkUint32($var);
        $this->NHNPPIHJJMH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}
