<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DBJBOHKBGEM</code>
 */
class DBJBOHKBGEM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.EGOBKCFAJII BDAJBMAANIN = 401;</code>
     */
    protected $BDAJBMAANIN = null;
    /**
     * Generated from protobuf field <code>.CFLJBAPFNBB PPAEOCBACHN = 1094;</code>
     */
    protected $PPAEOCBACHN = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \EGOBKCFAJII $BDAJBMAANIN
     *     @type \CFLJBAPFNBB $PPAEOCBACHN
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.EGOBKCFAJII BDAJBMAANIN = 401;</code>
     * @return \EGOBKCFAJII|null
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
     * Generated from protobuf field <code>.EGOBKCFAJII BDAJBMAANIN = 401;</code>
     * @param \EGOBKCFAJII $var
     * @return $this
     */
    public function setBDAJBMAANIN($var)
    {
        GPBUtil::checkMessage($var, \EGOBKCFAJII::class);
        $this->BDAJBMAANIN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CFLJBAPFNBB PPAEOCBACHN = 1094;</code>
     * @return \CFLJBAPFNBB|null
     */
    public function getPPAEOCBACHN()
    {
        return $this->PPAEOCBACHN;
    }

    public function hasPPAEOCBACHN()
    {
        return isset($this->PPAEOCBACHN);
    }

    public function clearPPAEOCBACHN()
    {
        unset($this->PPAEOCBACHN);
    }

    /**
     * Generated from protobuf field <code>.CFLJBAPFNBB PPAEOCBACHN = 1094;</code>
     * @param \CFLJBAPFNBB $var
     * @return $this
     */
    public function setPPAEOCBACHN($var)
    {
        GPBUtil::checkMessage($var, \CFLJBAPFNBB::class);
        $this->PPAEOCBACHN = $var;

        return $this;
    }

}
