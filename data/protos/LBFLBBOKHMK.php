<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LBFLBBOKHMK</code>
 */
class LBFLBBOKHMK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ibadnmdajod = 1;</code>
     */
    protected $ibadnmdajod = 0;
    /**
     * Generated from protobuf field <code>uint32 hddlnlfpbgk = 2;</code>
     */
    protected $hddlnlfpbgk = 0;
    /**
     * Generated from protobuf field <code>double pbjjogcdmgn = 3;</code>
     */
    protected $pbjjogcdmgn = 0.0;
    /**
     * Generated from protobuf field <code>uint32 wave = 4;</code>
     */
    protected $wave = 0;
    /**
     * Generated from protobuf field <code>uint32 dlkcblhgbpf = 5;</code>
     */
    protected $dlkcblhgbpf = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ibadnmdajod
     *     @type int $hddlnlfpbgk
     *     @type float $pbjjogcdmgn
     *     @type int $wave
     *     @type int $dlkcblhgbpf
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ibadnmdajod = 1;</code>
     * @return int
     */
    public function getIbadnmdajod()
    {
        return $this->ibadnmdajod;
    }

    /**
     * Generated from protobuf field <code>uint32 ibadnmdajod = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setIbadnmdajod($var)
    {
        GPBUtil::checkUint32($var);
        $this->ibadnmdajod = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 hddlnlfpbgk = 2;</code>
     * @return int
     */
    public function getHddlnlfpbgk()
    {
        return $this->hddlnlfpbgk;
    }

    /**
     * Generated from protobuf field <code>uint32 hddlnlfpbgk = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHddlnlfpbgk($var)
    {
        GPBUtil::checkUint32($var);
        $this->hddlnlfpbgk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double pbjjogcdmgn = 3;</code>
     * @return float
     */
    public function getPbjjogcdmgn()
    {
        return $this->pbjjogcdmgn;
    }

    /**
     * Generated from protobuf field <code>double pbjjogcdmgn = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setPbjjogcdmgn($var)
    {
        GPBUtil::checkDouble($var);
        $this->pbjjogcdmgn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 wave = 4;</code>
     * @return int
     */
    public function getWave()
    {
        return $this->wave;
    }

    /**
     * Generated from protobuf field <code>uint32 wave = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setWave($var)
    {
        GPBUtil::checkUint32($var);
        $this->wave = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dlkcblhgbpf = 5;</code>
     * @return int
     */
    public function getDlkcblhgbpf()
    {
        return $this->dlkcblhgbpf;
    }

    /**
     * Generated from protobuf field <code>uint32 dlkcblhgbpf = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDlkcblhgbpf($var)
    {
        GPBUtil::checkUint32($var);
        $this->dlkcblhgbpf = $var;

        return $this;
    }

}
