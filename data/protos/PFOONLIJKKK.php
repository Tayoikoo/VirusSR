<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PFOONLIJKKK</code>
 */
class PFOONLIJKKK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool DFCCGODMLLD = 3;</code>
     */
    protected $DFCCGODMLLD = false;
    /**
     * Generated from protobuf field <code>bool PAGMFIDOLPD = 6;</code>
     */
    protected $PAGMFIDOLPD = false;
    /**
     * Generated from protobuf field <code>uint32 GCIMMFIDPJP = 11;</code>
     */
    protected $GCIMMFIDPJP = 0;
    /**
     * Generated from protobuf field <code>uint32 AKLHHELBPPI = 7;</code>
     */
    protected $AKLHHELBPPI = 0;
    /**
     * Generated from protobuf field <code>bool MNCENLIMJEB = 13;</code>
     */
    protected $MNCENLIMJEB = false;
    /**
     * Generated from protobuf field <code>bool FDBGIABHNGC = 8;</code>
     */
    protected $FDBGIABHNGC = false;
    /**
     * Generated from protobuf field <code>repeated .ANOEBHANHDM buff_list = 1661;</code>
     */
    private $buff_list;
    /**
     * Generated from protobuf field <code>uint32 ONNOFIINCAH = 2;</code>
     */
    protected $ONNOFIINCAH = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $DFCCGODMLLD
     *     @type bool $PAGMFIDOLPD
     *     @type int $GCIMMFIDPJP
     *     @type int $AKLHHELBPPI
     *     @type bool $MNCENLIMJEB
     *     @type bool $FDBGIABHNGC
     *     @type array<\ANOEBHANHDM>|\Google\Protobuf\Internal\RepeatedField $buff_list
     *     @type int $ONNOFIINCAH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool DFCCGODMLLD = 3;</code>
     * @return bool
     */
    public function getDFCCGODMLLD()
    {
        return $this->DFCCGODMLLD;
    }

    /**
     * Generated from protobuf field <code>bool DFCCGODMLLD = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDFCCGODMLLD($var)
    {
        GPBUtil::checkBool($var);
        $this->DFCCGODMLLD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool PAGMFIDOLPD = 6;</code>
     * @return bool
     */
    public function getPAGMFIDOLPD()
    {
        return $this->PAGMFIDOLPD;
    }

    /**
     * Generated from protobuf field <code>bool PAGMFIDOLPD = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setPAGMFIDOLPD($var)
    {
        GPBUtil::checkBool($var);
        $this->PAGMFIDOLPD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 GCIMMFIDPJP = 11;</code>
     * @return int
     */
    public function getGCIMMFIDPJP()
    {
        return $this->GCIMMFIDPJP;
    }

    /**
     * Generated from protobuf field <code>uint32 GCIMMFIDPJP = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setGCIMMFIDPJP($var)
    {
        GPBUtil::checkUint32($var);
        $this->GCIMMFIDPJP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AKLHHELBPPI = 7;</code>
     * @return int
     */
    public function getAKLHHELBPPI()
    {
        return $this->AKLHHELBPPI;
    }

    /**
     * Generated from protobuf field <code>uint32 AKLHHELBPPI = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setAKLHHELBPPI($var)
    {
        GPBUtil::checkUint32($var);
        $this->AKLHHELBPPI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool MNCENLIMJEB = 13;</code>
     * @return bool
     */
    public function getMNCENLIMJEB()
    {
        return $this->MNCENLIMJEB;
    }

    /**
     * Generated from protobuf field <code>bool MNCENLIMJEB = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setMNCENLIMJEB($var)
    {
        GPBUtil::checkBool($var);
        $this->MNCENLIMJEB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool FDBGIABHNGC = 8;</code>
     * @return bool
     */
    public function getFDBGIABHNGC()
    {
        return $this->FDBGIABHNGC;
    }

    /**
     * Generated from protobuf field <code>bool FDBGIABHNGC = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setFDBGIABHNGC($var)
    {
        GPBUtil::checkBool($var);
        $this->FDBGIABHNGC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ANOEBHANHDM buff_list = 1661;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuffList()
    {
        return $this->buff_list;
    }

    /**
     * Generated from protobuf field <code>repeated .ANOEBHANHDM buff_list = 1661;</code>
     * @param array<\ANOEBHANHDM>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuffList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ANOEBHANHDM::class);
        $this->buff_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ONNOFIINCAH = 2;</code>
     * @return int
     */
    public function getONNOFIINCAH()
    {
        return $this->ONNOFIINCAH;
    }

    /**
     * Generated from protobuf field <code>uint32 ONNOFIINCAH = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setONNOFIINCAH($var)
    {
        GPBUtil::checkUint32($var);
        $this->ONNOFIINCAH = $var;

        return $this;
    }

}

