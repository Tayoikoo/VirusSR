<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ELAMGBPKDFA</code>
 */
class ELAMGBPKDFA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 NMPBLIBMIAO = 2;</code>
     */
    protected $NMPBLIBMIAO = 0;
    /**
     * Generated from protobuf field <code>uint32 AIIHHFJBMHD = 5;</code>
     */
    protected $AIIHHFJBMHD = 0;
    /**
     * Generated from protobuf field <code>uint32 max_hp = 8;</code>
     */
    protected $max_hp = 0;
    /**
     * Generated from protobuf field <code>uint32 PHCBICGEPLE = 3;</code>
     */
    protected $PHCBICGEPLE = 0;
    /**
     * Generated from protobuf field <code>uint32 CCMFCONAOGP = 11;</code>
     */
    protected $CCMFCONAOGP = 0;
    /**
     * Generated from protobuf field <code>.EOFOHACMKEP GDGNEAHCLBE = 12;</code>
     */
    protected $GDGNEAHCLBE = 0;
    /**
     * Generated from protobuf field <code>.MLBKADJEBNA JOKEIGFCDOI = 14;</code>
     */
    protected $JOKEIGFCDOI = null;
    /**
     * Generated from protobuf field <code>uint32 ECPBMACJICO = 6;</code>
     */
    protected $ECPBMACJICO = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 ANOCFAKALLP = 4;</code>
     */
    private $ANOCFAKALLP;
    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 13;</code>
     */
    protected $OFAGGKBMPJN = 0;
    /**
     * Generated from protobuf field <code>uint32 BBBOAIAPOCG = 9;</code>
     */
    protected $BBBOAIAPOCG = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $NMPBLIBMIAO
     *     @type int $AIIHHFJBMHD
     *     @type int $max_hp
     *     @type int $PHCBICGEPLE
     *     @type int $CCMFCONAOGP
     *     @type int $GDGNEAHCLBE
     *     @type \MLBKADJEBNA $JOKEIGFCDOI
     *     @type int $ECPBMACJICO
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $ANOCFAKALLP
     *     @type int $OFAGGKBMPJN
     *     @type int $BBBOAIAPOCG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 NMPBLIBMIAO = 2;</code>
     * @return int
     */
    public function getNMPBLIBMIAO()
    {
        return $this->NMPBLIBMIAO;
    }

    /**
     * Generated from protobuf field <code>uint32 NMPBLIBMIAO = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNMPBLIBMIAO($var)
    {
        GPBUtil::checkUint32($var);
        $this->NMPBLIBMIAO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AIIHHFJBMHD = 5;</code>
     * @return int
     */
    public function getAIIHHFJBMHD()
    {
        return $this->AIIHHFJBMHD;
    }

    /**
     * Generated from protobuf field <code>uint32 AIIHHFJBMHD = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAIIHHFJBMHD($var)
    {
        GPBUtil::checkUint32($var);
        $this->AIIHHFJBMHD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max_hp = 8;</code>
     * @return int
     */
    public function getMaxHp()
    {
        return $this->max_hp;
    }

    /**
     * Generated from protobuf field <code>uint32 max_hp = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxHp($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_hp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PHCBICGEPLE = 3;</code>
     * @return int
     */
    public function getPHCBICGEPLE()
    {
        return $this->PHCBICGEPLE;
    }

    /**
     * Generated from protobuf field <code>uint32 PHCBICGEPLE = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPHCBICGEPLE($var)
    {
        GPBUtil::checkUint32($var);
        $this->PHCBICGEPLE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 CCMFCONAOGP = 11;</code>
     * @return int
     */
    public function getCCMFCONAOGP()
    {
        return $this->CCMFCONAOGP;
    }

    /**
     * Generated from protobuf field <code>uint32 CCMFCONAOGP = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setCCMFCONAOGP($var)
    {
        GPBUtil::checkUint32($var);
        $this->CCMFCONAOGP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.EOFOHACMKEP GDGNEAHCLBE = 12;</code>
     * @return int
     */
    public function getGDGNEAHCLBE()
    {
        return $this->GDGNEAHCLBE;
    }

    /**
     * Generated from protobuf field <code>.EOFOHACMKEP GDGNEAHCLBE = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setGDGNEAHCLBE($var)
    {
        GPBUtil::checkEnum($var, \EOFOHACMKEP::class);
        $this->GDGNEAHCLBE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MLBKADJEBNA JOKEIGFCDOI = 14;</code>
     * @return \MLBKADJEBNA|null
     */
    public function getJOKEIGFCDOI()
    {
        return $this->JOKEIGFCDOI;
    }

    public function hasJOKEIGFCDOI()
    {
        return isset($this->JOKEIGFCDOI);
    }

    public function clearJOKEIGFCDOI()
    {
        unset($this->JOKEIGFCDOI);
    }

    /**
     * Generated from protobuf field <code>.MLBKADJEBNA JOKEIGFCDOI = 14;</code>
     * @param \MLBKADJEBNA $var
     * @return $this
     */
    public function setJOKEIGFCDOI($var)
    {
        GPBUtil::checkMessage($var, \MLBKADJEBNA::class);
        $this->JOKEIGFCDOI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ECPBMACJICO = 6;</code>
     * @return int
     */
    public function getECPBMACJICO()
    {
        return $this->ECPBMACJICO;
    }

    /**
     * Generated from protobuf field <code>uint32 ECPBMACJICO = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setECPBMACJICO($var)
    {
        GPBUtil::checkUint32($var);
        $this->ECPBMACJICO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ANOCFAKALLP = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getANOCFAKALLP()
    {
        return $this->ANOCFAKALLP;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ANOCFAKALLP = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setANOCFAKALLP($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->ANOCFAKALLP = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 13;</code>
     * @return int
     */
    public function getOFAGGKBMPJN()
    {
        return $this->OFAGGKBMPJN;
    }

    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setOFAGGKBMPJN($var)
    {
        GPBUtil::checkUint32($var);
        $this->OFAGGKBMPJN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 BBBOAIAPOCG = 9;</code>
     * @return int
     */
    public function getBBBOAIAPOCG()
    {
        return $this->BBBOAIAPOCG;
    }

    /**
     * Generated from protobuf field <code>uint32 BBBOAIAPOCG = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setBBBOAIAPOCG($var)
    {
        GPBUtil::checkUint32($var);
        $this->BBBOAIAPOCG = $var;

        return $this;
    }

}
