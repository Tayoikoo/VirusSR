<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EGGKPLEBLOJ</code>
 */
class EGGKPLEBLOJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 FAFGOIMCDPF = 13;</code>
     */
    protected $FAFGOIMCDPF = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $FAFGOIMCDPF
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 FAFGOIMCDPF = 13;</code>
     * @return int
     */
    public function getFAFGOIMCDPF()
    {
        return $this->FAFGOIMCDPF;
    }

    /**
     * Generated from protobuf field <code>uint32 FAFGOIMCDPF = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setFAFGOIMCDPF($var)
    {
        GPBUtil::checkUint32($var);
        $this->FAFGOIMCDPF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
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
