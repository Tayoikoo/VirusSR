<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LDHCCNHMIGD</code>
 */
class LDHCCNHMIGD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 BPPKPFKPMOP = 2;</code>
     */
    protected $BPPKPFKPMOP = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 HFDMDHAOMIM = 14;</code>
     */
    private $HFDMDHAOMIM;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $BPPKPFKPMOP
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $HFDMDHAOMIM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 BPPKPFKPMOP = 2;</code>
     * @return int
     */
    public function getBPPKPFKPMOP()
    {
        return $this->BPPKPFKPMOP;
    }

    /**
     * Generated from protobuf field <code>uint32 BPPKPFKPMOP = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBPPKPFKPMOP($var)
    {
        GPBUtil::checkUint32($var);
        $this->BPPKPFKPMOP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
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
     * Generated from protobuf field <code>repeated uint32 HFDMDHAOMIM = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHFDMDHAOMIM()
    {
        return $this->HFDMDHAOMIM;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HFDMDHAOMIM = 14;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHFDMDHAOMIM($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->HFDMDHAOMIM = $arr;

        return $this;
    }

}
