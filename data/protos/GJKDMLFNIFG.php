<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GJKDMLFNIFG</code>
 */
class GJKDMLFNIFG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool NKECMFCFJAK = 5;</code>
     */
    protected $NKECMFCFJAK = false;
    /**
     * Generated from protobuf field <code>repeated .OMBPAIGKBPM OJPJILINGJE = 6;</code>
     */
    private $OJPJILINGJE;
    /**
     * Generated from protobuf field <code>repeated .HHGENHNPJGI PJJIHAOIDLL = 8;</code>
     */
    private $PJJIHAOIDLL;
    /**
     * Generated from protobuf field <code>bool HNCHHLBKJBP = 4;</code>
     */
    protected $HNCHHLBKJBP = false;
    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>int32 EDENEPIIEGL = 9;</code>
     */
    protected $EDENEPIIEGL = 0;
    /**
     * Generated from protobuf field <code>int32 HBJGCJMFMKB = 14;</code>
     */
    protected $HBJGCJMFMKB = 0;
    /**
     * Generated from protobuf field <code>uint32 FINLPBFNLHP = 1;</code>
     */
    protected $FINLPBFNLHP = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $NKECMFCFJAK
     *     @type array<\OMBPAIGKBPM>|\Google\Protobuf\Internal\RepeatedField $OJPJILINGJE
     *     @type array<\HHGENHNPJGI>|\Google\Protobuf\Internal\RepeatedField $PJJIHAOIDLL
     *     @type bool $HNCHHLBKJBP
     *     @type int $retcode
     *     @type int $EDENEPIIEGL
     *     @type int $HBJGCJMFMKB
     *     @type int $FINLPBFNLHP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool NKECMFCFJAK = 5;</code>
     * @return bool
     */
    public function getNKECMFCFJAK()
    {
        return $this->NKECMFCFJAK;
    }

    /**
     * Generated from protobuf field <code>bool NKECMFCFJAK = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setNKECMFCFJAK($var)
    {
        GPBUtil::checkBool($var);
        $this->NKECMFCFJAK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .OMBPAIGKBPM OJPJILINGJE = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOJPJILINGJE()
    {
        return $this->OJPJILINGJE;
    }

    /**
     * Generated from protobuf field <code>repeated .OMBPAIGKBPM OJPJILINGJE = 6;</code>
     * @param array<\OMBPAIGKBPM>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOJPJILINGJE($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \OMBPAIGKBPM::class);
        $this->OJPJILINGJE = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .HHGENHNPJGI PJJIHAOIDLL = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPJJIHAOIDLL()
    {
        return $this->PJJIHAOIDLL;
    }

    /**
     * Generated from protobuf field <code>repeated .HHGENHNPJGI PJJIHAOIDLL = 8;</code>
     * @param array<\HHGENHNPJGI>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPJJIHAOIDLL($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \HHGENHNPJGI::class);
        $this->PJJIHAOIDLL = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool HNCHHLBKJBP = 4;</code>
     * @return bool
     */
    public function getHNCHHLBKJBP()
    {
        return $this->HNCHHLBKJBP;
    }

    /**
     * Generated from protobuf field <code>bool HNCHHLBKJBP = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setHNCHHLBKJBP($var)
    {
        GPBUtil::checkBool($var);
        $this->HNCHHLBKJBP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
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
     * Generated from protobuf field <code>int32 EDENEPIIEGL = 9;</code>
     * @return int
     */
    public function getEDENEPIIEGL()
    {
        return $this->EDENEPIIEGL;
    }

    /**
     * Generated from protobuf field <code>int32 EDENEPIIEGL = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setEDENEPIIEGL($var)
    {
        GPBUtil::checkInt32($var);
        $this->EDENEPIIEGL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 HBJGCJMFMKB = 14;</code>
     * @return int
     */
    public function getHBJGCJMFMKB()
    {
        return $this->HBJGCJMFMKB;
    }

    /**
     * Generated from protobuf field <code>int32 HBJGCJMFMKB = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setHBJGCJMFMKB($var)
    {
        GPBUtil::checkInt32($var);
        $this->HBJGCJMFMKB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 FINLPBFNLHP = 1;</code>
     * @return int
     */
    public function getFINLPBFNLHP()
    {
        return $this->FINLPBFNLHP;
    }

    /**
     * Generated from protobuf field <code>uint32 FINLPBFNLHP = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFINLPBFNLHP($var)
    {
        GPBUtil::checkUint32($var);
        $this->FINLPBFNLHP = $var;

        return $this;
    }

}
