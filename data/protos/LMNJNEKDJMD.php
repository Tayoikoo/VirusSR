<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LMNJNEKDJMD</code>
 */
class LMNJNEKDJMD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.GDHMBEFBPHM GOOIEHKAGLC = 5;</code>
     */
    protected $GOOIEHKAGLC = null;
    /**
     * Generated from protobuf field <code>.KFOLABLBPMI CPHNBNHBMKD = 10;</code>
     */
    protected $CPHNBNHBMKD = null;
    /**
     * Generated from protobuf field <code>.DBJBOHKBGEM PEHGKGFPEII = 13;</code>
     */
    protected $PEHGKGFPEII = null;
    /**
     * Generated from protobuf field <code>.SceneInfo scene = 4;</code>
     */
    protected $scene = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GDHMBEFBPHM $GOOIEHKAGLC
     *     @type \KFOLABLBPMI $CPHNBNHBMKD
     *     @type \DBJBOHKBGEM $PEHGKGFPEII
     *     @type \SceneInfo $scene
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.GDHMBEFBPHM GOOIEHKAGLC = 5;</code>
     * @return \GDHMBEFBPHM|null
     */
    public function getGOOIEHKAGLC()
    {
        return $this->GOOIEHKAGLC;
    }

    public function hasGOOIEHKAGLC()
    {
        return isset($this->GOOIEHKAGLC);
    }

    public function clearGOOIEHKAGLC()
    {
        unset($this->GOOIEHKAGLC);
    }

    /**
     * Generated from protobuf field <code>.GDHMBEFBPHM GOOIEHKAGLC = 5;</code>
     * @param \GDHMBEFBPHM $var
     * @return $this
     */
    public function setGOOIEHKAGLC($var)
    {
        GPBUtil::checkMessage($var, \GDHMBEFBPHM::class);
        $this->GOOIEHKAGLC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.KFOLABLBPMI CPHNBNHBMKD = 10;</code>
     * @return \KFOLABLBPMI|null
     */
    public function getCPHNBNHBMKD()
    {
        return $this->CPHNBNHBMKD;
    }

    public function hasCPHNBNHBMKD()
    {
        return isset($this->CPHNBNHBMKD);
    }

    public function clearCPHNBNHBMKD()
    {
        unset($this->CPHNBNHBMKD);
    }

    /**
     * Generated from protobuf field <code>.KFOLABLBPMI CPHNBNHBMKD = 10;</code>
     * @param \KFOLABLBPMI $var
     * @return $this
     */
    public function setCPHNBNHBMKD($var)
    {
        GPBUtil::checkMessage($var, \KFOLABLBPMI::class);
        $this->CPHNBNHBMKD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.DBJBOHKBGEM PEHGKGFPEII = 13;</code>
     * @return \DBJBOHKBGEM|null
     */
    public function getPEHGKGFPEII()
    {
        return $this->PEHGKGFPEII;
    }

    public function hasPEHGKGFPEII()
    {
        return isset($this->PEHGKGFPEII);
    }

    public function clearPEHGKGFPEII()
    {
        unset($this->PEHGKGFPEII);
    }

    /**
     * Generated from protobuf field <code>.DBJBOHKBGEM PEHGKGFPEII = 13;</code>
     * @param \DBJBOHKBGEM $var
     * @return $this
     */
    public function setPEHGKGFPEII($var)
    {
        GPBUtil::checkMessage($var, \DBJBOHKBGEM::class);
        $this->PEHGKGFPEII = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.SceneInfo scene = 4;</code>
     * @return \SceneInfo|null
     */
    public function getScene()
    {
        return $this->scene;
    }

    public function hasScene()
    {
        return isset($this->scene);
    }

    public function clearScene()
    {
        unset($this->scene);
    }

    /**
     * Generated from protobuf field <code>.SceneInfo scene = 4;</code>
     * @param \SceneInfo $var
     * @return $this
     */
    public function setScene($var)
    {
        GPBUtil::checkMessage($var, \SceneInfo::class);
        $this->scene = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

