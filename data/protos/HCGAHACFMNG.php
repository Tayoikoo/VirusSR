<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HCGAHACFMNG</code>
 */
class HCGAHACFMNG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 JJIIEFNHAFB = 14;</code>
     */
    protected $JJIIEFNHAFB = 0;
    /**
     * Generated from protobuf field <code>.MsgType GJHPPHCEECG = 10;</code>
     */
    protected $GJHPPHCEECG = 0;
    /**
     * Generated from protobuf field <code>string CBKOOOGLKCF = 1;</code>
     */
    protected $CBKOOOGLKCF = '';
    /**
     * Generated from protobuf field <code>uint32 FADJIMGIDPH = 8;</code>
     */
    protected $FADJIMGIDPH = 0;
    /**
     * Generated from protobuf field <code>uint64 timestamp = 5;</code>
     */
    protected $timestamp = 0;
    /**
     * Generated from protobuf field <code>.MNMEBDFAJJP OHINLDBELBA = 6;</code>
     */
    protected $OHINLDBELBA = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $JJIIEFNHAFB
     *     @type int $GJHPPHCEECG
     *     @type string $CBKOOOGLKCF
     *     @type int $FADJIMGIDPH
     *     @type int|string $timestamp
     *     @type \MNMEBDFAJJP $OHINLDBELBA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 JJIIEFNHAFB = 14;</code>
     * @return int
     */
    public function getJJIIEFNHAFB()
    {
        return $this->JJIIEFNHAFB;
    }

    /**
     * Generated from protobuf field <code>uint32 JJIIEFNHAFB = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setJJIIEFNHAFB($var)
    {
        GPBUtil::checkUint32($var);
        $this->JJIIEFNHAFB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MsgType GJHPPHCEECG = 10;</code>
     * @return int
     */
    public function getGJHPPHCEECG()
    {
        return $this->GJHPPHCEECG;
    }

    /**
     * Generated from protobuf field <code>.MsgType GJHPPHCEECG = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setGJHPPHCEECG($var)
    {
        GPBUtil::checkEnum($var, \MsgType::class);
        $this->GJHPPHCEECG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string CBKOOOGLKCF = 1;</code>
     * @return string
     */
    public function getCBKOOOGLKCF()
    {
        return $this->CBKOOOGLKCF;
    }

    /**
     * Generated from protobuf field <code>string CBKOOOGLKCF = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCBKOOOGLKCF($var)
    {
        GPBUtil::checkString($var, True);
        $this->CBKOOOGLKCF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 FADJIMGIDPH = 8;</code>
     * @return int
     */
    public function getFADJIMGIDPH()
    {
        return $this->FADJIMGIDPH;
    }

    /**
     * Generated from protobuf field <code>uint32 FADJIMGIDPH = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setFADJIMGIDPH($var)
    {
        GPBUtil::checkUint32($var);
        $this->FADJIMGIDPH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 timestamp = 5;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>uint64 timestamp = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MNMEBDFAJJP OHINLDBELBA = 6;</code>
     * @return \MNMEBDFAJJP|null
     */
    public function getOHINLDBELBA()
    {
        return $this->OHINLDBELBA;
    }

    public function hasOHINLDBELBA()
    {
        return isset($this->OHINLDBELBA);
    }

    public function clearOHINLDBELBA()
    {
        unset($this->OHINLDBELBA);
    }

    /**
     * Generated from protobuf field <code>.MNMEBDFAJJP OHINLDBELBA = 6;</code>
     * @param \MNMEBDFAJJP $var
     * @return $this
     */
    public function setOHINLDBELBA($var)
    {
        GPBUtil::checkMessage($var, \MNMEBDFAJJP::class);
        $this->OHINLDBELBA = $var;

        return $this;
    }

}

