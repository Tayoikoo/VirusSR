<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LCMCEDEOEHF</code>
 */
class LCMCEDEOEHF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.JMEOKPPCBHL ANAGKANMOBM = 7;</code>
     */
    protected $ANAGKANMOBM = null;
    /**
     * Generated from protobuf field <code>repeated .PunkLordBattleRecord LMJJEJMPMCJ = 8;</code>
     */
    private $LMJJEJMPMCJ;
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .PunkLordBattleReplay KHDICNCFIAP = 1;</code>
     */
    private $KHDICNCFIAP;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \JMEOKPPCBHL $ANAGKANMOBM
     *     @type array<\PunkLordBattleRecord>|\Google\Protobuf\Internal\RepeatedField $LMJJEJMPMCJ
     *     @type int $retcode
     *     @type array<\PunkLordBattleReplay>|\Google\Protobuf\Internal\RepeatedField $KHDICNCFIAP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.JMEOKPPCBHL ANAGKANMOBM = 7;</code>
     * @return \JMEOKPPCBHL|null
     */
    public function getANAGKANMOBM()
    {
        return $this->ANAGKANMOBM;
    }

    public function hasANAGKANMOBM()
    {
        return isset($this->ANAGKANMOBM);
    }

    public function clearANAGKANMOBM()
    {
        unset($this->ANAGKANMOBM);
    }

    /**
     * Generated from protobuf field <code>.JMEOKPPCBHL ANAGKANMOBM = 7;</code>
     * @param \JMEOKPPCBHL $var
     * @return $this
     */
    public function setANAGKANMOBM($var)
    {
        GPBUtil::checkMessage($var, \JMEOKPPCBHL::class);
        $this->ANAGKANMOBM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .PunkLordBattleRecord LMJJEJMPMCJ = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLMJJEJMPMCJ()
    {
        return $this->LMJJEJMPMCJ;
    }

    /**
     * Generated from protobuf field <code>repeated .PunkLordBattleRecord LMJJEJMPMCJ = 8;</code>
     * @param array<\PunkLordBattleRecord>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLMJJEJMPMCJ($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \PunkLordBattleRecord::class);
        $this->LMJJEJMPMCJ = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
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
     * Generated from protobuf field <code>repeated .PunkLordBattleReplay KHDICNCFIAP = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKHDICNCFIAP()
    {
        return $this->KHDICNCFIAP;
    }

    /**
     * Generated from protobuf field <code>repeated .PunkLordBattleReplay KHDICNCFIAP = 1;</code>
     * @param array<\PunkLordBattleReplay>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKHDICNCFIAP($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \PunkLordBattleReplay::class);
        $this->KHDICNCFIAP = $arr;

        return $this;
    }

}

