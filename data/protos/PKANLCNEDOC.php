<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PKANLCNEDOC</code>
 */
class PKANLCNEDOC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 IFJNGOLCGPI = 14;</code>
     */
    private $IFJNGOLCGPI;
    /**
     * Generated from protobuf field <code>.ItemCostData EMCOGFJADHF = 5;</code>
     */
    protected $EMCOGFJADHF = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $IFJNGOLCGPI
     *     @type \ItemCostData $EMCOGFJADHF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 IFJNGOLCGPI = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIFJNGOLCGPI()
    {
        return $this->IFJNGOLCGPI;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 IFJNGOLCGPI = 14;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIFJNGOLCGPI($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->IFJNGOLCGPI = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemCostData EMCOGFJADHF = 5;</code>
     * @return \ItemCostData|null
     */
    public function getEMCOGFJADHF()
    {
        return $this->EMCOGFJADHF;
    }

    public function hasEMCOGFJADHF()
    {
        return isset($this->EMCOGFJADHF);
    }

    public function clearEMCOGFJADHF()
    {
        unset($this->EMCOGFJADHF);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData EMCOGFJADHF = 5;</code>
     * @param \ItemCostData $var
     * @return $this
     */
    public function setEMCOGFJADHF($var)
    {
        GPBUtil::checkMessage($var, \ItemCostData::class);
        $this->EMCOGFJADHF = $var;

        return $this;
    }

}

