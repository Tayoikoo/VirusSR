<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CDGKNJKNJDP</code>
 */
class CDGKNJKNJDP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 4;</code>
     */
    protected $GPKEAKPHIPA = 0;
    /**
     * Generated from protobuf field <code>uint32 FHEMOKPMGCC = 7;</code>
     */
    protected $FHEMOKPMGCC = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GPKEAKPHIPA
     *     @type int $FHEMOKPMGCC
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 4;</code>
     * @return int
     */
    public function getGPKEAKPHIPA()
    {
        return $this->GPKEAKPHIPA;
    }

    /**
     * Generated from protobuf field <code>uint32 GPKEAKPHIPA = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setGPKEAKPHIPA($var)
    {
        GPBUtil::checkUint32($var);
        $this->GPKEAKPHIPA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 FHEMOKPMGCC = 7;</code>
     * @return int
     */
    public function getFHEMOKPMGCC()
    {
        return $this->FHEMOKPMGCC;
    }

    /**
     * Generated from protobuf field <code>uint32 FHEMOKPMGCC = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setFHEMOKPMGCC($var)
    {
        GPBUtil::checkUint32($var);
        $this->FHEMOKPMGCC = $var;

        return $this;
    }

}

