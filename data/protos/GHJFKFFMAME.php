<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GHJFKFFMAME</code>
 */
class GHJFKFFMAME extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 LMFHNELKFOC = 7;</code>
     */
    protected $LMFHNELKFOC = 0;
    /**
     * Generated from protobuf field <code>.NIBBILKHHHE GFLJGKBPCGB = 1763;</code>
     */
    protected $GFLJGKBPCGB = null;
    /**
     * Generated from protobuf field <code>.ICMFJIEIEBM EPPNHJCNFCI = 154;</code>
     */
    protected $EPPNHJCNFCI = null;
    /**
     * Generated from protobuf field <code>.HPIPKEEKBDO BMOCCJHIFAK = 656;</code>
     */
    protected $BMOCCJHIFAK = null;
    /**
     * Generated from protobuf field <code>.COAOOLIBOHF MGEKAIONENB = 366;</code>
     */
    protected $MGEKAIONENB = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $LMFHNELKFOC
     *     @type \NIBBILKHHHE $GFLJGKBPCGB
     *     @type \ICMFJIEIEBM $EPPNHJCNFCI
     *     @type \HPIPKEEKBDO $BMOCCJHIFAK
     *     @type \COAOOLIBOHF $MGEKAIONENB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 LMFHNELKFOC = 7;</code>
     * @return int
     */
    public function getLMFHNELKFOC()
    {
        return $this->LMFHNELKFOC;
    }

    /**
     * Generated from protobuf field <code>uint32 LMFHNELKFOC = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLMFHNELKFOC($var)
    {
        GPBUtil::checkUint32($var);
        $this->LMFHNELKFOC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.NIBBILKHHHE GFLJGKBPCGB = 1763;</code>
     * @return \NIBBILKHHHE|null
     */
    public function getGFLJGKBPCGB()
    {
        return $this->GFLJGKBPCGB;
    }

    public function hasGFLJGKBPCGB()
    {
        return isset($this->GFLJGKBPCGB);
    }

    public function clearGFLJGKBPCGB()
    {
        unset($this->GFLJGKBPCGB);
    }

    /**
     * Generated from protobuf field <code>.NIBBILKHHHE GFLJGKBPCGB = 1763;</code>
     * @param \NIBBILKHHHE $var
     * @return $this
     */
    public function setGFLJGKBPCGB($var)
    {
        GPBUtil::checkMessage($var, \NIBBILKHHHE::class);
        $this->GFLJGKBPCGB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ICMFJIEIEBM EPPNHJCNFCI = 154;</code>
     * @return \ICMFJIEIEBM|null
     */
    public function getEPPNHJCNFCI()
    {
        return $this->EPPNHJCNFCI;
    }

    public function hasEPPNHJCNFCI()
    {
        return isset($this->EPPNHJCNFCI);
    }

    public function clearEPPNHJCNFCI()
    {
        unset($this->EPPNHJCNFCI);
    }

    /**
     * Generated from protobuf field <code>.ICMFJIEIEBM EPPNHJCNFCI = 154;</code>
     * @param \ICMFJIEIEBM $var
     * @return $this
     */
    public function setEPPNHJCNFCI($var)
    {
        GPBUtil::checkMessage($var, \ICMFJIEIEBM::class);
        $this->EPPNHJCNFCI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.HPIPKEEKBDO BMOCCJHIFAK = 656;</code>
     * @return \HPIPKEEKBDO|null
     */
    public function getBMOCCJHIFAK()
    {
        return $this->BMOCCJHIFAK;
    }

    public function hasBMOCCJHIFAK()
    {
        return isset($this->BMOCCJHIFAK);
    }

    public function clearBMOCCJHIFAK()
    {
        unset($this->BMOCCJHIFAK);
    }

    /**
     * Generated from protobuf field <code>.HPIPKEEKBDO BMOCCJHIFAK = 656;</code>
     * @param \HPIPKEEKBDO $var
     * @return $this
     */
    public function setBMOCCJHIFAK($var)
    {
        GPBUtil::checkMessage($var, \HPIPKEEKBDO::class);
        $this->BMOCCJHIFAK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.COAOOLIBOHF MGEKAIONENB = 366;</code>
     * @return \COAOOLIBOHF|null
     */
    public function getMGEKAIONENB()
    {
        return $this->MGEKAIONENB;
    }

    public function hasMGEKAIONENB()
    {
        return isset($this->MGEKAIONENB);
    }

    public function clearMGEKAIONENB()
    {
        unset($this->MGEKAIONENB);
    }

    /**
     * Generated from protobuf field <code>.COAOOLIBOHF MGEKAIONENB = 366;</code>
     * @param \COAOOLIBOHF $var
     * @return $this
     */
    public function setMGEKAIONENB($var)
    {
        GPBUtil::checkMessage($var, \COAOOLIBOHF::class);
        $this->MGEKAIONENB = $var;

        return $this;
    }

}
