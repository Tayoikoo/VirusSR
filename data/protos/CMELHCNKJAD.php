<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CMELHCNKJAD</code>
 */
class CMELHCNKJAD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.RogueDialogueResult MLDCBHAMCLK = 11;</code>
     */
    protected $MLDCBHAMCLK = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 FBHPFCFCGIF = 2;</code>
     */
    private $FBHPFCFCGIF;
    protected $KOLMCKFGPII;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $ihkkjkhfihh
     *     @type int $MLDCBHAMCLK
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $FBHPFCFCGIF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList ihkkjkhfihh = 14;</code>
     * @return \ItemList|null
     */
    public function getIhkkjkhfihh()
    {
        return $this->readOneof(14);
    }

    public function hasIhkkjkhfihh()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.ItemList ihkkjkhfihh = 14;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setIhkkjkhfihh($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RogueDialogueResult MLDCBHAMCLK = 11;</code>
     * @return int
     */
    public function getMLDCBHAMCLK()
    {
        return $this->MLDCBHAMCLK;
    }

    /**
     * Generated from protobuf field <code>.RogueDialogueResult MLDCBHAMCLK = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setMLDCBHAMCLK($var)
    {
        GPBUtil::checkEnum($var, \RogueDialogueResult::class);
        $this->MLDCBHAMCLK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 FBHPFCFCGIF = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFBHPFCFCGIF()
    {
        return $this->FBHPFCFCGIF;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 FBHPFCFCGIF = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFBHPFCFCGIF($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->FBHPFCFCGIF = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getKOLMCKFGPII()
    {
        return $this->whichOneof("KOLMCKFGPII");
    }

}

