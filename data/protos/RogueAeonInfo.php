<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RogueAeonInfo</code>
 */
class RogueAeonInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 fggcobnafmf = 10;</code>
     */
    protected $fggcobnafmf = 0;
    /**
     * Generated from protobuf field <code>bool plpnpndghcp = 7;</code>
     */
    protected $plpnpndghcp = false;
    /**
     * Generated from protobuf field <code>uint32 jmhnblglkle = 5;</code>
     */
    protected $jmhnblglkle = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 aeon_id_list = 1;</code>
     */
    private $aeon_id_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $fggcobnafmf
     *     @type bool $plpnpndghcp
     *     @type int $jmhnblglkle
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $aeon_id_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 fggcobnafmf = 10;</code>
     * @return int
     */
    public function getFggcobnafmf()
    {
        return $this->fggcobnafmf;
    }

    /**
     * Generated from protobuf field <code>uint32 fggcobnafmf = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setFggcobnafmf($var)
    {
        GPBUtil::checkUint32($var);
        $this->fggcobnafmf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool plpnpndghcp = 7;</code>
     * @return bool
     */
    public function getPlpnpndghcp()
    {
        return $this->plpnpndghcp;
    }

    /**
     * Generated from protobuf field <code>bool plpnpndghcp = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setPlpnpndghcp($var)
    {
        GPBUtil::checkBool($var);
        $this->plpnpndghcp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 jmhnblglkle = 5;</code>
     * @return int
     */
    public function getJmhnblglkle()
    {
        return $this->jmhnblglkle;
    }

    /**
     * Generated from protobuf field <code>uint32 jmhnblglkle = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setJmhnblglkle($var)
    {
        GPBUtil::checkUint32($var);
        $this->jmhnblglkle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 aeon_id_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAeonIdList()
    {
        return $this->aeon_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 aeon_id_list = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAeonIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->aeon_id_list = $arr;

        return $this;
    }

}

