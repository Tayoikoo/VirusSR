<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OMJNOFBIODO</code>
 */
class OMJNOFBIODO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool HFEDLLHAELK = 7;</code>
     */
    protected $HFEDLLHAELK = false;
    /**
     * Generated from protobuf field <code>uint32 exp = 3;</code>
     */
    protected $exp = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 GJKHHFCBOCI = 15;</code>
     */
    private $GJKHHFCBOCI;
    /**
     * Generated from protobuf field <code>repeated .HJAJEBCDKIC FKOHMNMAANH = 9;</code>
     */
    private $FKOHMNMAANH;
    /**
     * Generated from protobuf field <code>repeated .JCMNNKMOFEB EDLHPFKPGEF = 6;</code>
     */
    private $EDLHPFKPGEF;
    /**
     * Generated from protobuf field <code>repeated .DOFHMFAKNAB LMIBNDEPFHI = 2;</code>
     */
    private $LMIBNDEPFHI;
    /**
     * Generated from protobuf field <code>uint32 HEMENIBJABH = 13;</code>
     */
    protected $HEMENIBJABH = 0;
    /**
     * Generated from protobuf field <code>bool LFFJPMCCIKD = 10;</code>
     */
    protected $LFFJPMCCIKD = false;
    /**
     * Generated from protobuf field <code>uint32 HOJJFBAEBDA = 14;</code>
     */
    protected $HOJJFBAEBDA = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 KABOKLBMCLJ = 5;</code>
     */
    private $KABOKLBMCLJ;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $HFEDLLHAELK
     *     @type int $exp
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $GJKHHFCBOCI
     *     @type array<\HJAJEBCDKIC>|\Google\Protobuf\Internal\RepeatedField $FKOHMNMAANH
     *     @type array<\JCMNNKMOFEB>|\Google\Protobuf\Internal\RepeatedField $EDLHPFKPGEF
     *     @type array<\DOFHMFAKNAB>|\Google\Protobuf\Internal\RepeatedField $LMIBNDEPFHI
     *     @type int $HEMENIBJABH
     *     @type bool $LFFJPMCCIKD
     *     @type int $HOJJFBAEBDA
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $KABOKLBMCLJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool HFEDLLHAELK = 7;</code>
     * @return bool
     */
    public function getHFEDLLHAELK()
    {
        return $this->HFEDLLHAELK;
    }

    /**
     * Generated from protobuf field <code>bool HFEDLLHAELK = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setHFEDLLHAELK($var)
    {
        GPBUtil::checkBool($var);
        $this->HFEDLLHAELK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 3;</code>
     * @return int
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Generated from protobuf field <code>uint32 exp = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setExp($var)
    {
        GPBUtil::checkUint32($var);
        $this->exp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 GJKHHFCBOCI = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGJKHHFCBOCI()
    {
        return $this->GJKHHFCBOCI;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 GJKHHFCBOCI = 15;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGJKHHFCBOCI($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->GJKHHFCBOCI = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .HJAJEBCDKIC FKOHMNMAANH = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFKOHMNMAANH()
    {
        return $this->FKOHMNMAANH;
    }

    /**
     * Generated from protobuf field <code>repeated .HJAJEBCDKIC FKOHMNMAANH = 9;</code>
     * @param array<\HJAJEBCDKIC>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFKOHMNMAANH($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \HJAJEBCDKIC::class);
        $this->FKOHMNMAANH = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .JCMNNKMOFEB EDLHPFKPGEF = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEDLHPFKPGEF()
    {
        return $this->EDLHPFKPGEF;
    }

    /**
     * Generated from protobuf field <code>repeated .JCMNNKMOFEB EDLHPFKPGEF = 6;</code>
     * @param array<\JCMNNKMOFEB>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEDLHPFKPGEF($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \JCMNNKMOFEB::class);
        $this->EDLHPFKPGEF = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .DOFHMFAKNAB LMIBNDEPFHI = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLMIBNDEPFHI()
    {
        return $this->LMIBNDEPFHI;
    }

    /**
     * Generated from protobuf field <code>repeated .DOFHMFAKNAB LMIBNDEPFHI = 2;</code>
     * @param array<\DOFHMFAKNAB>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLMIBNDEPFHI($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \DOFHMFAKNAB::class);
        $this->LMIBNDEPFHI = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HEMENIBJABH = 13;</code>
     * @return int
     */
    public function getHEMENIBJABH()
    {
        return $this->HEMENIBJABH;
    }

    /**
     * Generated from protobuf field <code>uint32 HEMENIBJABH = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setHEMENIBJABH($var)
    {
        GPBUtil::checkUint32($var);
        $this->HEMENIBJABH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool LFFJPMCCIKD = 10;</code>
     * @return bool
     */
    public function getLFFJPMCCIKD()
    {
        return $this->LFFJPMCCIKD;
    }

    /**
     * Generated from protobuf field <code>bool LFFJPMCCIKD = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setLFFJPMCCIKD($var)
    {
        GPBUtil::checkBool($var);
        $this->LFFJPMCCIKD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HOJJFBAEBDA = 14;</code>
     * @return int
     */
    public function getHOJJFBAEBDA()
    {
        return $this->HOJJFBAEBDA;
    }

    /**
     * Generated from protobuf field <code>uint32 HOJJFBAEBDA = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setHOJJFBAEBDA($var)
    {
        GPBUtil::checkUint32($var);
        $this->HOJJFBAEBDA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 KABOKLBMCLJ = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKABOKLBMCLJ()
    {
        return $this->KABOKLBMCLJ;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 KABOKLBMCLJ = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKABOKLBMCLJ($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->KABOKLBMCLJ = $arr;

        return $this;
    }

}
