<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>INILDOJLMPA</code>
 */
class INILDOJLMPA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 KPPGEOMIKLJ = 8;</code>
     */
    protected $KPPGEOMIKLJ = 0;
    /**
     * Generated from protobuf field <code>uint32 DPNLNMMCHMJ = 6;</code>
     */
    protected $DPNLNMMCHMJ = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $KPPGEOMIKLJ
     *     @type int $DPNLNMMCHMJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 KPPGEOMIKLJ = 8;</code>
     * @return int
     */
    public function getKPPGEOMIKLJ()
    {
        return $this->KPPGEOMIKLJ;
    }

    /**
     * Generated from protobuf field <code>uint32 KPPGEOMIKLJ = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setKPPGEOMIKLJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->KPPGEOMIKLJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DPNLNMMCHMJ = 6;</code>
     * @return int
     */
    public function getDPNLNMMCHMJ()
    {
        return $this->DPNLNMMCHMJ;
    }

    /**
     * Generated from protobuf field <code>uint32 DPNLNMMCHMJ = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setDPNLNMMCHMJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->DPNLNMMCHMJ = $var;

        return $this;
    }

}
