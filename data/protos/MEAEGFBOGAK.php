<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MEAEGFBOGAK</code>
 */
class MEAEGFBOGAK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 AOMFDNHANFA = 4;</code>
     */
    protected $AOMFDNHANFA = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 FIIBEDLEJEJ = 14;</code>
     */
    private $FIIBEDLEJEJ;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $AOMFDNHANFA
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $FIIBEDLEJEJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 AOMFDNHANFA = 4;</code>
     * @return int
     */
    public function getAOMFDNHANFA()
    {
        return $this->AOMFDNHANFA;
    }

    /**
     * Generated from protobuf field <code>uint32 AOMFDNHANFA = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAOMFDNHANFA($var)
    {
        GPBUtil::checkUint32($var);
        $this->AOMFDNHANFA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 FIIBEDLEJEJ = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFIIBEDLEJEJ()
    {
        return $this->FIIBEDLEJEJ;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 FIIBEDLEJEJ = 14;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFIIBEDLEJEJ($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->FIIBEDLEJEJ = $arr;

        return $this;
    }

}

