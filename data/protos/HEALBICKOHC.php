<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HEALBICKOHC</code>
 */
class HEALBICKOHC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 DDMDPBEGKHC = 6;</code>
     */
    protected $DDMDPBEGKHC = 0;
    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 3;</code>
     */
    protected $ILIFHHJFMIH = 0;
    /**
     * Generated from protobuf field <code>.CBBEICDGLMF CKJGINJPCHI = 5;</code>
     */
    protected $CKJGINJPCHI = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 LFNNHDHFHHF = 14;</code>
     */
    protected $LFNNHDHFHHF = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $DDMDPBEGKHC
     *     @type int $ILIFHHJFMIH
     *     @type \CBBEICDGLMF $CKJGINJPCHI
     *     @type int $retcode
     *     @type int $LFNNHDHFHHF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 DDMDPBEGKHC = 6;</code>
     * @return int
     */
    public function getDDMDPBEGKHC()
    {
        return $this->DDMDPBEGKHC;
    }

    /**
     * Generated from protobuf field <code>uint32 DDMDPBEGKHC = 6;</code>
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
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 3;</code>
     * @return int
     */
    public function getILIFHHJFMIH()
    {
        return $this->ILIFHHJFMIH;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 3;</code>
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
     * Generated from protobuf field <code>.CBBEICDGLMF CKJGINJPCHI = 5;</code>
     * @return \CBBEICDGLMF|null
     */
    public function getCKJGINJPCHI()
    {
        return $this->CKJGINJPCHI;
    }

    public function hasCKJGINJPCHI()
    {
        return isset($this->CKJGINJPCHI);
    }

    public function clearCKJGINJPCHI()
    {
        unset($this->CKJGINJPCHI);
    }

    /**
     * Generated from protobuf field <code>.CBBEICDGLMF CKJGINJPCHI = 5;</code>
     * @param \CBBEICDGLMF $var
     * @return $this
     */
    public function setCKJGINJPCHI($var)
    {
        GPBUtil::checkMessage($var, \CBBEICDGLMF::class);
        $this->CKJGINJPCHI = $var;

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
     * Generated from protobuf field <code>uint32 LFNNHDHFHHF = 14;</code>
     * @return int
     */
    public function getLFNNHDHFHHF()
    {
        return $this->LFNNHDHFHHF;
    }

    /**
     * Generated from protobuf field <code>uint32 LFNNHDHFHHF = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setLFNNHDHFHHF($var)
    {
        GPBUtil::checkUint32($var);
        $this->LFNNHDHFHHF = $var;

        return $this;
    }

}

