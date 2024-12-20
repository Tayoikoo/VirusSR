<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BKNHOHPNCLG</code>
 */
class BKNHOHPNCLG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 avatar_id = 1;</code>
     */
    protected $avatar_id = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 hocibkaedll = 2;</code>
     */
    private $hocibkaedll;
    /**
     * Generated from protobuf field <code>uint32 source = 3;</code>
     */
    protected $source = 0;
    /**
     * Generated from protobuf field <code>double damage = 4;</code>
     */
    protected $damage = 0.0;
    /**
     * Generated from protobuf field <code>repeated uint32 ehjhncjnmdo = 5;</code>
     */
    private $ehjhncjnmdo;
    /**
     * Generated from protobuf field <code>int32 fonpdaelofa = 6;</code>
     */
    protected $fonpdaelofa = 0;
    /**
     * Generated from protobuf field <code>double jhofclmchjm = 7;</code>
     */
    protected $jhofclmchjm = 0.0;
    /**
     * Generated from protobuf field <code>uint32 gdhmpkiaego = 8;</code>
     */
    protected $gdhmpkiaego = 0;
    /**
     * Generated from protobuf field <code>uint32 wave = 9;</code>
     */
    protected $wave = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $avatar_id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $hocibkaedll
     *     @type int $source
     *     @type float $damage
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $ehjhncjnmdo
     *     @type int $fonpdaelofa
     *     @type float $jhofclmchjm
     *     @type int $gdhmpkiaego
     *     @type int $wave
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 avatar_id = 1;</code>
     * @return int
     */
    public function getAvatarId()
    {
        return $this->avatar_id;
    }

    /**
     * Generated from protobuf field <code>uint32 avatar_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarId($var)
    {
        GPBUtil::checkUint32($var);
        $this->avatar_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 hocibkaedll = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHocibkaedll()
    {
        return $this->hocibkaedll;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 hocibkaedll = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHocibkaedll($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->hocibkaedll = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 source = 3;</code>
     * @return int
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Generated from protobuf field <code>uint32 source = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkUint32($var);
        $this->source = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double damage = 4;</code>
     * @return float
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Generated from protobuf field <code>double damage = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDamage($var)
    {
        GPBUtil::checkDouble($var);
        $this->damage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ehjhncjnmdo = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEhjhncjnmdo()
    {
        return $this->ehjhncjnmdo;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ehjhncjnmdo = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEhjhncjnmdo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->ehjhncjnmdo = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 fonpdaelofa = 6;</code>
     * @return int
     */
    public function getFonpdaelofa()
    {
        return $this->fonpdaelofa;
    }

    /**
     * Generated from protobuf field <code>int32 fonpdaelofa = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setFonpdaelofa($var)
    {
        GPBUtil::checkInt32($var);
        $this->fonpdaelofa = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double jhofclmchjm = 7;</code>
     * @return float
     */
    public function getJhofclmchjm()
    {
        return $this->jhofclmchjm;
    }

    /**
     * Generated from protobuf field <code>double jhofclmchjm = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setJhofclmchjm($var)
    {
        GPBUtil::checkDouble($var);
        $this->jhofclmchjm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gdhmpkiaego = 8;</code>
     * @return int
     */
    public function getGdhmpkiaego()
    {
        return $this->gdhmpkiaego;
    }

    /**
     * Generated from protobuf field <code>uint32 gdhmpkiaego = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setGdhmpkiaego($var)
    {
        GPBUtil::checkUint32($var);
        $this->gdhmpkiaego = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 wave = 9;</code>
     * @return int
     */
    public function getWave()
    {
        return $this->wave;
    }

    /**
     * Generated from protobuf field <code>uint32 wave = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setWave($var)
    {
        GPBUtil::checkUint32($var);
        $this->wave = $var;

        return $this;
    }

}

