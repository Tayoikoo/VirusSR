<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BNKNFJKMJIE</code>
 */
class BNKNFJKMJIE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.MCMHFOBCJAP NKBCLDKKHIC = 4;</code>
     */
    protected $NKBCLDKKHIC = null;
    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>int32 GBMAAJIKNAJ = 6;</code>
     */
    protected $GBMAAJIKNAJ = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 DAELBDIDMMH = 3;</code>
     */
    private $DAELBDIDMMH;
    /**
     * Generated from protobuf field <code>int32 GCGAPALDNLK = 7;</code>
     */
    protected $GCGAPALDNLK = 0;
    /**
     * Generated from protobuf field <code>uint32 IGODAFNLDCK = 12;</code>
     */
    protected $IGODAFNLDCK = 0;
    /**
     * Generated from protobuf field <code>uint32 PFGAHNOAPHB = 13;</code>
     */
    protected $PFGAHNOAPHB = 0;
    /**
     * Generated from protobuf field <code>uint32 HEEDLFMBNJH = 11;</code>
     */
    protected $HEEDLFMBNJH = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 EAMJPKMKKHK = 8;</code>
     */
    private $EAMJPKMKKHK;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MCMHFOBCJAP $NKBCLDKKHIC
     *     @type int $id
     *     @type int $GBMAAJIKNAJ
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $DAELBDIDMMH
     *     @type int $GCGAPALDNLK
     *     @type int $IGODAFNLDCK
     *     @type int $PFGAHNOAPHB
     *     @type int $HEEDLFMBNJH
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $EAMJPKMKKHK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.MCMHFOBCJAP NKBCLDKKHIC = 4;</code>
     * @return \MCMHFOBCJAP|null
     */
    public function getNKBCLDKKHIC()
    {
        return $this->NKBCLDKKHIC;
    }

    public function hasNKBCLDKKHIC()
    {
        return isset($this->NKBCLDKKHIC);
    }

    public function clearNKBCLDKKHIC()
    {
        unset($this->NKBCLDKKHIC);
    }

    /**
     * Generated from protobuf field <code>.MCMHFOBCJAP NKBCLDKKHIC = 4;</code>
     * @param \MCMHFOBCJAP $var
     * @return $this
     */
    public function setNKBCLDKKHIC($var)
    {
        GPBUtil::checkMessage($var, \MCMHFOBCJAP::class);
        $this->NKBCLDKKHIC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 GBMAAJIKNAJ = 6;</code>
     * @return int
     */
    public function getGBMAAJIKNAJ()
    {
        return $this->GBMAAJIKNAJ;
    }

    /**
     * Generated from protobuf field <code>int32 GBMAAJIKNAJ = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setGBMAAJIKNAJ($var)
    {
        GPBUtil::checkInt32($var);
        $this->GBMAAJIKNAJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 DAELBDIDMMH = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDAELBDIDMMH()
    {
        return $this->DAELBDIDMMH;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 DAELBDIDMMH = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDAELBDIDMMH($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->DAELBDIDMMH = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 GCGAPALDNLK = 7;</code>
     * @return int
     */
    public function getGCGAPALDNLK()
    {
        return $this->GCGAPALDNLK;
    }

    /**
     * Generated from protobuf field <code>int32 GCGAPALDNLK = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setGCGAPALDNLK($var)
    {
        GPBUtil::checkInt32($var);
        $this->GCGAPALDNLK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IGODAFNLDCK = 12;</code>
     * @return int
     */
    public function getIGODAFNLDCK()
    {
        return $this->IGODAFNLDCK;
    }

    /**
     * Generated from protobuf field <code>uint32 IGODAFNLDCK = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setIGODAFNLDCK($var)
    {
        GPBUtil::checkUint32($var);
        $this->IGODAFNLDCK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PFGAHNOAPHB = 13;</code>
     * @return int
     */
    public function getPFGAHNOAPHB()
    {
        return $this->PFGAHNOAPHB;
    }

    /**
     * Generated from protobuf field <code>uint32 PFGAHNOAPHB = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setPFGAHNOAPHB($var)
    {
        GPBUtil::checkUint32($var);
        $this->PFGAHNOAPHB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HEEDLFMBNJH = 11;</code>
     * @return int
     */
    public function getHEEDLFMBNJH()
    {
        return $this->HEEDLFMBNJH;
    }

    /**
     * Generated from protobuf field <code>uint32 HEEDLFMBNJH = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setHEEDLFMBNJH($var)
    {
        GPBUtil::checkUint32($var);
        $this->HEEDLFMBNJH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 EAMJPKMKKHK = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEAMJPKMKKHK()
    {
        return $this->EAMJPKMKKHK;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 EAMJPKMKKHK = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEAMJPKMKKHK($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->EAMJPKMKKHK = $arr;

        return $this;
    }

}
