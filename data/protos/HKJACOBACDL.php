<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HKJACOBACDL</code>
 */
class HKJACOBACDL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .JFNDBKOGAAC aahlhaglanp = 3;</code>
     */
    private $aahlhaglanp;
    /**
     * Generated from protobuf field <code>.OBOICHHNOAA egppeoiopbh = 5;</code>
     */
    protected $egppeoiopbh = 0;
    /**
     * Generated from protobuf field <code>uint32 dbcemiifomi = 7;</code>
     */
    protected $dbcemiifomi = 0;
    /**
     * Generated from protobuf field <code>uint64 ohjndokponf = 13;</code>
     */
    protected $ohjndokponf = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 faadiigpged = 11;</code>
     */
    private $faadiigpged;
    /**
     * Generated from protobuf field <code>.ABOIFBHJJJH iohaooialbo = 10;</code>
     */
    protected $iohaooialbo = null;
    /**
     * Generated from protobuf field <code>int32 migjlajogil = 2;</code>
     */
    protected $migjlajogil = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\JFNDBKOGAAC>|\Google\Protobuf\Internal\RepeatedField $aahlhaglanp
     *     @type int $egppeoiopbh
     *     @type int $dbcemiifomi
     *     @type int|string $ohjndokponf
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $faadiigpged
     *     @type \ABOIFBHJJJH $iohaooialbo
     *     @type int $migjlajogil
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .JFNDBKOGAAC aahlhaglanp = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAahlhaglanp()
    {
        return $this->aahlhaglanp;
    }

    /**
     * Generated from protobuf field <code>repeated .JFNDBKOGAAC aahlhaglanp = 3;</code>
     * @param array<\JFNDBKOGAAC>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAahlhaglanp($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \JFNDBKOGAAC::class);
        $this->aahlhaglanp = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.OBOICHHNOAA egppeoiopbh = 5;</code>
     * @return int
     */
    public function getEgppeoiopbh()
    {
        return $this->egppeoiopbh;
    }

    /**
     * Generated from protobuf field <code>.OBOICHHNOAA egppeoiopbh = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setEgppeoiopbh($var)
    {
        GPBUtil::checkEnum($var, \OBOICHHNOAA::class);
        $this->egppeoiopbh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dbcemiifomi = 7;</code>
     * @return int
     */
    public function getDbcemiifomi()
    {
        return $this->dbcemiifomi;
    }

    /**
     * Generated from protobuf field <code>uint32 dbcemiifomi = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setDbcemiifomi($var)
    {
        GPBUtil::checkUint32($var);
        $this->dbcemiifomi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 ohjndokponf = 13;</code>
     * @return int|string
     */
    public function getOhjndokponf()
    {
        return $this->ohjndokponf;
    }

    /**
     * Generated from protobuf field <code>uint64 ohjndokponf = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOhjndokponf($var)
    {
        GPBUtil::checkUint64($var);
        $this->ohjndokponf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 faadiigpged = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFaadiigpged()
    {
        return $this->faadiigpged;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 faadiigpged = 11;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFaadiigpged($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->faadiigpged = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ABOIFBHJJJH iohaooialbo = 10;</code>
     * @return \ABOIFBHJJJH|null
     */
    public function getIohaooialbo()
    {
        return $this->iohaooialbo;
    }

    public function hasIohaooialbo()
    {
        return isset($this->iohaooialbo);
    }

    public function clearIohaooialbo()
    {
        unset($this->iohaooialbo);
    }

    /**
     * Generated from protobuf field <code>.ABOIFBHJJJH iohaooialbo = 10;</code>
     * @param \ABOIFBHJJJH $var
     * @return $this
     */
    public function setIohaooialbo($var)
    {
        GPBUtil::checkMessage($var, \ABOIFBHJJJH::class);
        $this->iohaooialbo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 migjlajogil = 2;</code>
     * @return int
     */
    public function getMigjlajogil()
    {
        return $this->migjlajogil;
    }

    /**
     * Generated from protobuf field <code>int32 migjlajogil = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMigjlajogil($var)
    {
        GPBUtil::checkInt32($var);
        $this->migjlajogil = $var;

        return $this;
    }

}

