<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EJJMCCBLHMC</code>
 */
class EJJMCCBLHMC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 MEFNJKOFLND = 5;</code>
     */
    private $MEFNJKOFLND;
    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 KDIAFEMLEOE = 7;</code>
     */
    protected $KDIAFEMLEOE = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 AGCBCOBPGMF = 14;</code>
     */
    private $AGCBCOBPGMF;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $MEFNJKOFLND
     *     @type int $retcode
     *     @type int $KDIAFEMLEOE
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $AGCBCOBPGMF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 MEFNJKOFLND = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMEFNJKOFLND()
    {
        return $this->MEFNJKOFLND;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 MEFNJKOFLND = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMEFNJKOFLND($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->MEFNJKOFLND = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
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
     * Generated from protobuf field <code>uint32 KDIAFEMLEOE = 7;</code>
     * @return int
     */
    public function getKDIAFEMLEOE()
    {
        return $this->KDIAFEMLEOE;
    }

    /**
     * Generated from protobuf field <code>uint32 KDIAFEMLEOE = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setKDIAFEMLEOE($var)
    {
        GPBUtil::checkUint32($var);
        $this->KDIAFEMLEOE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 AGCBCOBPGMF = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAGCBCOBPGMF()
    {
        return $this->AGCBCOBPGMF;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 AGCBCOBPGMF = 14;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAGCBCOBPGMF($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->AGCBCOBPGMF = $arr;

        return $this;
    }

}
