<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GMPELJNCACF</code>
 */
class GMPELJNCACF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 OPOJBBKEDBL = 8;</code>
     */
    protected $OPOJBBKEDBL = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.BIFPDOCGFLC KCNBPDMKBOG = 14;</code>
     */
    protected $KCNBPDMKBOG = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $OPOJBBKEDBL
     *     @type int $retcode
     *     @type \BIFPDOCGFLC $KCNBPDMKBOG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 OPOJBBKEDBL = 8;</code>
     * @return int
     */
    public function getOPOJBBKEDBL()
    {
        return $this->OPOJBBKEDBL;
    }

    /**
     * Generated from protobuf field <code>uint32 OPOJBBKEDBL = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setOPOJBBKEDBL($var)
    {
        GPBUtil::checkUint32($var);
        $this->OPOJBBKEDBL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
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
     * Generated from protobuf field <code>.BIFPDOCGFLC KCNBPDMKBOG = 14;</code>
     * @return \BIFPDOCGFLC|null
     */
    public function getKCNBPDMKBOG()
    {
        return $this->KCNBPDMKBOG;
    }

    public function hasKCNBPDMKBOG()
    {
        return isset($this->KCNBPDMKBOG);
    }

    public function clearKCNBPDMKBOG()
    {
        unset($this->KCNBPDMKBOG);
    }

    /**
     * Generated from protobuf field <code>.BIFPDOCGFLC KCNBPDMKBOG = 14;</code>
     * @param \BIFPDOCGFLC $var
     * @return $this
     */
    public function setKCNBPDMKBOG($var)
    {
        GPBUtil::checkMessage($var, \BIFPDOCGFLC::class);
        $this->KCNBPDMKBOG = $var;

        return $this;
    }

}

