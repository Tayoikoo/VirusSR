<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FPFAFNFPJDK</code>
 */
class FPFAFNFPJDK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.LDPBKMPNJFG cbioemaopnc = 11;</code>
     */
    protected $cbioemaopnc = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \LDPBKMPNJFG $cbioemaopnc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.LDPBKMPNJFG cbioemaopnc = 11;</code>
     * @return \LDPBKMPNJFG|null
     */
    public function getCbioemaopnc()
    {
        return $this->cbioemaopnc;
    }

    public function hasCbioemaopnc()
    {
        return isset($this->cbioemaopnc);
    }

    public function clearCbioemaopnc()
    {
        unset($this->cbioemaopnc);
    }

    /**
     * Generated from protobuf field <code>.LDPBKMPNJFG cbioemaopnc = 11;</code>
     * @param \LDPBKMPNJFG $var
     * @return $this
     */
    public function setCbioemaopnc($var)
    {
        GPBUtil::checkMessage($var, \LDPBKMPNJFG::class);
        $this->cbioemaopnc = $var;

        return $this;
    }

}
