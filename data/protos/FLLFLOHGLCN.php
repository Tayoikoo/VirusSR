<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FLLFLOHGLCN</code>
 */
class FLLFLOHGLCN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool FLEPBOMHCNE = 15;</code>
     */
    protected $FLEPBOMHCNE = false;
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .JAAMBOGEIME EDFJMIKHALC = 5;</code>
     */
    private $EDFJMIKHALC;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $FLEPBOMHCNE
     *     @type int $retcode
     *     @type array<\JAAMBOGEIME>|\Google\Protobuf\Internal\RepeatedField $EDFJMIKHALC
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool FLEPBOMHCNE = 15;</code>
     * @return bool
     */
    public function getFLEPBOMHCNE()
    {
        return $this->FLEPBOMHCNE;
    }

    /**
     * Generated from protobuf field <code>bool FLEPBOMHCNE = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setFLEPBOMHCNE($var)
    {
        GPBUtil::checkBool($var);
        $this->FLEPBOMHCNE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .JAAMBOGEIME EDFJMIKHALC = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEDFJMIKHALC()
    {
        return $this->EDFJMIKHALC;
    }

    /**
     * Generated from protobuf field <code>repeated .JAAMBOGEIME EDFJMIKHALC = 5;</code>
     * @param array<\JAAMBOGEIME>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEDFJMIKHALC($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \JAAMBOGEIME::class);
        $this->EDFJMIKHALC = $arr;

        return $this;
    }

}

