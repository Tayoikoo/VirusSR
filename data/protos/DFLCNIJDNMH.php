<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DFLCNIJDNMH</code>
 */
class DFLCNIJDNMH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 BGJOPDHJJII = 1;</code>
     */
    protected $BGJOPDHJJII = 0;
    /**
     * Generated from protobuf field <code>repeated .EHOKFFGBFLN MDHEDLPAJAL = 6;</code>
     */
    private $MDHEDLPAJAL;
    /**
     * Generated from protobuf field <code>repeated uint32 JJNHLCPKIPO = 5;</code>
     */
    private $JJNHLCPKIPO;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $BGJOPDHJJII
     *     @type array<\EHOKFFGBFLN>|\Google\Protobuf\Internal\RepeatedField $MDHEDLPAJAL
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $JJNHLCPKIPO
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 BGJOPDHJJII = 1;</code>
     * @return int
     */
    public function getBGJOPDHJJII()
    {
        return $this->BGJOPDHJJII;
    }

    /**
     * Generated from protobuf field <code>uint32 BGJOPDHJJII = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBGJOPDHJJII($var)
    {
        GPBUtil::checkUint32($var);
        $this->BGJOPDHJJII = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .EHOKFFGBFLN MDHEDLPAJAL = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMDHEDLPAJAL()
    {
        return $this->MDHEDLPAJAL;
    }

    /**
     * Generated from protobuf field <code>repeated .EHOKFFGBFLN MDHEDLPAJAL = 6;</code>
     * @param array<\EHOKFFGBFLN>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMDHEDLPAJAL($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \EHOKFFGBFLN::class);
        $this->MDHEDLPAJAL = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 JJNHLCPKIPO = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJJNHLCPKIPO()
    {
        return $this->JJNHLCPKIPO;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 JJNHLCPKIPO = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJJNHLCPKIPO($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->JJNHLCPKIPO = $arr;

        return $this;
    }

}
