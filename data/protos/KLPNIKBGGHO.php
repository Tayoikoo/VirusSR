<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KLPNIKBGGHO</code>
 */
class KLPNIKBGGHO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 CLNGIMNBHPG = 1;</code>
     */
    protected $CLNGIMNBHPG = 0;
    /**
     * Generated from protobuf field <code>repeated .MABPAECJNNF NANJOFKIELP = 9;</code>
     */
    private $NANJOFKIELP;
    /**
     * Generated from protobuf field <code>repeated .MABPAECJNNF DCBDGNCODGD = 11;</code>
     */
    private $DCBDGNCODGD;
    /**
     * Generated from protobuf field <code>.MABPAECJNNF IKKDELCFKGM = 13;</code>
     */
    protected $IKKDELCFKGM = null;
    /**
     * Generated from protobuf field <code>uint32 AIHABKFMIGC = 4;</code>
     */
    protected $AIHABKFMIGC = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CLNGIMNBHPG
     *     @type array<\MABPAECJNNF>|\Google\Protobuf\Internal\RepeatedField $NANJOFKIELP
     *     @type array<\MABPAECJNNF>|\Google\Protobuf\Internal\RepeatedField $DCBDGNCODGD
     *     @type \MABPAECJNNF $IKKDELCFKGM
     *     @type int $AIHABKFMIGC
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 CLNGIMNBHPG = 1;</code>
     * @return int
     */
    public function getCLNGIMNBHPG()
    {
        return $this->CLNGIMNBHPG;
    }

    /**
     * Generated from protobuf field <code>uint32 CLNGIMNBHPG = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCLNGIMNBHPG($var)
    {
        GPBUtil::checkUint32($var);
        $this->CLNGIMNBHPG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .MABPAECJNNF NANJOFKIELP = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNANJOFKIELP()
    {
        return $this->NANJOFKIELP;
    }

    /**
     * Generated from protobuf field <code>repeated .MABPAECJNNF NANJOFKIELP = 9;</code>
     * @param array<\MABPAECJNNF>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNANJOFKIELP($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MABPAECJNNF::class);
        $this->NANJOFKIELP = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .MABPAECJNNF DCBDGNCODGD = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDCBDGNCODGD()
    {
        return $this->DCBDGNCODGD;
    }

    /**
     * Generated from protobuf field <code>repeated .MABPAECJNNF DCBDGNCODGD = 11;</code>
     * @param array<\MABPAECJNNF>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDCBDGNCODGD($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MABPAECJNNF::class);
        $this->DCBDGNCODGD = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MABPAECJNNF IKKDELCFKGM = 13;</code>
     * @return \MABPAECJNNF|null
     */
    public function getIKKDELCFKGM()
    {
        return $this->IKKDELCFKGM;
    }

    public function hasIKKDELCFKGM()
    {
        return isset($this->IKKDELCFKGM);
    }

    public function clearIKKDELCFKGM()
    {
        unset($this->IKKDELCFKGM);
    }

    /**
     * Generated from protobuf field <code>.MABPAECJNNF IKKDELCFKGM = 13;</code>
     * @param \MABPAECJNNF $var
     * @return $this
     */
    public function setIKKDELCFKGM($var)
    {
        GPBUtil::checkMessage($var, \MABPAECJNNF::class);
        $this->IKKDELCFKGM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AIHABKFMIGC = 4;</code>
     * @return int
     */
    public function getAIHABKFMIGC()
    {
        return $this->AIHABKFMIGC;
    }

    /**
     * Generated from protobuf field <code>uint32 AIHABKFMIGC = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAIHABKFMIGC($var)
    {
        GPBUtil::checkUint32($var);
        $this->AIHABKFMIGC = $var;

        return $this;
    }

}

