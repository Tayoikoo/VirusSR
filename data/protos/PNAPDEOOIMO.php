<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PNAPDEOOIMO</code>
 */
class PNAPDEOOIMO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.RogueFormulaSelectInfo abjgbmelghm = 6;</code>
     */
    protected $abjgbmelghm = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RogueFormulaSelectInfo $abjgbmelghm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.RogueFormulaSelectInfo abjgbmelghm = 6;</code>
     * @return \RogueFormulaSelectInfo|null
     */
    public function getAbjgbmelghm()
    {
        return $this->abjgbmelghm;
    }

    public function hasAbjgbmelghm()
    {
        return isset($this->abjgbmelghm);
    }

    public function clearAbjgbmelghm()
    {
        unset($this->abjgbmelghm);
    }

    /**
     * Generated from protobuf field <code>.RogueFormulaSelectInfo abjgbmelghm = 6;</code>
     * @param \RogueFormulaSelectInfo $var
     * @return $this
     */
    public function setAbjgbmelghm($var)
    {
        GPBUtil::checkMessage($var, \RogueFormulaSelectInfo::class);
        $this->abjgbmelghm = $var;

        return $this;
    }

}

