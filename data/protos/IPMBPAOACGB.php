<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IPMBPAOACGB</code>
 */
class IPMBPAOACGB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 NDNHFDBABAJ = 6;</code>
     */
    protected $NDNHFDBABAJ = 0;
    /**
     * Generated from protobuf field <code>.PLDBMBNBHJE IGFNCPGBDIJ = 13;</code>
     */
    protected $IGFNCPGBDIJ = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 AFHHGLJDMLB = 5;</code>
     */
    protected $AFHHGLJDMLB = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $NDNHFDBABAJ
     *     @type \PLDBMBNBHJE $IGFNCPGBDIJ
     *     @type int $retcode
     *     @type int $AFHHGLJDMLB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 NDNHFDBABAJ = 6;</code>
     * @return int
     */
    public function getNDNHFDBABAJ()
    {
        return $this->NDNHFDBABAJ;
    }

    /**
     * Generated from protobuf field <code>uint32 NDNHFDBABAJ = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setNDNHFDBABAJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->NDNHFDBABAJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PLDBMBNBHJE IGFNCPGBDIJ = 13;</code>
     * @return \PLDBMBNBHJE|null
     */
    public function getIGFNCPGBDIJ()
    {
        return $this->IGFNCPGBDIJ;
    }

    public function hasIGFNCPGBDIJ()
    {
        return isset($this->IGFNCPGBDIJ);
    }

    public function clearIGFNCPGBDIJ()
    {
        unset($this->IGFNCPGBDIJ);
    }

    /**
     * Generated from protobuf field <code>.PLDBMBNBHJE IGFNCPGBDIJ = 13;</code>
     * @param \PLDBMBNBHJE $var
     * @return $this
     */
    public function setIGFNCPGBDIJ($var)
    {
        GPBUtil::checkMessage($var, \PLDBMBNBHJE::class);
        $this->IGFNCPGBDIJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AFHHGLJDMLB = 5;</code>
     * @return int
     */
    public function getAFHHGLJDMLB()
    {
        return $this->AFHHGLJDMLB;
    }

    /**
     * Generated from protobuf field <code>uint32 AFHHGLJDMLB = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAFHHGLJDMLB($var)
    {
        GPBUtil::checkUint32($var);
        $this->AFHHGLJDMLB = $var;

        return $this;
    }

}
