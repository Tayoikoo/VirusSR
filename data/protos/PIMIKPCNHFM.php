<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PIMIKPCNHFM</code>
 */
class PIMIKPCNHFM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.JCLACFBCCAD NPBPCBKALMN = 9;</code>
     */
    protected $NPBPCBKALMN = null;
    /**
     * Generated from protobuf field <code>uint32 AGCKLENADNO = 12;</code>
     */
    protected $AGCKLENADNO = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \JCLACFBCCAD $NPBPCBKALMN
     *     @type int $AGCKLENADNO
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.JCLACFBCCAD NPBPCBKALMN = 9;</code>
     * @return \JCLACFBCCAD|null
     */
    public function getNPBPCBKALMN()
    {
        return $this->NPBPCBKALMN;
    }

    public function hasNPBPCBKALMN()
    {
        return isset($this->NPBPCBKALMN);
    }

    public function clearNPBPCBKALMN()
    {
        unset($this->NPBPCBKALMN);
    }

    /**
     * Generated from protobuf field <code>.JCLACFBCCAD NPBPCBKALMN = 9;</code>
     * @param \JCLACFBCCAD $var
     * @return $this
     */
    public function setNPBPCBKALMN($var)
    {
        GPBUtil::checkMessage($var, \JCLACFBCCAD::class);
        $this->NPBPCBKALMN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AGCKLENADNO = 12;</code>
     * @return int
     */
    public function getAGCKLENADNO()
    {
        return $this->AGCKLENADNO;
    }

    /**
     * Generated from protobuf field <code>uint32 AGCKLENADNO = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setAGCKLENADNO($var)
    {
        GPBUtil::checkUint32($var);
        $this->AGCKLENADNO = $var;

        return $this;
    }

}

