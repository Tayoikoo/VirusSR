<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HFOIPAAEIAF (5630)
 *
 * Generated from protobuf message <code>SelectRogueCommonDialogueOptionScRsp</code>
 */
class SelectRogueCommonDialogueOptionScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 cjbdahmahkn = 15;</code>
     */
    protected $cjbdahmahkn = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 aplhhajibep = 1;</code>
     */
    private $aplhhajibep;
    /**
     * Generated from protobuf field <code>.DOKFNAEEADE hkpckplepol = 6;</code>
     */
    protected $hkpckplepol = null;
    /**
     * Generated from protobuf field <code>bool kjlfhopkppa = 5;</code>
     */
    protected $kjlfhopkppa = false;
    /**
     * Generated from protobuf field <code>uint32 event_unique_id = 3;</code>
     */
    protected $event_unique_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cjbdahmahkn
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $aplhhajibep
     *     @type \DOKFNAEEADE $hkpckplepol
     *     @type bool $kjlfhopkppa
     *     @type int $event_unique_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 cjbdahmahkn = 15;</code>
     * @return int
     */
    public function getCjbdahmahkn()
    {
        return $this->cjbdahmahkn;
    }

    /**
     * Generated from protobuf field <code>uint32 cjbdahmahkn = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setCjbdahmahkn($var)
    {
        GPBUtil::checkUint32($var);
        $this->cjbdahmahkn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
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
     * Generated from protobuf field <code>repeated uint32 aplhhajibep = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAplhhajibep()
    {
        return $this->aplhhajibep;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 aplhhajibep = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAplhhajibep($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->aplhhajibep = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.DOKFNAEEADE hkpckplepol = 6;</code>
     * @return \DOKFNAEEADE|null
     */
    public function getHkpckplepol()
    {
        return $this->hkpckplepol;
    }

    public function hasHkpckplepol()
    {
        return isset($this->hkpckplepol);
    }

    public function clearHkpckplepol()
    {
        unset($this->hkpckplepol);
    }

    /**
     * Generated from protobuf field <code>.DOKFNAEEADE hkpckplepol = 6;</code>
     * @param \DOKFNAEEADE $var
     * @return $this
     */
    public function setHkpckplepol($var)
    {
        GPBUtil::checkMessage($var, \DOKFNAEEADE::class);
        $this->hkpckplepol = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool kjlfhopkppa = 5;</code>
     * @return bool
     */
    public function getKjlfhopkppa()
    {
        return $this->kjlfhopkppa;
    }

    /**
     * Generated from protobuf field <code>bool kjlfhopkppa = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setKjlfhopkppa($var)
    {
        GPBUtil::checkBool($var);
        $this->kjlfhopkppa = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 event_unique_id = 3;</code>
     * @return int
     */
    public function getEventUniqueId()
    {
        return $this->event_unique_id;
    }

    /**
     * Generated from protobuf field <code>uint32 event_unique_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEventUniqueId($var)
    {
        GPBUtil::checkUint32($var);
        $this->event_unique_id = $var;

        return $this;
    }

}

