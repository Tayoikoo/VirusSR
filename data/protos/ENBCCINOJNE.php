<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ENBCCINOJNE</code>
 */
class ENBCCINOJNE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool OHMGBOGKIJN = 15;</code>
     */
    protected $OHMGBOGKIJN = false;
    /**
     * Generated from protobuf field <code>uint32 GIHOBANKDJB = 12;</code>
     */
    protected $GIHOBANKDJB = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $OHMGBOGKIJN
     *     @type int $GIHOBANKDJB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool OHMGBOGKIJN = 15;</code>
     * @return bool
     */
    public function getOHMGBOGKIJN()
    {
        return $this->OHMGBOGKIJN;
    }

    /**
     * Generated from protobuf field <code>bool OHMGBOGKIJN = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setOHMGBOGKIJN($var)
    {
        GPBUtil::checkBool($var);
        $this->OHMGBOGKIJN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 GIHOBANKDJB = 12;</code>
     * @return int
     */
    public function getGIHOBANKDJB()
    {
        return $this->GIHOBANKDJB;
    }

    /**
     * Generated from protobuf field <code>uint32 GIHOBANKDJB = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setGIHOBANKDJB($var)
    {
        GPBUtil::checkUint32($var);
        $this->GIHOBANKDJB = $var;

        return $this;
    }

}
