<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FGMHFCNKNBD</code>
 */
class FGMHFCNKNBD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 EIDKHHGDPAA = 6;</code>
     */
    protected $EIDKHHGDPAA = 0;
    /**
     * Generated from protobuf field <code>bool PHLELGAJABE = 10;</code>
     */
    protected $PHLELGAJABE = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $EIDKHHGDPAA
     *     @type bool $PHLELGAJABE
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 EIDKHHGDPAA = 6;</code>
     * @return int
     */
    public function getEIDKHHGDPAA()
    {
        return $this->EIDKHHGDPAA;
    }

    /**
     * Generated from protobuf field <code>uint32 EIDKHHGDPAA = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setEIDKHHGDPAA($var)
    {
        GPBUtil::checkUint32($var);
        $this->EIDKHHGDPAA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool PHLELGAJABE = 10;</code>
     * @return bool
     */
    public function getPHLELGAJABE()
    {
        return $this->PHLELGAJABE;
    }

    /**
     * Generated from protobuf field <code>bool PHLELGAJABE = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setPHLELGAJABE($var)
    {
        GPBUtil::checkBool($var);
        $this->PHLELGAJABE = $var;

        return $this;
    }

}

