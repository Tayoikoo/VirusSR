<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EIMDBGMFDOB</code>
 */
class EIMDBGMFDOB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ODKNCMOKFGO = 4;</code>
     */
    protected $ODKNCMOKFGO = 0;
    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 5;</code>
     */
    protected $OMBLHJDKEJA = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ODKNCMOKFGO
     *     @type int $OMBLHJDKEJA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ODKNCMOKFGO = 4;</code>
     * @return int
     */
    public function getODKNCMOKFGO()
    {
        return $this->ODKNCMOKFGO;
    }

    /**
     * Generated from protobuf field <code>uint32 ODKNCMOKFGO = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setODKNCMOKFGO($var)
    {
        GPBUtil::checkUint32($var);
        $this->ODKNCMOKFGO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 5;</code>
     * @return int
     */
    public function getOMBLHJDKEJA()
    {
        return $this->OMBLHJDKEJA;
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setOMBLHJDKEJA($var)
    {
        GPBUtil::checkUint32($var);
        $this->OMBLHJDKEJA = $var;

        return $this;
    }

}
