<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MCFFLPBPKEG</code>
 */
class MCFFLPBPKEG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 IKHDMKBFPMA = 6;</code>
     */
    protected $IKHDMKBFPMA = 0;
    /**
     * Generated from protobuf field <code>uint32 NAMPNOLBOEK = 3;</code>
     */
    protected $NAMPNOLBOEK = 0;
    /**
     * Generated from protobuf field <code>.OJGDBABMNMH KGGHLADEKGP = 15;</code>
     */
    protected $KGGHLADEKGP = 0;
    /**
     * Generated from protobuf field <code>uint32 GFKIHHOPJDG = 14;</code>
     */
    protected $GFKIHHOPJDG = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 HDAIJPHEEJO = 11;</code>
     */
    private $HDAIJPHEEJO;
    /**
     * Generated from protobuf field <code>.ItemList reward = 10;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>repeated uint32 NOKLENCDFNF = 2;</code>
     */
    private $NOKLENCDFNF;
    /**
     * Generated from protobuf field <code>uint32 KOBMCLGJJDB = 9;</code>
     */
    protected $KOBMCLGJJDB = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $IKHDMKBFPMA
     *     @type int $NAMPNOLBOEK
     *     @type int $KGGHLADEKGP
     *     @type int $GFKIHHOPJDG
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $HDAIJPHEEJO
     *     @type \ItemList $reward
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $NOKLENCDFNF
     *     @type int $KOBMCLGJJDB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 IKHDMKBFPMA = 6;</code>
     * @return int
     */
    public function getIKHDMKBFPMA()
    {
        return $this->IKHDMKBFPMA;
    }

    /**
     * Generated from protobuf field <code>uint32 IKHDMKBFPMA = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setIKHDMKBFPMA($var)
    {
        GPBUtil::checkUint32($var);
        $this->IKHDMKBFPMA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NAMPNOLBOEK = 3;</code>
     * @return int
     */
    public function getNAMPNOLBOEK()
    {
        return $this->NAMPNOLBOEK;
    }

    /**
     * Generated from protobuf field <code>uint32 NAMPNOLBOEK = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNAMPNOLBOEK($var)
    {
        GPBUtil::checkUint32($var);
        $this->NAMPNOLBOEK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.OJGDBABMNMH KGGHLADEKGP = 15;</code>
     * @return int
     */
    public function getKGGHLADEKGP()
    {
        return $this->KGGHLADEKGP;
    }

    /**
     * Generated from protobuf field <code>.OJGDBABMNMH KGGHLADEKGP = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setKGGHLADEKGP($var)
    {
        GPBUtil::checkEnum($var, \OJGDBABMNMH::class);
        $this->KGGHLADEKGP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 GFKIHHOPJDG = 14;</code>
     * @return int
     */
    public function getGFKIHHOPJDG()
    {
        return $this->GFKIHHOPJDG;
    }

    /**
     * Generated from protobuf field <code>uint32 GFKIHHOPJDG = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setGFKIHHOPJDG($var)
    {
        GPBUtil::checkUint32($var);
        $this->GFKIHHOPJDG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HDAIJPHEEJO = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHDAIJPHEEJO()
    {
        return $this->HDAIJPHEEJO;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HDAIJPHEEJO = 11;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHDAIJPHEEJO($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->HDAIJPHEEJO = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 10;</code>
     * @return \ItemList|null
     */
    public function getReward()
    {
        return $this->reward;
    }

    public function hasReward()
    {
        return isset($this->reward);
    }

    public function clearReward()
    {
        unset($this->reward);
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 10;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setReward($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 NOKLENCDFNF = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNOKLENCDFNF()
    {
        return $this->NOKLENCDFNF;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 NOKLENCDFNF = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNOKLENCDFNF($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->NOKLENCDFNF = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 KOBMCLGJJDB = 9;</code>
     * @return int
     */
    public function getKOBMCLGJJDB()
    {
        return $this->KOBMCLGJJDB;
    }

    /**
     * Generated from protobuf field <code>uint32 KOBMCLGJJDB = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setKOBMCLGJJDB($var)
    {
        GPBUtil::checkUint32($var);
        $this->KOBMCLGJJDB = $var;

        return $this;
    }

}

