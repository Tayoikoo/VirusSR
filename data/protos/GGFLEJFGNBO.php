<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GGFLEJFGNBO</code>
 */
class GGFLEJFGNBO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 AHMOOHAPCMC = 8;</code>
     */
    protected $AHMOOHAPCMC = 0;
    /**
     * Generated from protobuf field <code>uint32 NJEDCJAAKAI = 14;</code>
     */
    protected $NJEDCJAAKAI = 0;
    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 6;</code>
     */
    protected $OFAGGKBMPJN = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $AHMOOHAPCMC
     *     @type int $NJEDCJAAKAI
     *     @type int $OFAGGKBMPJN
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 AHMOOHAPCMC = 8;</code>
     * @return int
     */
    public function getAHMOOHAPCMC()
    {
        return $this->AHMOOHAPCMC;
    }

    /**
     * Generated from protobuf field <code>uint32 AHMOOHAPCMC = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setAHMOOHAPCMC($var)
    {
        GPBUtil::checkUint32($var);
        $this->AHMOOHAPCMC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NJEDCJAAKAI = 14;</code>
     * @return int
     */
    public function getNJEDCJAAKAI()
    {
        return $this->NJEDCJAAKAI;
    }

    /**
     * Generated from protobuf field <code>uint32 NJEDCJAAKAI = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setNJEDCJAAKAI($var)
    {
        GPBUtil::checkUint32($var);
        $this->NJEDCJAAKAI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 6;</code>
     * @return int
     */
    public function getOFAGGKBMPJN()
    {
        return $this->OFAGGKBMPJN;
    }

    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOFAGGKBMPJN($var)
    {
        GPBUtil::checkUint32($var);
        $this->OFAGGKBMPJN = $var;

        return $this;
    }

}
