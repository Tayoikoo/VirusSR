<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>APKBNOCBBBO</code>
 */
class APKBNOCBBBO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.JGNAJFOGFBJ PEHGKGFPEII = 15;</code>
     */
    protected $PEHGKGFPEII = null;
    /**
     * Generated from protobuf field <code>.KJOABOHEHIH MFBENODFGOJ = 3;</code>
     */
    protected $MFBENODFGOJ = null;
    /**
     * Generated from protobuf field <code>.NBOICPBANIC LKGOAPJDNBJ = 6;</code>
     */
    protected $LKGOAPJDNBJ = null;
    /**
     * Generated from protobuf field <code>.FBGHJICBPMN BDAJBMAANIN = 12;</code>
     */
    protected $BDAJBMAANIN = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \JGNAJFOGFBJ $PEHGKGFPEII
     *     @type \KJOABOHEHIH $MFBENODFGOJ
     *     @type \NBOICPBANIC $LKGOAPJDNBJ
     *     @type \FBGHJICBPMN $BDAJBMAANIN
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
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
     * Generated from protobuf field <code>.JGNAJFOGFBJ PEHGKGFPEII = 15;</code>
     * @return \JGNAJFOGFBJ|null
     */
    public function getPEHGKGFPEII()
    {
        return $this->PEHGKGFPEII;
    }

    public function hasPEHGKGFPEII()
    {
        return isset($this->PEHGKGFPEII);
    }

    public function clearPEHGKGFPEII()
    {
        unset($this->PEHGKGFPEII);
    }

    /**
     * Generated from protobuf field <code>.JGNAJFOGFBJ PEHGKGFPEII = 15;</code>
     * @param \JGNAJFOGFBJ $var
     * @return $this
     */
    public function setPEHGKGFPEII($var)
    {
        GPBUtil::checkMessage($var, \JGNAJFOGFBJ::class);
        $this->PEHGKGFPEII = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.KJOABOHEHIH MFBENODFGOJ = 3;</code>
     * @return \KJOABOHEHIH|null
     */
    public function getMFBENODFGOJ()
    {
        return $this->MFBENODFGOJ;
    }

    public function hasMFBENODFGOJ()
    {
        return isset($this->MFBENODFGOJ);
    }

    public function clearMFBENODFGOJ()
    {
        unset($this->MFBENODFGOJ);
    }

    /**
     * Generated from protobuf field <code>.KJOABOHEHIH MFBENODFGOJ = 3;</code>
     * @param \KJOABOHEHIH $var
     * @return $this
     */
    public function setMFBENODFGOJ($var)
    {
        GPBUtil::checkMessage($var, \KJOABOHEHIH::class);
        $this->MFBENODFGOJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.NBOICPBANIC LKGOAPJDNBJ = 6;</code>
     * @return \NBOICPBANIC|null
     */
    public function getLKGOAPJDNBJ()
    {
        return $this->LKGOAPJDNBJ;
    }

    public function hasLKGOAPJDNBJ()
    {
        return isset($this->LKGOAPJDNBJ);
    }

    public function clearLKGOAPJDNBJ()
    {
        unset($this->LKGOAPJDNBJ);
    }

    /**
     * Generated from protobuf field <code>.NBOICPBANIC LKGOAPJDNBJ = 6;</code>
     * @param \NBOICPBANIC $var
     * @return $this
     */
    public function setLKGOAPJDNBJ($var)
    {
        GPBUtil::checkMessage($var, \NBOICPBANIC::class);
        $this->LKGOAPJDNBJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FBGHJICBPMN BDAJBMAANIN = 12;</code>
     * @return \FBGHJICBPMN|null
     */
    public function getBDAJBMAANIN()
    {
        return $this->BDAJBMAANIN;
    }

    public function hasBDAJBMAANIN()
    {
        return isset($this->BDAJBMAANIN);
    }

    public function clearBDAJBMAANIN()
    {
        unset($this->BDAJBMAANIN);
    }

    /**
     * Generated from protobuf field <code>.FBGHJICBPMN BDAJBMAANIN = 12;</code>
     * @param \FBGHJICBPMN $var
     * @return $this
     */
    public function setBDAJBMAANIN($var)
    {
        GPBUtil::checkMessage($var, \FBGHJICBPMN::class);
        $this->BDAJBMAANIN = $var;

        return $this;
    }

}
