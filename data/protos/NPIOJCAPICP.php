<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NPIOJCAPICP</code>
 */
class NPIOJCAPICP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ALPLICBFMAO DOGFMMDKGDC = 14;</code>
     */
    protected $DOGFMMDKGDC = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ALPLICBFMAO $DOGFMMDKGDC
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ALPLICBFMAO DOGFMMDKGDC = 14;</code>
     * @return \ALPLICBFMAO|null
     */
    public function getDOGFMMDKGDC()
    {
        return $this->DOGFMMDKGDC;
    }

    public function hasDOGFMMDKGDC()
    {
        return isset($this->DOGFMMDKGDC);
    }

    public function clearDOGFMMDKGDC()
    {
        unset($this->DOGFMMDKGDC);
    }

    /**
     * Generated from protobuf field <code>.ALPLICBFMAO DOGFMMDKGDC = 14;</code>
     * @param \ALPLICBFMAO $var
     * @return $this
     */
    public function setDOGFMMDKGDC($var)
    {
        GPBUtil::checkMessage($var, \ALPLICBFMAO::class);
        $this->DOGFMMDKGDC = $var;

        return $this;
    }

}

