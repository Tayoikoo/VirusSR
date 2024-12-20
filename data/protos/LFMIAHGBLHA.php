<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LFMIAHGBLHA</code>
 */
class LFMIAHGBLHA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 PBALFFCFPJD = 14;</code>
     */
    protected $PBALFFCFPJD = 0;
    /**
     * Generated from protobuf field <code>bool FGLIDEJOCJE = 7;</code>
     */
    protected $FGLIDEJOCJE = false;
    /**
     * Generated from protobuf field <code>repeated .ODBFBEAPALJ INAMLBHPBOF = 12;</code>
     */
    private $INAMLBHPBOF;
    /**
     * Generated from protobuf field <code>uint32 GEOJJDPGGNA = 6;</code>
     */
    protected $GEOJJDPGGNA = 0;
    /**
     * Generated from protobuf field <code>bool HJCGEIDBICC = 8;</code>
     */
    protected $HJCGEIDBICC = false;
    /**
     * Generated from protobuf field <code>.AGIKBPNJPMF BPGOFIPCNLA = 10;</code>
     */
    protected $BPGOFIPCNLA = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $PBALFFCFPJD
     *     @type bool $FGLIDEJOCJE
     *     @type array<\ODBFBEAPALJ>|\Google\Protobuf\Internal\RepeatedField $INAMLBHPBOF
     *     @type int $GEOJJDPGGNA
     *     @type bool $HJCGEIDBICC
     *     @type \AGIKBPNJPMF $BPGOFIPCNLA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 PBALFFCFPJD = 14;</code>
     * @return int
     */
    public function getPBALFFCFPJD()
    {
        return $this->PBALFFCFPJD;
    }

    /**
     * Generated from protobuf field <code>uint32 PBALFFCFPJD = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setPBALFFCFPJD($var)
    {
        GPBUtil::checkUint32($var);
        $this->PBALFFCFPJD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool FGLIDEJOCJE = 7;</code>
     * @return bool
     */
    public function getFGLIDEJOCJE()
    {
        return $this->FGLIDEJOCJE;
    }

    /**
     * Generated from protobuf field <code>bool FGLIDEJOCJE = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setFGLIDEJOCJE($var)
    {
        GPBUtil::checkBool($var);
        $this->FGLIDEJOCJE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ODBFBEAPALJ INAMLBHPBOF = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getINAMLBHPBOF()
    {
        return $this->INAMLBHPBOF;
    }

    /**
     * Generated from protobuf field <code>repeated .ODBFBEAPALJ INAMLBHPBOF = 12;</code>
     * @param array<\ODBFBEAPALJ>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setINAMLBHPBOF($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ODBFBEAPALJ::class);
        $this->INAMLBHPBOF = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 GEOJJDPGGNA = 6;</code>
     * @return int
     */
    public function getGEOJJDPGGNA()
    {
        return $this->GEOJJDPGGNA;
    }

    /**
     * Generated from protobuf field <code>uint32 GEOJJDPGGNA = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setGEOJJDPGGNA($var)
    {
        GPBUtil::checkUint32($var);
        $this->GEOJJDPGGNA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool HJCGEIDBICC = 8;</code>
     * @return bool
     */
    public function getHJCGEIDBICC()
    {
        return $this->HJCGEIDBICC;
    }

    /**
     * Generated from protobuf field <code>bool HJCGEIDBICC = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setHJCGEIDBICC($var)
    {
        GPBUtil::checkBool($var);
        $this->HJCGEIDBICC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AGIKBPNJPMF BPGOFIPCNLA = 10;</code>
     * @return \AGIKBPNJPMF|null
     */
    public function getBPGOFIPCNLA()
    {
        return $this->BPGOFIPCNLA;
    }

    public function hasBPGOFIPCNLA()
    {
        return isset($this->BPGOFIPCNLA);
    }

    public function clearBPGOFIPCNLA()
    {
        unset($this->BPGOFIPCNLA);
    }

    /**
     * Generated from protobuf field <code>.AGIKBPNJPMF BPGOFIPCNLA = 10;</code>
     * @param \AGIKBPNJPMF $var
     * @return $this
     */
    public function setBPGOFIPCNLA($var)
    {
        GPBUtil::checkMessage($var, \AGIKBPNJPMF::class);
        $this->BPGOFIPCNLA = $var;

        return $this;
    }

}
