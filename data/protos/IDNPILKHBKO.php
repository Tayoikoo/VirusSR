<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IDNPILKHBKO</code>
 */
class IDNPILKHBKO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool AHGJGKMOKAP = 1;</code>
     */
    protected $AHGJGKMOKAP = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $AHGJGKMOKAP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool AHGJGKMOKAP = 1;</code>
     * @return bool
     */
    public function getAHGJGKMOKAP()
    {
        return $this->AHGJGKMOKAP;
    }

    /**
     * Generated from protobuf field <code>bool AHGJGKMOKAP = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAHGJGKMOKAP($var)
    {
        GPBUtil::checkBool($var);
        $this->AHGJGKMOKAP = $var;

        return $this;
    }

}

