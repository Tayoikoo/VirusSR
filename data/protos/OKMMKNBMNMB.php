<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OKMMKNBMNMB</code>
 */
class OKMMKNBMNMB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .CGJOLHIDCDE amgmpnoidlm = 14;</code>
     */
    private $amgmpnoidlm;
    /**
     * Generated from protobuf field <code>uint32 dhinbnjjopf = 9;</code>
     */
    protected $dhinbnjjopf = 0;
    /**
     * Generated from protobuf field <code>uint32 kchegpecmhm = 4;</code>
     */
    protected $kchegpecmhm = 0;
    /**
     * Generated from protobuf field <code>uint32 ihlgmnhbdhj = 15;</code>
     */
    protected $ihlgmnhbdhj = 0;
    /**
     * Generated from protobuf field <code>.ABMEPGCAPLF status = 6;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\CGJOLHIDCDE>|\Google\Protobuf\Internal\RepeatedField $amgmpnoidlm
     *     @type int $dhinbnjjopf
     *     @type int $kchegpecmhm
     *     @type int $ihlgmnhbdhj
     *     @type int $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .CGJOLHIDCDE amgmpnoidlm = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAmgmpnoidlm()
    {
        return $this->amgmpnoidlm;
    }

    /**
     * Generated from protobuf field <code>repeated .CGJOLHIDCDE amgmpnoidlm = 14;</code>
     * @param array<\CGJOLHIDCDE>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAmgmpnoidlm($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CGJOLHIDCDE::class);
        $this->amgmpnoidlm = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dhinbnjjopf = 9;</code>
     * @return int
     */
    public function getDhinbnjjopf()
    {
        return $this->dhinbnjjopf;
    }

    /**
     * Generated from protobuf field <code>uint32 dhinbnjjopf = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setDhinbnjjopf($var)
    {
        GPBUtil::checkUint32($var);
        $this->dhinbnjjopf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 kchegpecmhm = 4;</code>
     * @return int
     */
    public function getKchegpecmhm()
    {
        return $this->kchegpecmhm;
    }

    /**
     * Generated from protobuf field <code>uint32 kchegpecmhm = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setKchegpecmhm($var)
    {
        GPBUtil::checkUint32($var);
        $this->kchegpecmhm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ihlgmnhbdhj = 15;</code>
     * @return int
     */
    public function getIhlgmnhbdhj()
    {
        return $this->ihlgmnhbdhj;
    }

    /**
     * Generated from protobuf field <code>uint32 ihlgmnhbdhj = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setIhlgmnhbdhj($var)
    {
        GPBUtil::checkUint32($var);
        $this->ihlgmnhbdhj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ABMEPGCAPLF status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.ABMEPGCAPLF status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \ABMEPGCAPLF::class);
        $this->status = $var;

        return $this;
    }

}

