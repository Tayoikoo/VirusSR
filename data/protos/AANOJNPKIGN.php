<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AANOJNPKIGN</code>
 */
class AANOJNPKIGN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 5;</code>
     */
    protected $ILIFHHJFMIH = 0;
    /**
     * Generated from protobuf field <code>uint32 DDMDPBEGKHC = 9;</code>
     */
    protected $DDMDPBEGKHC = 0;
    /**
     * Generated from protobuf field <code>uint32 LFNNHDHFHHF = 15;</code>
     */
    protected $LFNNHDHFHHF = 0;
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
     *     @type int $ILIFHHJFMIH
     *     @type int $DDMDPBEGKHC
     *     @type int $LFNNHDHFHHF
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 5;</code>
     * @return int
     */
    public function getILIFHHJFMIH()
    {
        return $this->ILIFHHJFMIH;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setILIFHHJFMIH($var)
    {
        GPBUtil::checkUint32($var);
        $this->ILIFHHJFMIH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DDMDPBEGKHC = 9;</code>
     * @return int
     */
    public function getDDMDPBEGKHC()
    {
        return $this->DDMDPBEGKHC;
    }

    /**
     * Generated from protobuf field <code>uint32 DDMDPBEGKHC = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setDDMDPBEGKHC($var)
    {
        GPBUtil::checkUint32($var);
        $this->DDMDPBEGKHC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LFNNHDHFHHF = 15;</code>
     * @return int
     */
    public function getLFNNHDHFHHF()
    {
        return $this->LFNNHDHFHHF;
    }

    /**
     * Generated from protobuf field <code>uint32 LFNNHDHFHHF = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setLFNNHDHFHHF($var)
    {
        GPBUtil::checkUint32($var);
        $this->LFNNHDHFHHF = $var;

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
