<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KIANEOJAPOK</code>
 */
class KIANEOJAPOK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 BNCNMEGFHPM = 15;</code>
     */
    protected $BNCNMEGFHPM = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $BNCNMEGFHPM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 BNCNMEGFHPM = 15;</code>
     * @return int
     */
    public function getBNCNMEGFHPM()
    {
        return $this->BNCNMEGFHPM;
    }

    /**
     * Generated from protobuf field <code>uint32 BNCNMEGFHPM = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setBNCNMEGFHPM($var)
    {
        GPBUtil::checkUint32($var);
        $this->BNCNMEGFHPM = $var;

        return $this;
    }

}

