<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JJEOMMFEKPI</code>
 */
class JJEOMMFEKPI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool NOBHHFFEGLC = 9;</code>
     */
    protected $NOBHHFFEGLC = false;
    /**
     * Generated from protobuf field <code>bool KAENCJPCIFK = 10;</code>
     */
    protected $KAENCJPCIFK = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $NOBHHFFEGLC
     *     @type bool $KAENCJPCIFK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool NOBHHFFEGLC = 9;</code>
     * @return bool
     */
    public function getNOBHHFFEGLC()
    {
        return $this->NOBHHFFEGLC;
    }

    /**
     * Generated from protobuf field <code>bool NOBHHFFEGLC = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setNOBHHFFEGLC($var)
    {
        GPBUtil::checkBool($var);
        $this->NOBHHFFEGLC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool KAENCJPCIFK = 10;</code>
     * @return bool
     */
    public function getKAENCJPCIFK()
    {
        return $this->KAENCJPCIFK;
    }

    /**
     * Generated from protobuf field <code>bool KAENCJPCIFK = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setKAENCJPCIFK($var)
    {
        GPBUtil::checkBool($var);
        $this->KAENCJPCIFK = $var;

        return $this;
    }

}

