<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HHGCOJOMGBN</code>
 */
class HHGCOJOMGBN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool adlepllifgm = 3;</code>
     */
    protected $adlepllifgm = false;
    /**
     * Generated from protobuf field <code>uint32 lmjaeipjaom = 10;</code>
     */
    protected $lmjaeipjaom = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $adlepllifgm
     *     @type int $lmjaeipjaom
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool adlepllifgm = 3;</code>
     * @return bool
     */
    public function getAdlepllifgm()
    {
        return $this->adlepllifgm;
    }

    /**
     * Generated from protobuf field <code>bool adlepllifgm = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAdlepllifgm($var)
    {
        GPBUtil::checkBool($var);
        $this->adlepllifgm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lmjaeipjaom = 10;</code>
     * @return int
     */
    public function getLmjaeipjaom()
    {
        return $this->lmjaeipjaom;
    }

    /**
     * Generated from protobuf field <code>uint32 lmjaeipjaom = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setLmjaeipjaom($var)
    {
        GPBUtil::checkUint32($var);
        $this->lmjaeipjaom = $var;

        return $this;
    }

}

