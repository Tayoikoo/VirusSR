<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KHKLBEEGFGA</code>
 */
class KHKLBEEGFGA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 BNKPPBPIGAO = 12;</code>
     */
    protected $BNKPPBPIGAO = 0;
    /**
     * Generated from protobuf field <code>repeated .KFLMNJFICNK CPBFCDAMDPA = 9;</code>
     */
    private $CPBFCDAMDPA;
    /**
     * Generated from protobuf field <code>.NDLIGJBGIOB BJGNEPEEDLN = 2;</code>
     */
    protected $BJGNEPEEDLN = 0;
    /**
     * Generated from protobuf field <code>uint32 LGOAHPCLIFI = 15;</code>
     */
    protected $LGOAHPCLIFI = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 LIBHJLCEPPP = 13;</code>
     */
    private $LIBHJLCEPPP;
    /**
     * Generated from protobuf field <code>uint32 DLGEFPHNGEJ = 10;</code>
     */
    protected $DLGEFPHNGEJ = 0;
    /**
     * Generated from protobuf field <code>.ItemCostData IKOJACBMGBP = 7;</code>
     */
    protected $IKOJACBMGBP = null;
    /**
     * Generated from protobuf field <code>bool KELFINIJCHP = 11;</code>
     */
    protected $KELFINIJCHP = false;
    /**
     * Generated from protobuf field <code>uint32 LLBICIFCPPM = 5;</code>
     */
    protected $LLBICIFCPPM = 0;
    /**
     * Generated from protobuf field <code>uint32 DOBPBBDGDEB = 6;</code>
     */
    protected $DOBPBBDGDEB = 0;
    /**
     * Generated from protobuf field <code>uint32 FMIIGIKMFIC = 4;</code>
     */
    protected $FMIIGIKMFIC = 0;
    /**
     * Generated from protobuf field <code>uint32 BOIEEFIPNEG = 1;</code>
     */
    protected $BOIEEFIPNEG = 0;
    /**
     * Generated from protobuf field <code>uint32 NDNOIECIINJ = 3;</code>
     */
    protected $NDNOIECIINJ = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $BNKPPBPIGAO
     *     @type array<\KFLMNJFICNK>|\Google\Protobuf\Internal\RepeatedField $CPBFCDAMDPA
     *     @type int $BJGNEPEEDLN
     *     @type int $LGOAHPCLIFI
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $LIBHJLCEPPP
     *     @type int $DLGEFPHNGEJ
     *     @type \ItemCostData $IKOJACBMGBP
     *     @type bool $KELFINIJCHP
     *     @type int $LLBICIFCPPM
     *     @type int $DOBPBBDGDEB
     *     @type int $FMIIGIKMFIC
     *     @type int $BOIEEFIPNEG
     *     @type int $NDNOIECIINJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 BNKPPBPIGAO = 12;</code>
     * @return int
     */
    public function getBNKPPBPIGAO()
    {
        return $this->BNKPPBPIGAO;
    }

    /**
     * Generated from protobuf field <code>uint32 BNKPPBPIGAO = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setBNKPPBPIGAO($var)
    {
        GPBUtil::checkUint32($var);
        $this->BNKPPBPIGAO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .KFLMNJFICNK CPBFCDAMDPA = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCPBFCDAMDPA()
    {
        return $this->CPBFCDAMDPA;
    }

    /**
     * Generated from protobuf field <code>repeated .KFLMNJFICNK CPBFCDAMDPA = 9;</code>
     * @param array<\KFLMNJFICNK>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCPBFCDAMDPA($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \KFLMNJFICNK::class);
        $this->CPBFCDAMDPA = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.NDLIGJBGIOB BJGNEPEEDLN = 2;</code>
     * @return int
     */
    public function getBJGNEPEEDLN()
    {
        return $this->BJGNEPEEDLN;
    }

    /**
     * Generated from protobuf field <code>.NDLIGJBGIOB BJGNEPEEDLN = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBJGNEPEEDLN($var)
    {
        GPBUtil::checkEnum($var, \NDLIGJBGIOB::class);
        $this->BJGNEPEEDLN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LGOAHPCLIFI = 15;</code>
     * @return int
     */
    public function getLGOAHPCLIFI()
    {
        return $this->LGOAHPCLIFI;
    }

    /**
     * Generated from protobuf field <code>uint32 LGOAHPCLIFI = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setLGOAHPCLIFI($var)
    {
        GPBUtil::checkUint32($var);
        $this->LGOAHPCLIFI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 LIBHJLCEPPP = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLIBHJLCEPPP()
    {
        return $this->LIBHJLCEPPP;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 LIBHJLCEPPP = 13;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLIBHJLCEPPP($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->LIBHJLCEPPP = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DLGEFPHNGEJ = 10;</code>
     * @return int
     */
    public function getDLGEFPHNGEJ()
    {
        return $this->DLGEFPHNGEJ;
    }

    /**
     * Generated from protobuf field <code>uint32 DLGEFPHNGEJ = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setDLGEFPHNGEJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->DLGEFPHNGEJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemCostData IKOJACBMGBP = 7;</code>
     * @return \ItemCostData|null
     */
    public function getIKOJACBMGBP()
    {
        return $this->IKOJACBMGBP;
    }

    public function hasIKOJACBMGBP()
    {
        return isset($this->IKOJACBMGBP);
    }

    public function clearIKOJACBMGBP()
    {
        unset($this->IKOJACBMGBP);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData IKOJACBMGBP = 7;</code>
     * @param \ItemCostData $var
     * @return $this
     */
    public function setIKOJACBMGBP($var)
    {
        GPBUtil::checkMessage($var, \ItemCostData::class);
        $this->IKOJACBMGBP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool KELFINIJCHP = 11;</code>
     * @return bool
     */
    public function getKELFINIJCHP()
    {
        return $this->KELFINIJCHP;
    }

    /**
     * Generated from protobuf field <code>bool KELFINIJCHP = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setKELFINIJCHP($var)
    {
        GPBUtil::checkBool($var);
        $this->KELFINIJCHP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LLBICIFCPPM = 5;</code>
     * @return int
     */
    public function getLLBICIFCPPM()
    {
        return $this->LLBICIFCPPM;
    }

    /**
     * Generated from protobuf field <code>uint32 LLBICIFCPPM = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLLBICIFCPPM($var)
    {
        GPBUtil::checkUint32($var);
        $this->LLBICIFCPPM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DOBPBBDGDEB = 6;</code>
     * @return int
     */
    public function getDOBPBBDGDEB()
    {
        return $this->DOBPBBDGDEB;
    }

    /**
     * Generated from protobuf field <code>uint32 DOBPBBDGDEB = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setDOBPBBDGDEB($var)
    {
        GPBUtil::checkUint32($var);
        $this->DOBPBBDGDEB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 FMIIGIKMFIC = 4;</code>
     * @return int
     */
    public function getFMIIGIKMFIC()
    {
        return $this->FMIIGIKMFIC;
    }

    /**
     * Generated from protobuf field <code>uint32 FMIIGIKMFIC = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFMIIGIKMFIC($var)
    {
        GPBUtil::checkUint32($var);
        $this->FMIIGIKMFIC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 BOIEEFIPNEG = 1;</code>
     * @return int
     */
    public function getBOIEEFIPNEG()
    {
        return $this->BOIEEFIPNEG;
    }

    /**
     * Generated from protobuf field <code>uint32 BOIEEFIPNEG = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBOIEEFIPNEG($var)
    {
        GPBUtil::checkUint32($var);
        $this->BOIEEFIPNEG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NDNOIECIINJ = 3;</code>
     * @return int
     */
    public function getNDNOIECIINJ()
    {
        return $this->NDNOIECIINJ;
    }

    /**
     * Generated from protobuf field <code>uint32 NDNOIECIINJ = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNDNOIECIINJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->NDNOIECIINJ = $var;

        return $this;
    }

}
