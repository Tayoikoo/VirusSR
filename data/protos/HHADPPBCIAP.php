<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HHADPPBCIAP</code>
 */
class HHADPPBCIAP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 IPEENGLMGLG = 4;</code>
     */
    protected $IPEENGLMGLG = 0;
    /**
     * Generated from protobuf field <code>bool MLMMAJBPGGJ = 11;</code>
     */
    protected $MLMMAJBPGGJ = false;
    /**
     * Generated from protobuf field <code>uint32 ICCDOBIGCLN = 2;</code>
     */
    protected $ICCDOBIGCLN = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 PDKOMJCAHFD = 8;</code>
     */
    private $PDKOMJCAHFD;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $IPEENGLMGLG
     *     @type bool $MLMMAJBPGGJ
     *     @type int $ICCDOBIGCLN
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $PDKOMJCAHFD
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 IPEENGLMGLG = 4;</code>
     * @return int
     */
    public function getIPEENGLMGLG()
    {
        return $this->IPEENGLMGLG;
    }

    /**
     * Generated from protobuf field <code>uint32 IPEENGLMGLG = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setIPEENGLMGLG($var)
    {
        GPBUtil::checkUint32($var);
        $this->IPEENGLMGLG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool MLMMAJBPGGJ = 11;</code>
     * @return bool
     */
    public function getMLMMAJBPGGJ()
    {
        return $this->MLMMAJBPGGJ;
    }

    /**
     * Generated from protobuf field <code>bool MLMMAJBPGGJ = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setMLMMAJBPGGJ($var)
    {
        GPBUtil::checkBool($var);
        $this->MLMMAJBPGGJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ICCDOBIGCLN = 2;</code>
     * @return int
     */
    public function getICCDOBIGCLN()
    {
        return $this->ICCDOBIGCLN;
    }

    /**
     * Generated from protobuf field <code>uint32 ICCDOBIGCLN = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setICCDOBIGCLN($var)
    {
        GPBUtil::checkUint32($var);
        $this->ICCDOBIGCLN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 PDKOMJCAHFD = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPDKOMJCAHFD()
    {
        return $this->PDKOMJCAHFD;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 PDKOMJCAHFD = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPDKOMJCAHFD($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->PDKOMJCAHFD = $arr;

        return $this;
    }

}
