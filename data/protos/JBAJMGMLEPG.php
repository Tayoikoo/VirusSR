<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JBAJMGMLEPG</code>
 */
class JBAJMGMLEPG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.LMKFPPPCHCI LCKJCKJBLEC = 3;</code>
     */
    protected $LCKJCKJBLEC = null;
    /**
     * Generated from protobuf field <code>.EACHHLJGLGI MLPHBCLBCIP = 6;</code>
     */
    protected $MLPHBCLBCIP = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \LMKFPPPCHCI $LCKJCKJBLEC
     *     @type \EACHHLJGLGI $MLPHBCLBCIP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.LMKFPPPCHCI LCKJCKJBLEC = 3;</code>
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
     * Generated from protobuf field <code>.LMKFPPPCHCI LCKJCKJBLEC = 3;</code>
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
     * Generated from protobuf field <code>.EACHHLJGLGI MLPHBCLBCIP = 6;</code>
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
     * Generated from protobuf field <code>.EACHHLJGLGI MLPHBCLBCIP = 6;</code>
     * @param \EACHHLJGLGI $var
     * @return $this
     */
    public function setMLPHBCLBCIP($var)
    {
        GPBUtil::checkMessage($var, \EACHHLJGLGI::class);
        $this->MLPHBCLBCIP = $var;

        return $this;
    }

}
