<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BCCKNMBGADA</code>
 */
class BCCKNMBGADA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 CPPKFKAIKNB = 14;</code>
     */
    protected $CPPKFKAIKNB = 0;
    /**
     * Generated from protobuf field <code>.ItemList CFCMPIIFJCO = 9;</code>
     */
    protected $CFCMPIIFJCO = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CPPKFKAIKNB
     *     @type \ItemList $CFCMPIIFJCO
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 CPPKFKAIKNB = 14;</code>
     * @return int
     */
    public function getCPPKFKAIKNB()
    {
        return $this->CPPKFKAIKNB;
    }

    /**
     * Generated from protobuf field <code>uint32 CPPKFKAIKNB = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setCPPKFKAIKNB($var)
    {
        GPBUtil::checkUint32($var);
        $this->CPPKFKAIKNB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList CFCMPIIFJCO = 9;</code>
     * @return \ItemList|null
     */
    public function getCFCMPIIFJCO()
    {
        return $this->CFCMPIIFJCO;
    }

    public function hasCFCMPIIFJCO()
    {
        return isset($this->CFCMPIIFJCO);
    }

    public function clearCFCMPIIFJCO()
    {
        unset($this->CFCMPIIFJCO);
    }

    /**
     * Generated from protobuf field <code>.ItemList CFCMPIIFJCO = 9;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setCFCMPIIFJCO($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->CFCMPIIFJCO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

