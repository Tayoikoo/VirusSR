<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OGHIAIBFKLM</code>
 */
class OGHIAIBFKLM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.DJOMEMKCBNB HNLKFHGACIP = 1;</code>
     */
    protected $HNLKFHGACIP = null;
    /**
     * Generated from protobuf field <code>uint32 HPDCDPEIAHP = 15;</code>
     */
    protected $HPDCDPEIAHP = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \DJOMEMKCBNB $HNLKFHGACIP
     *     @type int $HPDCDPEIAHP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
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
     * Generated from protobuf field <code>.DJOMEMKCBNB HNLKFHGACIP = 1;</code>
     * @return \DJOMEMKCBNB|null
     */
    public function getHNLKFHGACIP()
    {
        return $this->HNLKFHGACIP;
    }

    public function hasHNLKFHGACIP()
    {
        return isset($this->HNLKFHGACIP);
    }

    public function clearHNLKFHGACIP()
    {
        unset($this->HNLKFHGACIP);
    }

    /**
     * Generated from protobuf field <code>.DJOMEMKCBNB HNLKFHGACIP = 1;</code>
     * @param \DJOMEMKCBNB $var
     * @return $this
     */
    public function setHNLKFHGACIP($var)
    {
        GPBUtil::checkMessage($var, \DJOMEMKCBNB::class);
        $this->HNLKFHGACIP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HPDCDPEIAHP = 15;</code>
     * @return int
     */
    public function getHPDCDPEIAHP()
    {
        return $this->HPDCDPEIAHP;
    }

    /**
     * Generated from protobuf field <code>uint32 HPDCDPEIAHP = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setHPDCDPEIAHP($var)
    {
        GPBUtil::checkUint32($var);
        $this->HPDCDPEIAHP = $var;

        return $this;
    }

}
