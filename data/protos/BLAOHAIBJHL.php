<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BLAOHAIBJHL</code>
 */
class BLAOHAIBJHL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string LBLFEKKPCNC = 15;</code>
     */
    protected $LBLFEKKPCNC = '';
    /**
     * Generated from protobuf field <code>int32 GODEPPFKMNP = 14;</code>
     */
    protected $GODEPPFKMNP = 0;
    /**
     * Generated from protobuf field <code>int32 GMCBMDCOGGO = 12;</code>
     */
    protected $GMCBMDCOGGO = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $LBLFEKKPCNC
     *     @type int $GODEPPFKMNP
     *     @type int $GMCBMDCOGGO
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string LBLFEKKPCNC = 15;</code>
     * @return string
     */
    public function getLBLFEKKPCNC()
    {
        return $this->LBLFEKKPCNC;
    }

    /**
     * Generated from protobuf field <code>string LBLFEKKPCNC = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setLBLFEKKPCNC($var)
    {
        GPBUtil::checkString($var, True);
        $this->LBLFEKKPCNC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 GODEPPFKMNP = 14;</code>
     * @return int
     */
    public function getGODEPPFKMNP()
    {
        return $this->GODEPPFKMNP;
    }

    /**
     * Generated from protobuf field <code>int32 GODEPPFKMNP = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setGODEPPFKMNP($var)
    {
        GPBUtil::checkInt32($var);
        $this->GODEPPFKMNP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 GMCBMDCOGGO = 12;</code>
     * @return int
     */
    public function getGMCBMDCOGGO()
    {
        return $this->GMCBMDCOGGO;
    }

    /**
     * Generated from protobuf field <code>int32 GMCBMDCOGGO = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setGMCBMDCOGGO($var)
    {
        GPBUtil::checkInt32($var);
        $this->GMCBMDCOGGO = $var;

        return $this;
    }

}

