<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IKEFMMCEIDM</code>
 */
class IKEFMMCEIDM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.PKHLAAOBOEK CPAMDPLGPHM = 9;</code>
     */
    protected $CPAMDPLGPHM = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \PKHLAAOBOEK $CPAMDPLGPHM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.PKHLAAOBOEK CPAMDPLGPHM = 9;</code>
     * @return \PKHLAAOBOEK|null
     */
    public function getCPAMDPLGPHM()
    {
        return $this->CPAMDPLGPHM;
    }

    public function hasCPAMDPLGPHM()
    {
        return isset($this->CPAMDPLGPHM);
    }

    public function clearCPAMDPLGPHM()
    {
        unset($this->CPAMDPLGPHM);
    }

    /**
     * Generated from protobuf field <code>.PKHLAAOBOEK CPAMDPLGPHM = 9;</code>
     * @param \PKHLAAOBOEK $var
     * @return $this
     */
    public function setCPAMDPLGPHM($var)
    {
        GPBUtil::checkMessage($var, \PKHLAAOBOEK::class);
        $this->CPAMDPLGPHM = $var;

        return $this;
    }

}
