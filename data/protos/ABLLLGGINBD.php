<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ABLLLGGINBD</code>
 */
class ABLLLGGINBD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool IPLDKPICALD = 7;</code>
     */
    protected $IPLDKPICALD = false;
    /**
     * Generated from protobuf field <code>uint32 DCOIKPEBLHO = 13;</code>
     */
    protected $DCOIKPEBLHO = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $IPLDKPICALD
     *     @type int $DCOIKPEBLHO
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool IPLDKPICALD = 7;</code>
     * @return bool
     */
    public function getIPLDKPICALD()
    {
        return $this->IPLDKPICALD;
    }

    /**
     * Generated from protobuf field <code>bool IPLDKPICALD = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIPLDKPICALD($var)
    {
        GPBUtil::checkBool($var);
        $this->IPLDKPICALD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DCOIKPEBLHO = 13;</code>
     * @return int
     */
    public function getDCOIKPEBLHO()
    {
        return $this->DCOIKPEBLHO;
    }

    /**
     * Generated from protobuf field <code>uint32 DCOIKPEBLHO = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setDCOIKPEBLHO($var)
    {
        GPBUtil::checkUint32($var);
        $this->DCOIKPEBLHO = $var;

        return $this;
    }

}
