<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BFFIEMJEDIL</code>
 */
class BFFIEMJEDIL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .CBNHKHEFEFF KEHPCCGPFAD = 5;</code>
     */
    private $KEHPCCGPFAD;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\CBNHKHEFEFF>|\Google\Protobuf\Internal\RepeatedField $KEHPCCGPFAD
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .CBNHKHEFEFF KEHPCCGPFAD = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKEHPCCGPFAD()
    {
        return $this->KEHPCCGPFAD;
    }

    /**
     * Generated from protobuf field <code>repeated .CBNHKHEFEFF KEHPCCGPFAD = 5;</code>
     * @param array<\CBNHKHEFEFF>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKEHPCCGPFAD($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CBNHKHEFEFF::class);
        $this->KEHPCCGPFAD = $arr;

        return $this;
    }

}

