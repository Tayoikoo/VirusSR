<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MAOCCAPKJNE</code>
 */
class MAOCCAPKJNE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 gjipkccieml = 1;</code>
     */
    protected $gjipkccieml = 0;
    /**
     * Generated from protobuf field <code>uint32 iaoeomfhleb = 2;</code>
     */
    protected $iaoeomfhleb = 0;
    /**
     * Generated from protobuf field <code>uint32 decaemjponm = 3;</code>
     */
    protected $decaemjponm = 0;
    /**
     * Generated from protobuf field <code>uint32 nmjofbddlal = 4;</code>
     */
    protected $nmjofbddlal = 0;
    /**
     * Generated from protobuf field <code>uint32 lecbngdigbd = 5;</code>
     */
    protected $lecbngdigbd = 0;
    /**
     * Generated from protobuf field <code>uint32 cmnfkidhnge = 6;</code>
     */
    protected $cmnfkidhnge = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 boss_info = 7;</code>
     */
    private $boss_info;
    /**
     * Generated from protobuf field <code>repeated .CLNOHAGLFKH gecpcopjpna = 8;</code>
     */
    private $gecpcopjpna;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $gjipkccieml
     *     @type int $iaoeomfhleb
     *     @type int $decaemjponm
     *     @type int $nmjofbddlal
     *     @type int $lecbngdigbd
     *     @type int $cmnfkidhnge
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $boss_info
     *     @type array<\CLNOHAGLFKH>|\Google\Protobuf\Internal\RepeatedField $gecpcopjpna
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 gjipkccieml = 1;</code>
     * @return int
     */
    public function getGjipkccieml()
    {
        return $this->gjipkccieml;
    }

    /**
     * Generated from protobuf field <code>uint32 gjipkccieml = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGjipkccieml($var)
    {
        GPBUtil::checkUint32($var);
        $this->gjipkccieml = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 iaoeomfhleb = 2;</code>
     * @return int
     */
    public function getIaoeomfhleb()
    {
        return $this->iaoeomfhleb;
    }

    /**
     * Generated from protobuf field <code>uint32 iaoeomfhleb = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setIaoeomfhleb($var)
    {
        GPBUtil::checkUint32($var);
        $this->iaoeomfhleb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 decaemjponm = 3;</code>
     * @return int
     */
    public function getDecaemjponm()
    {
        return $this->decaemjponm;
    }

    /**
     * Generated from protobuf field <code>uint32 decaemjponm = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDecaemjponm($var)
    {
        GPBUtil::checkUint32($var);
        $this->decaemjponm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 nmjofbddlal = 4;</code>
     * @return int
     */
    public function getNmjofbddlal()
    {
        return $this->nmjofbddlal;
    }

    /**
     * Generated from protobuf field <code>uint32 nmjofbddlal = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNmjofbddlal($var)
    {
        GPBUtil::checkUint32($var);
        $this->nmjofbddlal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lecbngdigbd = 5;</code>
     * @return int
     */
    public function getLecbngdigbd()
    {
        return $this->lecbngdigbd;
    }

    /**
     * Generated from protobuf field <code>uint32 lecbngdigbd = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLecbngdigbd($var)
    {
        GPBUtil::checkUint32($var);
        $this->lecbngdigbd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cmnfkidhnge = 6;</code>
     * @return int
     */
    public function getCmnfkidhnge()
    {
        return $this->cmnfkidhnge;
    }

    /**
     * Generated from protobuf field <code>uint32 cmnfkidhnge = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCmnfkidhnge($var)
    {
        GPBUtil::checkUint32($var);
        $this->cmnfkidhnge = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 boss_info = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBossInfo()
    {
        return $this->boss_info;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 boss_info = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBossInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->boss_info = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .CLNOHAGLFKH gecpcopjpna = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGecpcopjpna()
    {
        return $this->gecpcopjpna;
    }

    /**
     * Generated from protobuf field <code>repeated .CLNOHAGLFKH gecpcopjpna = 8;</code>
     * @param array<\CLNOHAGLFKH>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGecpcopjpna($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CLNOHAGLFKH::class);
        $this->gecpcopjpna = $arr;

        return $this;
    }

}

