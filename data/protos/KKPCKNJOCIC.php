<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KKPCKNJOCIC</code>
 */
class KKPCKNJOCIC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 IINPNALNGKE = 7;</code>
     */
    protected $IINPNALNGKE = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $IINPNALNGKE
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 IINPNALNGKE = 7;</code>
     * @return int
     */
    public function getIINPNALNGKE()
    {
        return $this->IINPNALNGKE;
    }

    /**
     * Generated from protobuf field <code>uint32 IINPNALNGKE = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setIINPNALNGKE($var)
    {
        GPBUtil::checkUint32($var);
        $this->IINPNALNGKE = $var;

        return $this;
    }

}

