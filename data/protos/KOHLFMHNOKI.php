<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KOHLFMHNOKI</code>
 */
class KOHLFMHNOKI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.ABFBLEKMNME LCKJCKJBLEC = 2;</code>
     */
    protected $LCKJCKJBLEC = null;
    /**
     * Generated from protobuf field <code>uint32 HGMFEGGJEFB = 5;</code>
     */
    protected $HGMFEGGJEFB = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \ABFBLEKMNME $LCKJCKJBLEC
     *     @type int $HGMFEGGJEFB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
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
     * Generated from protobuf field <code>.ABFBLEKMNME LCKJCKJBLEC = 2;</code>
     * @return \ABFBLEKMNME|null
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
     * Generated from protobuf field <code>.ABFBLEKMNME LCKJCKJBLEC = 2;</code>
     * @param \ABFBLEKMNME $var
     * @return $this
     */
    public function setLCKJCKJBLEC($var)
    {
        GPBUtil::checkMessage($var, \ABFBLEKMNME::class);
        $this->LCKJCKJBLEC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HGMFEGGJEFB = 5;</code>
     * @return int
     */
    public function getHGMFEGGJEFB()
    {
        return $this->HGMFEGGJEFB;
    }

    /**
     * Generated from protobuf field <code>uint32 HGMFEGGJEFB = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setHGMFEGGJEFB($var)
    {
        GPBUtil::checkUint32($var);
        $this->HGMFEGGJEFB = $var;

        return $this;
    }

}

