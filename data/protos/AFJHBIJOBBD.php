<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AFJHBIJOBBD</code>
 */
class AFJHBIJOBBD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 PPIMNCKJHLE = 1;</code>
     */
    protected $PPIMNCKJHLE = 0;
    /**
     * Generated from protobuf field <code>repeated uint64 CNIDKMCCCAD = 2;</code>
     */
    private $CNIDKMCCCAD;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $PPIMNCKJHLE
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $CNIDKMCCCAD
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 PPIMNCKJHLE = 1;</code>
     * @return int
     */
    public function getPPIMNCKJHLE()
    {
        return $this->PPIMNCKJHLE;
    }

    /**
     * Generated from protobuf field <code>uint32 PPIMNCKJHLE = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPPIMNCKJHLE($var)
    {
        GPBUtil::checkUint32($var);
        $this->PPIMNCKJHLE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 CNIDKMCCCAD = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCNIDKMCCCAD()
    {
        return $this->CNIDKMCCCAD;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 CNIDKMCCCAD = 2;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCNIDKMCCCAD($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->CNIDKMCCCAD = $arr;

        return $this;
    }

}
