<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GMPNODNPJGH</code>
 */
class GMPNODNPJGH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.MKMEAGCCCMO status = 5;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>uint32 COOINBPIEOC = 4;</code>
     */
    protected $COOINBPIEOC = 0;
    /**
     * Generated from protobuf field <code>.ADHODBDKOEJ KGGHLADEKGP = 6;</code>
     */
    protected $KGGHLADEKGP = 0;
    /**
     * Generated from protobuf field <code>repeated .IEDMIAHONDF GPKMFMJLMJP = 1;</code>
     */
    private $GPKMFMJLMJP;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *     @type int $COOINBPIEOC
     *     @type int $KGGHLADEKGP
     *     @type array<\IEDMIAHONDF>|\Google\Protobuf\Internal\RepeatedField $GPKMFMJLMJP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.MKMEAGCCCMO status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.MKMEAGCCCMO status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \MKMEAGCCCMO::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 COOINBPIEOC = 4;</code>
     * @return int
     */
    public function getCOOINBPIEOC()
    {
        return $this->COOINBPIEOC;
    }

    /**
     * Generated from protobuf field <code>uint32 COOINBPIEOC = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCOOINBPIEOC($var)
    {
        GPBUtil::checkUint32($var);
        $this->COOINBPIEOC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ADHODBDKOEJ KGGHLADEKGP = 6;</code>
     * @return int
     */
    public function getKGGHLADEKGP()
    {
        return $this->KGGHLADEKGP;
    }

    /**
     * Generated from protobuf field <code>.ADHODBDKOEJ KGGHLADEKGP = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setKGGHLADEKGP($var)
    {
        GPBUtil::checkEnum($var, \ADHODBDKOEJ::class);
        $this->KGGHLADEKGP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .IEDMIAHONDF GPKMFMJLMJP = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGPKMFMJLMJP()
    {
        return $this->GPKMFMJLMJP;
    }

    /**
     * Generated from protobuf field <code>repeated .IEDMIAHONDF GPKMFMJLMJP = 1;</code>
     * @param array<\IEDMIAHONDF>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGPKMFMJLMJP($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \IEDMIAHONDF::class);
        $this->GPKMFMJLMJP = $arr;

        return $this;
    }

}

