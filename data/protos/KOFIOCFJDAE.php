<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KOFIOCFJDAE</code>
 */
class KOFIOCFJDAE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool HJCGEIDBICC = 10;</code>
     */
    protected $HJCGEIDBICC = false;
    /**
     * Generated from protobuf field <code>repeated uint32 OPOJFPKGLFO = 15;</code>
     */
    private $OPOJFPKGLFO;
    /**
     * Generated from protobuf field <code>uint32 BMCIDCPNBHF = 3;</code>
     */
    protected $BMCIDCPNBHF = 0;
    /**
     * Generated from protobuf field <code>uint32 NLPPCEJDAED = 8;</code>
     */
    protected $NLPPCEJDAED = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $HJCGEIDBICC
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $OPOJFPKGLFO
     *     @type int $BMCIDCPNBHF
     *     @type int $NLPPCEJDAED
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool HJCGEIDBICC = 10;</code>
     * @return bool
     */
    public function getHJCGEIDBICC()
    {
        return $this->HJCGEIDBICC;
    }

    /**
     * Generated from protobuf field <code>bool HJCGEIDBICC = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setHJCGEIDBICC($var)
    {
        GPBUtil::checkBool($var);
        $this->HJCGEIDBICC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 OPOJFPKGLFO = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOPOJFPKGLFO()
    {
        return $this->OPOJFPKGLFO;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 OPOJFPKGLFO = 15;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOPOJFPKGLFO($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->OPOJFPKGLFO = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 BMCIDCPNBHF = 3;</code>
     * @return int
     */
    public function getBMCIDCPNBHF()
    {
        return $this->BMCIDCPNBHF;
    }

    /**
     * Generated from protobuf field <code>uint32 BMCIDCPNBHF = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setBMCIDCPNBHF($var)
    {
        GPBUtil::checkUint32($var);
        $this->BMCIDCPNBHF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NLPPCEJDAED = 8;</code>
     * @return int
     */
    public function getNLPPCEJDAED()
    {
        return $this->NLPPCEJDAED;
    }

    /**
     * Generated from protobuf field <code>uint32 NLPPCEJDAED = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setNLPPCEJDAED($var)
    {
        GPBUtil::checkUint32($var);
        $this->NLPPCEJDAED = $var;

        return $this;
    }

}
