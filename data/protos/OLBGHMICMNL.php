<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OLBGHMICMNL</code>
 */
class OLBGHMICMNL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GBMNLMLHIAB = 6;</code>
     */
    protected $GBMNLMLHIAB = 0;
    /**
     * Generated from protobuf field <code>uint32 GHGHEAHHAGC = 5;</code>
     */
    protected $GHGHEAHHAGC = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 LJKLKCGMJFE = 2;</code>
     */
    protected $LJKLKCGMJFE = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 BNFOCPLHDMA = 15;</code>
     */
    private $BNFOCPLHDMA;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GBMNLMLHIAB
     *     @type int $GHGHEAHHAGC
     *     @type int $retcode
     *     @type int $LJKLKCGMJFE
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $BNFOCPLHDMA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GBMNLMLHIAB = 6;</code>
     * @return int
     */
    public function getGBMNLMLHIAB()
    {
        return $this->GBMNLMLHIAB;
    }

    /**
     * Generated from protobuf field <code>uint32 GBMNLMLHIAB = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setGBMNLMLHIAB($var)
    {
        GPBUtil::checkUint32($var);
        $this->GBMNLMLHIAB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 GHGHEAHHAGC = 5;</code>
     * @return int
     */
    public function getGHGHEAHHAGC()
    {
        return $this->GHGHEAHHAGC;
    }

    /**
     * Generated from protobuf field <code>uint32 GHGHEAHHAGC = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGHGHEAHHAGC($var)
    {
        GPBUtil::checkUint32($var);
        $this->GHGHEAHHAGC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
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
     * Generated from protobuf field <code>uint32 LJKLKCGMJFE = 2;</code>
     * @return int
     */
    public function getLJKLKCGMJFE()
    {
        return $this->LJKLKCGMJFE;
    }

    /**
     * Generated from protobuf field <code>uint32 LJKLKCGMJFE = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLJKLKCGMJFE($var)
    {
        GPBUtil::checkUint32($var);
        $this->LJKLKCGMJFE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 BNFOCPLHDMA = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBNFOCPLHDMA()
    {
        return $this->BNFOCPLHDMA;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 BNFOCPLHDMA = 15;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBNFOCPLHDMA($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->BNFOCPLHDMA = $arr;

        return $this;
    }

}

