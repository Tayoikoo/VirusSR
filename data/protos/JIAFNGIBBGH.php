<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JIAFNGIBBGH</code>
 */
class JIAFNGIBBGH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ilofimodien = 12;</code>
     */
    protected $ilofimodien = 0;
    /**
     * Generated from protobuf field <code>bool khknacfljnf = 4;</code>
     */
    protected $khknacfljnf = false;
    /**
     * Generated from protobuf field <code>uint32 magemnhpnen = 9;</code>
     */
    protected $magemnhpnen = 0;
    /**
     * Generated from protobuf field <code>bool ddeimmkhmna = 2;</code>
     */
    protected $ddeimmkhmna = false;
    /**
     * Generated from protobuf field <code>bool epdalegaefp = 11;</code>
     */
    protected $epdalegaefp = false;
    /**
     * Generated from protobuf field <code>repeated .DNEKJKACNJM buff_list = 1615;</code>
     */
    private $buff_list;
    /**
     * Generated from protobuf field <code>bool idgfpjaiblj = 5;</code>
     */
    protected $idgfpjaiblj = false;
    /**
     * Generated from protobuf field <code>uint32 obhilfaeclk = 8;</code>
     */
    protected $obhilfaeclk = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ilofimodien
     *     @type bool $khknacfljnf
     *     @type int $magemnhpnen
     *     @type bool $ddeimmkhmna
     *     @type bool $epdalegaefp
     *     @type array<\DNEKJKACNJM>|\Google\Protobuf\Internal\RepeatedField $buff_list
     *     @type bool $idgfpjaiblj
     *     @type int $obhilfaeclk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ilofimodien = 12;</code>
     * @return int
     */
    public function getIlofimodien()
    {
        return $this->ilofimodien;
    }

    /**
     * Generated from protobuf field <code>uint32 ilofimodien = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setIlofimodien($var)
    {
        GPBUtil::checkUint32($var);
        $this->ilofimodien = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool khknacfljnf = 4;</code>
     * @return bool
     */
    public function getKhknacfljnf()
    {
        return $this->khknacfljnf;
    }

    /**
     * Generated from protobuf field <code>bool khknacfljnf = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setKhknacfljnf($var)
    {
        GPBUtil::checkBool($var);
        $this->khknacfljnf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 magemnhpnen = 9;</code>
     * @return int
     */
    public function getMagemnhpnen()
    {
        return $this->magemnhpnen;
    }

    /**
     * Generated from protobuf field <code>uint32 magemnhpnen = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setMagemnhpnen($var)
    {
        GPBUtil::checkUint32($var);
        $this->magemnhpnen = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ddeimmkhmna = 2;</code>
     * @return bool
     */
    public function getDdeimmkhmna()
    {
        return $this->ddeimmkhmna;
    }

    /**
     * Generated from protobuf field <code>bool ddeimmkhmna = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDdeimmkhmna($var)
    {
        GPBUtil::checkBool($var);
        $this->ddeimmkhmna = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool epdalegaefp = 11;</code>
     * @return bool
     */
    public function getEpdalegaefp()
    {
        return $this->epdalegaefp;
    }

    /**
     * Generated from protobuf field <code>bool epdalegaefp = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setEpdalegaefp($var)
    {
        GPBUtil::checkBool($var);
        $this->epdalegaefp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .DNEKJKACNJM buff_list = 1615;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuffList()
    {
        return $this->buff_list;
    }

    /**
     * Generated from protobuf field <code>repeated .DNEKJKACNJM buff_list = 1615;</code>
     * @param array<\DNEKJKACNJM>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuffList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \DNEKJKACNJM::class);
        $this->buff_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool idgfpjaiblj = 5;</code>
     * @return bool
     */
    public function getIdgfpjaiblj()
    {
        return $this->idgfpjaiblj;
    }

    /**
     * Generated from protobuf field <code>bool idgfpjaiblj = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIdgfpjaiblj($var)
    {
        GPBUtil::checkBool($var);
        $this->idgfpjaiblj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 obhilfaeclk = 8;</code>
     * @return int
     */
    public function getObhilfaeclk()
    {
        return $this->obhilfaeclk;
    }

    /**
     * Generated from protobuf field <code>uint32 obhilfaeclk = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setObhilfaeclk($var)
    {
        GPBUtil::checkUint32($var);
        $this->obhilfaeclk = $var;

        return $this;
    }

}

