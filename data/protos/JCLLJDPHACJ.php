<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JCLLJDPHACJ</code>
 */
class JCLLJDPHACJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.EOJIMNJPNPN KFLBOPELPED = 6;</code>
     */
    protected $KFLBOPELPED = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \EOJIMNJPNPN $KFLBOPELPED
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.EOJIMNJPNPN KFLBOPELPED = 6;</code>
     * @return \EOJIMNJPNPN|null
     */
    public function getKFLBOPELPED()
    {
        return $this->KFLBOPELPED;
    }

    public function hasKFLBOPELPED()
    {
        return isset($this->KFLBOPELPED);
    }

    public function clearKFLBOPELPED()
    {
        unset($this->KFLBOPELPED);
    }

    /**
     * Generated from protobuf field <code>.EOJIMNJPNPN KFLBOPELPED = 6;</code>
     * @param \EOJIMNJPNPN $var
     * @return $this
     */
    public function setKFLBOPELPED($var)
    {
        GPBUtil::checkMessage($var, \EOJIMNJPNPN::class);
        $this->KFLBOPELPED = $var;

        return $this;
    }

}
