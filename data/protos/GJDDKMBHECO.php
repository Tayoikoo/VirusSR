<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GJDDKMBHECO</code>
 */
class GJDDKMBHECO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 config_id = 2;</code>
     */
    protected $config_id = 0;
    /**
     * Generated from protobuf field <code>uint32 JCFMBCNIHLK = 3;</code>
     */
    protected $JCFMBCNIHLK = 0;
    /**
     * Generated from protobuf field <code>uint32 MOCLGIGGHNE = 10;</code>
     */
    protected $MOCLGIGGHNE = 0;
    protected $GCLMJJCMDNF;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \PCNPNIAJHEJ $ndagifbopcp
     *     @type \KPEMDIANBGO $bghalkpkcoa
     *     @type \LCIGGKJMKJL $mgeneagklol
     *     @type int $config_id
     *     @type int $JCFMBCNIHLK
     *     @type int $MOCLGIGGHNE
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.PCNPNIAJHEJ ndagifbopcp = 11;</code>
     * @return \PCNPNIAJHEJ|null
     */
    public function getNdagifbopcp()
    {
        return $this->readOneof(11);
    }

    public function hasNdagifbopcp()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.PCNPNIAJHEJ ndagifbopcp = 11;</code>
     * @param \PCNPNIAJHEJ $var
     * @return $this
     */
    public function setNdagifbopcp($var)
    {
        GPBUtil::checkMessage($var, \PCNPNIAJHEJ::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.KPEMDIANBGO bghalkpkcoa = 1;</code>
     * @return \KPEMDIANBGO|null
     */
    public function getBghalkpkcoa()
    {
        return $this->readOneof(1);
    }

    public function hasBghalkpkcoa()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.KPEMDIANBGO bghalkpkcoa = 1;</code>
     * @param \KPEMDIANBGO $var
     * @return $this
     */
    public function setBghalkpkcoa($var)
    {
        GPBUtil::checkMessage($var, \KPEMDIANBGO::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.LCIGGKJMKJL mgeneagklol = 8;</code>
     * @return \LCIGGKJMKJL|null
     */
    public function getMgeneagklol()
    {
        return $this->readOneof(8);
    }

    public function hasMgeneagklol()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.LCIGGKJMKJL mgeneagklol = 8;</code>
     * @param \LCIGGKJMKJL $var
     * @return $this
     */
    public function setMgeneagklol($var)
    {
        GPBUtil::checkMessage($var, \LCIGGKJMKJL::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 config_id = 2;</code>
     * @return int
     */
    public function getConfigId()
    {
        return $this->config_id;
    }

    /**
     * Generated from protobuf field <code>uint32 config_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setConfigId($var)
    {
        GPBUtil::checkUint32($var);
        $this->config_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 JCFMBCNIHLK = 3;</code>
     * @return int
     */
    public function getJCFMBCNIHLK()
    {
        return $this->JCFMBCNIHLK;
    }

    /**
     * Generated from protobuf field <code>uint32 JCFMBCNIHLK = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setJCFMBCNIHLK($var)
    {
        GPBUtil::checkUint32($var);
        $this->JCFMBCNIHLK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 MOCLGIGGHNE = 10;</code>
     * @return int
     */
    public function getMOCLGIGGHNE()
    {
        return $this->MOCLGIGGHNE;
    }

    /**
     * Generated from protobuf field <code>uint32 MOCLGIGGHNE = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setMOCLGIGGHNE($var)
    {
        GPBUtil::checkUint32($var);
        $this->MOCLGIGGHNE = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getGCLMJJCMDNF()
    {
        return $this->whichOneof("GCLMJJCMDNF");
    }

}

