<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ODBFBEAPALJ</code>
 */
class ODBFBEAPALJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.LIMLIKLBIJM KAACAKINPDM = 1;</code>
     */
    protected $KAACAKINPDM = null;
    /**
     * Generated from protobuf field <code>.GBIJFBKMOHL OFOOEMCPEKH = 12;</code>
     */
    protected $OFOOEMCPEKH = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \LIMLIKLBIJM $KAACAKINPDM
     *     @type \GBIJFBKMOHL $OFOOEMCPEKH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.LIMLIKLBIJM KAACAKINPDM = 1;</code>
     * @return \LIMLIKLBIJM|null
     */
    public function getKAACAKINPDM()
    {
        return $this->KAACAKINPDM;
    }

    public function hasKAACAKINPDM()
    {
        return isset($this->KAACAKINPDM);
    }

    public function clearKAACAKINPDM()
    {
        unset($this->KAACAKINPDM);
    }

    /**
     * Generated from protobuf field <code>.LIMLIKLBIJM KAACAKINPDM = 1;</code>
     * @param \LIMLIKLBIJM $var
     * @return $this
     */
    public function setKAACAKINPDM($var)
    {
        GPBUtil::checkMessage($var, \LIMLIKLBIJM::class);
        $this->KAACAKINPDM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GBIJFBKMOHL OFOOEMCPEKH = 12;</code>
     * @return \GBIJFBKMOHL|null
     */
    public function getOFOOEMCPEKH()
    {
        return $this->OFOOEMCPEKH;
    }

    public function hasOFOOEMCPEKH()
    {
        return isset($this->OFOOEMCPEKH);
    }

    public function clearOFOOEMCPEKH()
    {
        unset($this->OFOOEMCPEKH);
    }

    /**
     * Generated from protobuf field <code>.GBIJFBKMOHL OFOOEMCPEKH = 12;</code>
     * @param \GBIJFBKMOHL $var
     * @return $this
     */
    public function setOFOOEMCPEKH($var)
    {
        GPBUtil::checkMessage($var, \GBIJFBKMOHL::class);
        $this->OFOOEMCPEKH = $var;

        return $this;
    }

}
