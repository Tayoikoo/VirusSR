<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JLFEBCHDOIN</code>
 */
class JLFEBCHDOIN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 DPOMMIEBKFO = 1;</code>
     */
    protected $DPOMMIEBKFO = 0;
    /**
     * Generated from protobuf field <code>uint32 FGCHMCCHEOD = 9;</code>
     */
    protected $FGCHMCCHEOD = 0;
    /**
     * Generated from protobuf field <code>uint32 OHEKKIHEJIO = 15;</code>
     */
    protected $OHEKKIHEJIO = 0;
    /**
     * Generated from protobuf field <code>uint32 GOABEHOOEBJ = 4;</code>
     */
    protected $GOABEHOOEBJ = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 KIKDJBEDIMB = 11;</code>
     */
    protected $KIKDJBEDIMB = 0;
    /**
     * Generated from protobuf field <code>int64 IEKHFILHDPG = 5;</code>
     */
    protected $IEKHFILHDPG = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $DPOMMIEBKFO
     *     @type int $FGCHMCCHEOD
     *     @type int $OHEKKIHEJIO
     *     @type int $GOABEHOOEBJ
     *     @type int $retcode
     *     @type int $KIKDJBEDIMB
     *     @type int|string $IEKHFILHDPG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 DPOMMIEBKFO = 1;</code>
     * @return int
     */
    public function getDPOMMIEBKFO()
    {
        return $this->DPOMMIEBKFO;
    }

    /**
     * Generated from protobuf field <code>uint32 DPOMMIEBKFO = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDPOMMIEBKFO($var)
    {
        GPBUtil::checkUint32($var);
        $this->DPOMMIEBKFO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 FGCHMCCHEOD = 9;</code>
     * @return int
     */
    public function getFGCHMCCHEOD()
    {
        return $this->FGCHMCCHEOD;
    }

    /**
     * Generated from protobuf field <code>uint32 FGCHMCCHEOD = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setFGCHMCCHEOD($var)
    {
        GPBUtil::checkUint32($var);
        $this->FGCHMCCHEOD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OHEKKIHEJIO = 15;</code>
     * @return int
     */
    public function getOHEKKIHEJIO()
    {
        return $this->OHEKKIHEJIO;
    }

    /**
     * Generated from protobuf field <code>uint32 OHEKKIHEJIO = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setOHEKKIHEJIO($var)
    {
        GPBUtil::checkUint32($var);
        $this->OHEKKIHEJIO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 GOABEHOOEBJ = 4;</code>
     * @return int
     */
    public function getGOABEHOOEBJ()
    {
        return $this->GOABEHOOEBJ;
    }

    /**
     * Generated from protobuf field <code>uint32 GOABEHOOEBJ = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setGOABEHOOEBJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->GOABEHOOEBJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
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
     * Generated from protobuf field <code>uint32 KIKDJBEDIMB = 11;</code>
     * @return int
     */
    public function getKIKDJBEDIMB()
    {
        return $this->KIKDJBEDIMB;
    }

    /**
     * Generated from protobuf field <code>uint32 KIKDJBEDIMB = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setKIKDJBEDIMB($var)
    {
        GPBUtil::checkUint32($var);
        $this->KIKDJBEDIMB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 IEKHFILHDPG = 5;</code>
     * @return int|string
     */
    public function getIEKHFILHDPG()
    {
        return $this->IEKHFILHDPG;
    }

    /**
     * Generated from protobuf field <code>int64 IEKHFILHDPG = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIEKHFILHDPG($var)
    {
        GPBUtil::checkInt64($var);
        $this->IEKHFILHDPG = $var;

        return $this;
    }

}
