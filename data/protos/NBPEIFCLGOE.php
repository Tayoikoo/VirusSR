<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NBPEIFCLGOE</code>
 */
class NBPEIFCLGOE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .KECLGHLEBKO NDGNEOFKKKB = 5;</code>
     */
    private $NDGNEOFKKKB;
    /**
     * Generated from protobuf field <code>uint32 FAFGOIMCDPF = 12;</code>
     */
    protected $FAFGOIMCDPF = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>string MDOCEIENLCH = 11;</code>
     */
    protected $MDOCEIENLCH = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\KECLGHLEBKO>|\Google\Protobuf\Internal\RepeatedField $NDGNEOFKKKB
     *     @type int $FAFGOIMCDPF
     *     @type int $retcode
     *     @type string $MDOCEIENLCH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .KECLGHLEBKO NDGNEOFKKKB = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNDGNEOFKKKB()
    {
        return $this->NDGNEOFKKKB;
    }

    /**
     * Generated from protobuf field <code>repeated .KECLGHLEBKO NDGNEOFKKKB = 5;</code>
     * @param array<\KECLGHLEBKO>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNDGNEOFKKKB($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \KECLGHLEBKO::class);
        $this->NDGNEOFKKKB = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 FAFGOIMCDPF = 12;</code>
     * @return int
     */
    public function getFAFGOIMCDPF()
    {
        return $this->FAFGOIMCDPF;
    }

    /**
     * Generated from protobuf field <code>uint32 FAFGOIMCDPF = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setFAFGOIMCDPF($var)
    {
        GPBUtil::checkUint32($var);
        $this->FAFGOIMCDPF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
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
     * Generated from protobuf field <code>string MDOCEIENLCH = 11;</code>
     * @return string
     */
    public function getMDOCEIENLCH()
    {
        return $this->MDOCEIENLCH;
    }

    /**
     * Generated from protobuf field <code>string MDOCEIENLCH = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setMDOCEIENLCH($var)
    {
        GPBUtil::checkString($var, True);
        $this->MDOCEIENLCH = $var;

        return $this;
    }

}
