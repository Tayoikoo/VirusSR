<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AEIAAIHCLEI</code>
 */
class AEIAAIHCLEI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 BKHCLMJKOIP = 15;</code>
     */
    private $BKHCLMJKOIP;
    /**
     * Generated from protobuf field <code>uint32 DCOIKPEBLHO = 9;</code>
     */
    protected $DCOIKPEBLHO = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $BKHCLMJKOIP
     *     @type int $DCOIKPEBLHO
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 BKHCLMJKOIP = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBKHCLMJKOIP()
    {
        return $this->BKHCLMJKOIP;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 BKHCLMJKOIP = 15;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBKHCLMJKOIP($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->BKHCLMJKOIP = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DCOIKPEBLHO = 9;</code>
     * @return int
     */
    public function getDCOIKPEBLHO()
    {
        return $this->DCOIKPEBLHO;
    }

    /**
     * Generated from protobuf field <code>uint32 DCOIKPEBLHO = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setDCOIKPEBLHO($var)
    {
        GPBUtil::checkUint32($var);
        $this->DCOIKPEBLHO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

