<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MMAOMBIBIKA</code>
 */
class MMAOMBIBIKA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 NPONPMGNKIE = 15;</code>
     */
    protected $NPONPMGNKIE = 0;
    /**
     * Generated from protobuf field <code>uint32 LCEEDIGELGM = 8;</code>
     */
    protected $LCEEDIGELGM = 0;
    /**
     * Generated from protobuf field <code>string JPECEHHAMPE = 10;</code>
     */
    protected $JPECEHHAMPE = '';
    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 AOGMMEFAIFJ = 14;</code>
     */
    protected $AOGMMEFAIFJ = 0;
    /**
     * Generated from protobuf field <code>.AMIGGMENHFA PFBOBBMELFB = 11;</code>
     */
    protected $PFBOBBMELFB = null;
    /**
     * Generated from protobuf field <code>uint32 JOIPFMCOINI = 6;</code>
     */
    protected $JOIPFMCOINI = 0;
    /**
     * Generated from protobuf field <code>uint32 PNOAKGNANBO = 13;</code>
     */
    protected $PNOAKGNANBO = 0;
    /**
     * Generated from protobuf field <code>.MGGJKPGEGLP FHEODGILEEP = 12;</code>
     */
    protected $FHEODGILEEP = null;
    /**
     * Generated from protobuf field <code>repeated uint32 EJOMHILNCMC = 2;</code>
     */
    private $EJOMHILNCMC;
    /**
     * Generated from protobuf field <code>.HJLBLONCPML DMBNHOFLDFO = 4;</code>
     */
    protected $DMBNHOFLDFO = null;
    /**
     * Generated from protobuf field <code>uint32 FBELDFBDFAG = 1;</code>
     */
    protected $FBELDFBDFAG = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $NPONPMGNKIE
     *     @type int $LCEEDIGELGM
     *     @type string $JPECEHHAMPE
     *     @type int $retcode
     *     @type int $AOGMMEFAIFJ
     *     @type \AMIGGMENHFA $PFBOBBMELFB
     *     @type int $JOIPFMCOINI
     *     @type int $PNOAKGNANBO
     *     @type \MGGJKPGEGLP $FHEODGILEEP
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $EJOMHILNCMC
     *     @type \HJLBLONCPML $DMBNHOFLDFO
     *     @type int $FBELDFBDFAG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 NPONPMGNKIE = 15;</code>
     * @return int
     */
    public function getNPONPMGNKIE()
    {
        return $this->NPONPMGNKIE;
    }

    /**
     * Generated from protobuf field <code>uint32 NPONPMGNKIE = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setNPONPMGNKIE($var)
    {
        GPBUtil::checkUint32($var);
        $this->NPONPMGNKIE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LCEEDIGELGM = 8;</code>
     * @return int
     */
    public function getLCEEDIGELGM()
    {
        return $this->LCEEDIGELGM;
    }

    /**
     * Generated from protobuf field <code>uint32 LCEEDIGELGM = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setLCEEDIGELGM($var)
    {
        GPBUtil::checkUint32($var);
        $this->LCEEDIGELGM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string JPECEHHAMPE = 10;</code>
     * @return string
     */
    public function getJPECEHHAMPE()
    {
        return $this->JPECEHHAMPE;
    }

    /**
     * Generated from protobuf field <code>string JPECEHHAMPE = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setJPECEHHAMPE($var)
    {
        GPBUtil::checkString($var, True);
        $this->JPECEHHAMPE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
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
     * Generated from protobuf field <code>uint32 AOGMMEFAIFJ = 14;</code>
     * @return int
     */
    public function getAOGMMEFAIFJ()
    {
        return $this->AOGMMEFAIFJ;
    }

    /**
     * Generated from protobuf field <code>uint32 AOGMMEFAIFJ = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setAOGMMEFAIFJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->AOGMMEFAIFJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AMIGGMENHFA PFBOBBMELFB = 11;</code>
     * @return \AMIGGMENHFA|null
     */
    public function getPFBOBBMELFB()
    {
        return $this->PFBOBBMELFB;
    }

    public function hasPFBOBBMELFB()
    {
        return isset($this->PFBOBBMELFB);
    }

    public function clearPFBOBBMELFB()
    {
        unset($this->PFBOBBMELFB);
    }

    /**
     * Generated from protobuf field <code>.AMIGGMENHFA PFBOBBMELFB = 11;</code>
     * @param \AMIGGMENHFA $var
     * @return $this
     */
    public function setPFBOBBMELFB($var)
    {
        GPBUtil::checkMessage($var, \AMIGGMENHFA::class);
        $this->PFBOBBMELFB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 JOIPFMCOINI = 6;</code>
     * @return int
     */
    public function getJOIPFMCOINI()
    {
        return $this->JOIPFMCOINI;
    }

    /**
     * Generated from protobuf field <code>uint32 JOIPFMCOINI = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setJOIPFMCOINI($var)
    {
        GPBUtil::checkUint32($var);
        $this->JOIPFMCOINI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PNOAKGNANBO = 13;</code>
     * @return int
     */
    public function getPNOAKGNANBO()
    {
        return $this->PNOAKGNANBO;
    }

    /**
     * Generated from protobuf field <code>uint32 PNOAKGNANBO = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setPNOAKGNANBO($var)
    {
        GPBUtil::checkUint32($var);
        $this->PNOAKGNANBO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MGGJKPGEGLP FHEODGILEEP = 12;</code>
     * @return \MGGJKPGEGLP|null
     */
    public function getFHEODGILEEP()
    {
        return $this->FHEODGILEEP;
    }

    public function hasFHEODGILEEP()
    {
        return isset($this->FHEODGILEEP);
    }

    public function clearFHEODGILEEP()
    {
        unset($this->FHEODGILEEP);
    }

    /**
     * Generated from protobuf field <code>.MGGJKPGEGLP FHEODGILEEP = 12;</code>
     * @param \MGGJKPGEGLP $var
     * @return $this
     */
    public function setFHEODGILEEP($var)
    {
        GPBUtil::checkMessage($var, \MGGJKPGEGLP::class);
        $this->FHEODGILEEP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 EJOMHILNCMC = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEJOMHILNCMC()
    {
        return $this->EJOMHILNCMC;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 EJOMHILNCMC = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEJOMHILNCMC($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->EJOMHILNCMC = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.HJLBLONCPML DMBNHOFLDFO = 4;</code>
     * @return \HJLBLONCPML|null
     */
    public function getDMBNHOFLDFO()
    {
        return $this->DMBNHOFLDFO;
    }

    public function hasDMBNHOFLDFO()
    {
        return isset($this->DMBNHOFLDFO);
    }

    public function clearDMBNHOFLDFO()
    {
        unset($this->DMBNHOFLDFO);
    }

    /**
     * Generated from protobuf field <code>.HJLBLONCPML DMBNHOFLDFO = 4;</code>
     * @param \HJLBLONCPML $var
     * @return $this
     */
    public function setDMBNHOFLDFO($var)
    {
        GPBUtil::checkMessage($var, \HJLBLONCPML::class);
        $this->DMBNHOFLDFO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 FBELDFBDFAG = 1;</code>
     * @return int
     */
    public function getFBELDFBDFAG()
    {
        return $this->FBELDFBDFAG;
    }

    /**
     * Generated from protobuf field <code>uint32 FBELDFBDFAG = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFBELDFBDFAG($var)
    {
        GPBUtil::checkUint32($var);
        $this->FBELDFBDFAG = $var;

        return $this;
    }

}
