<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BHDNLHLHPAF</code>
 */
class BHDNLHLHPAF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.EACHHLJGLGI MLPHBCLBCIP = 7;</code>
     */
    protected $MLPHBCLBCIP = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.LMKFPPPCHCI LCKJCKJBLEC = 13;</code>
     */
    protected $LCKJCKJBLEC = null;
    /**
     * Generated from protobuf field <code>.ItemList IEFEBAGKBGO = 8;</code>
     */
    protected $IEFEBAGKBGO = null;
    /**
     * Generated from protobuf field <code>.KOKOLGODIMF BCDDLGGMDJK = 12;</code>
     */
    protected $BCDDLGGMDJK = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \EACHHLJGLGI $MLPHBCLBCIP
     *     @type int $retcode
     *     @type \LMKFPPPCHCI $LCKJCKJBLEC
     *     @type \ItemList $IEFEBAGKBGO
     *     @type \KOKOLGODIMF $BCDDLGGMDJK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.EACHHLJGLGI MLPHBCLBCIP = 7;</code>
     * @return \EACHHLJGLGI|null
     */
    public function getMLPHBCLBCIP()
    {
        return $this->MLPHBCLBCIP;
    }

    public function hasMLPHBCLBCIP()
    {
        return isset($this->MLPHBCLBCIP);
    }

    public function clearMLPHBCLBCIP()
    {
        unset($this->MLPHBCLBCIP);
    }

    /**
     * Generated from protobuf field <code>.EACHHLJGLGI MLPHBCLBCIP = 7;</code>
     * @param \EACHHLJGLGI $var
     * @return $this
     */
    public function setMLPHBCLBCIP($var)
    {
        GPBUtil::checkMessage($var, \EACHHLJGLGI::class);
        $this->MLPHBCLBCIP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
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
     * Generated from protobuf field <code>.LMKFPPPCHCI LCKJCKJBLEC = 13;</code>
     * @return \LMKFPPPCHCI|null
     */
    public function getLCKJCKJBLEC()
    {
        return $this->LCKJCKJBLEC;
    }

    public function hasLCKJCKJBLEC()
    {
        return isset($this->LCKJCKJBLEC);
    }

    public function clearLCKJCKJBLEC()
    {
        unset($this->LCKJCKJBLEC);
    }

    /**
     * Generated from protobuf field <code>.LMKFPPPCHCI LCKJCKJBLEC = 13;</code>
     * @param \LMKFPPPCHCI $var
     * @return $this
     */
    public function setLCKJCKJBLEC($var)
    {
        GPBUtil::checkMessage($var, \LMKFPPPCHCI::class);
        $this->LCKJCKJBLEC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList IEFEBAGKBGO = 8;</code>
     * @return \ItemList|null
     */
    public function getIEFEBAGKBGO()
    {
        return $this->IEFEBAGKBGO;
    }

    public function hasIEFEBAGKBGO()
    {
        return isset($this->IEFEBAGKBGO);
    }

    public function clearIEFEBAGKBGO()
    {
        unset($this->IEFEBAGKBGO);
    }

    /**
     * Generated from protobuf field <code>.ItemList IEFEBAGKBGO = 8;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setIEFEBAGKBGO($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->IEFEBAGKBGO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.KOKOLGODIMF BCDDLGGMDJK = 12;</code>
     * @return \KOKOLGODIMF|null
     */
    public function getBCDDLGGMDJK()
    {
        return $this->BCDDLGGMDJK;
    }

    public function hasBCDDLGGMDJK()
    {
        return isset($this->BCDDLGGMDJK);
    }

    public function clearBCDDLGGMDJK()
    {
        unset($this->BCDDLGGMDJK);
    }

    /**
     * Generated from protobuf field <code>.KOKOLGODIMF BCDDLGGMDJK = 12;</code>
     * @param \KOKOLGODIMF $var
     * @return $this
     */
    public function setBCDDLGGMDJK($var)
    {
        GPBUtil::checkMessage($var, \KOKOLGODIMF::class);
        $this->BCDDLGGMDJK = $var;

        return $this;
    }

}

