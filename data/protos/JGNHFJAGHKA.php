<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JGNHFJAGHKA</code>
 */
class JGNHFJAGHKA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .NJKGAOAFDDM CAILCHDLHCA = 6;</code>
     */
    private $CAILCHDLHCA;
    /**
     * Generated from protobuf field <code>uint32 PCHFKBKLDMJ = 14;</code>
     */
    protected $PCHFKBKLDMJ = 0;
    /**
     * Generated from protobuf field <code>repeated .MNFCLOPJJBO KJDMJIMHOJM = 13;</code>
     */
    private $KJDMJIMHOJM;
    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 2;</code>
     */
    protected $OFAGGKBMPJN = 0;
    /**
     * Generated from protobuf field <code>repeated .PlayCardBrief PKCCIHJKJPM = 1;</code>
     */
    private $PKCCIHJKJPM;
    /**
     * Generated from protobuf field <code>uint32 EKDNBEKFECL = 5;</code>
     */
    protected $EKDNBEKFECL = 0;
    /**
     * Generated from protobuf field <code>.LGMKJFEOHEL EIABOFCHOKC = 8;</code>
     */
    protected $EIABOFCHOKC = null;
    /**
     * Generated from protobuf field <code>.OKFGPABKEJE OPDABBNHHCG = 12;</code>
     */
    protected $OPDABBNHHCG = null;
    /**
     * Generated from protobuf field <code>repeated .PlaySkillBrief OHCMOJBPBLG = 7;</code>
     */
    private $OHCMOJBPBLG;
    /**
     * Generated from protobuf field <code>.HOCJJLOCEHN LMCBBBEBENJ = 15;</code>
     */
    protected $LMCBBBEBENJ = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\NJKGAOAFDDM>|\Google\Protobuf\Internal\RepeatedField $CAILCHDLHCA
     *     @type int $PCHFKBKLDMJ
     *     @type array<\MNFCLOPJJBO>|\Google\Protobuf\Internal\RepeatedField $KJDMJIMHOJM
     *     @type int $OFAGGKBMPJN
     *     @type array<\PlayCardBrief>|\Google\Protobuf\Internal\RepeatedField $PKCCIHJKJPM
     *     @type int $EKDNBEKFECL
     *     @type \LGMKJFEOHEL $EIABOFCHOKC
     *     @type \OKFGPABKEJE $OPDABBNHHCG
     *     @type array<\PlaySkillBrief>|\Google\Protobuf\Internal\RepeatedField $OHCMOJBPBLG
     *     @type int $LMCBBBEBENJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .NJKGAOAFDDM CAILCHDLHCA = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCAILCHDLHCA()
    {
        return $this->CAILCHDLHCA;
    }

    /**
     * Generated from protobuf field <code>repeated .NJKGAOAFDDM CAILCHDLHCA = 6;</code>
     * @param array<\NJKGAOAFDDM>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCAILCHDLHCA($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \NJKGAOAFDDM::class);
        $this->CAILCHDLHCA = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PCHFKBKLDMJ = 14;</code>
     * @return int
     */
    public function getPCHFKBKLDMJ()
    {
        return $this->PCHFKBKLDMJ;
    }

    /**
     * Generated from protobuf field <code>uint32 PCHFKBKLDMJ = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setPCHFKBKLDMJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->PCHFKBKLDMJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .MNFCLOPJJBO KJDMJIMHOJM = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKJDMJIMHOJM()
    {
        return $this->KJDMJIMHOJM;
    }

    /**
     * Generated from protobuf field <code>repeated .MNFCLOPJJBO KJDMJIMHOJM = 13;</code>
     * @param array<\MNFCLOPJJBO>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKJDMJIMHOJM($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MNFCLOPJJBO::class);
        $this->KJDMJIMHOJM = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 2;</code>
     * @return int
     */
    public function getOFAGGKBMPJN()
    {
        return $this->OFAGGKBMPJN;
    }

    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 2;</code>
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
     * Generated from protobuf field <code>repeated .PlayCardBrief PKCCIHJKJPM = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPKCCIHJKJPM()
    {
        return $this->PKCCIHJKJPM;
    }

    /**
     * Generated from protobuf field <code>repeated .PlayCardBrief PKCCIHJKJPM = 1;</code>
     * @param array<\PlayCardBrief>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPKCCIHJKJPM($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \PlayCardBrief::class);
        $this->PKCCIHJKJPM = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 EKDNBEKFECL = 5;</code>
     * @return int
     */
    public function getEKDNBEKFECL()
    {
        return $this->EKDNBEKFECL;
    }

    /**
     * Generated from protobuf field <code>uint32 EKDNBEKFECL = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setEKDNBEKFECL($var)
    {
        GPBUtil::checkUint32($var);
        $this->EKDNBEKFECL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.LGMKJFEOHEL EIABOFCHOKC = 8;</code>
     * @return \LGMKJFEOHEL|null
     */
    public function getEIABOFCHOKC()
    {
        return $this->EIABOFCHOKC;
    }

    public function hasEIABOFCHOKC()
    {
        return isset($this->EIABOFCHOKC);
    }

    public function clearEIABOFCHOKC()
    {
        unset($this->EIABOFCHOKC);
    }

    /**
     * Generated from protobuf field <code>.LGMKJFEOHEL EIABOFCHOKC = 8;</code>
     * @param \LGMKJFEOHEL $var
     * @return $this
     */
    public function setEIABOFCHOKC($var)
    {
        GPBUtil::checkMessage($var, \LGMKJFEOHEL::class);
        $this->EIABOFCHOKC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.OKFGPABKEJE OPDABBNHHCG = 12;</code>
     * @return \OKFGPABKEJE|null
     */
    public function getOPDABBNHHCG()
    {
        return $this->OPDABBNHHCG;
    }

    public function hasOPDABBNHHCG()
    {
        return isset($this->OPDABBNHHCG);
    }

    public function clearOPDABBNHHCG()
    {
        unset($this->OPDABBNHHCG);
    }

    /**
     * Generated from protobuf field <code>.OKFGPABKEJE OPDABBNHHCG = 12;</code>
     * @param \OKFGPABKEJE $var
     * @return $this
     */
    public function setOPDABBNHHCG($var)
    {
        GPBUtil::checkMessage($var, \OKFGPABKEJE::class);
        $this->OPDABBNHHCG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .PlaySkillBrief OHCMOJBPBLG = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOHCMOJBPBLG()
    {
        return $this->OHCMOJBPBLG;
    }

    /**
     * Generated from protobuf field <code>repeated .PlaySkillBrief OHCMOJBPBLG = 7;</code>
     * @param array<\PlaySkillBrief>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOHCMOJBPBLG($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \PlaySkillBrief::class);
        $this->OHCMOJBPBLG = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.HOCJJLOCEHN LMCBBBEBENJ = 15;</code>
     * @return int
     */
    public function getLMCBBBEBENJ()
    {
        return $this->LMCBBBEBENJ;
    }

    /**
     * Generated from protobuf field <code>.HOCJJLOCEHN LMCBBBEBENJ = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setLMCBBBEBENJ($var)
    {
        GPBUtil::checkEnum($var, \HOCJJLOCEHN::class);
        $this->LMCBBBEBENJ = $var;

        return $this;
    }

}
