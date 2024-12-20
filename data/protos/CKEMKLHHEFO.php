<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CKEMKLHHEFO</code>
 */
class CKEMKLHHEFO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 uid = 1;</code>
     */
    protected $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 monster_list = 2;</code>
     */
    protected $monster_list = 0;
    /**
     * Generated from protobuf field <code>uint32 config_id = 3;</code>
     */
    protected $config_id = 0;
    /**
     * Generated from protobuf field <code>uint32 world_level = 4;</code>
     */
    protected $world_level = 0;
    /**
     * Generated from protobuf field <code>int64 timestamp = 5;</code>
     */
    protected $timestamp = 0;
    /**
     * Generated from protobuf field <code>uint32 FMOLMBHJOJP = 6;</code>
     */
    protected $FMOLMBHJOJP = 0;
    /**
     * Generated from protobuf field <code>uint32 HNGPNADJIDP = 7;</code>
     */
    protected $HNGPNADJIDP = 0;
    /**
     * Generated from protobuf field <code>.PunkLordShareType APJBCNFNDHL = 8;</code>
     */
    protected $APJBCNFNDHL = 0;
    /**
     * Generated from protobuf field <code>bool HGAIBECFCPL = 9;</code>
     */
    protected $HGAIBECFCPL = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $uid
     *     @type int $monster_list
     *     @type int $config_id
     *     @type int $world_level
     *     @type int|string $timestamp
     *     @type int $FMOLMBHJOJP
     *     @type int $HNGPNADJIDP
     *     @type int $APJBCNFNDHL
     *     @type bool $HGAIBECFCPL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 1;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 monster_list = 2;</code>
     * @return int
     */
    public function getMonsterList()
    {
        return $this->monster_list;
    }

    /**
     * Generated from protobuf field <code>uint32 monster_list = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterList($var)
    {
        GPBUtil::checkUint32($var);
        $this->monster_list = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 config_id = 3;</code>
     * @return int
     */
    public function getConfigId()
    {
        return $this->config_id;
    }

    /**
     * Generated from protobuf field <code>uint32 config_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setConfigId($var)
    {
        GPBUtil::checkUint32($var);
        $this->config_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 4;</code>
     * @return int
     */
    public function getWorldLevel()
    {
        return $this->world_level;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setWorldLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->world_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 5;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 FMOLMBHJOJP = 6;</code>
     * @return int
     */
    public function getFMOLMBHJOJP()
    {
        return $this->FMOLMBHJOJP;
    }

    /**
     * Generated from protobuf field <code>uint32 FMOLMBHJOJP = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setFMOLMBHJOJP($var)
    {
        GPBUtil::checkUint32($var);
        $this->FMOLMBHJOJP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HNGPNADJIDP = 7;</code>
     * @return int
     */
    public function getHNGPNADJIDP()
    {
        return $this->HNGPNADJIDP;
    }

    /**
     * Generated from protobuf field <code>uint32 HNGPNADJIDP = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setHNGPNADJIDP($var)
    {
        GPBUtil::checkUint32($var);
        $this->HNGPNADJIDP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PunkLordShareType APJBCNFNDHL = 8;</code>
     * @return int
     */
    public function getAPJBCNFNDHL()
    {
        return $this->APJBCNFNDHL;
    }

    /**
     * Generated from protobuf field <code>.PunkLordShareType APJBCNFNDHL = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setAPJBCNFNDHL($var)
    {
        GPBUtil::checkEnum($var, \PunkLordShareType::class);
        $this->APJBCNFNDHL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool HGAIBECFCPL = 9;</code>
     * @return bool
     */
    public function getHGAIBECFCPL()
    {
        return $this->HGAIBECFCPL;
    }

    /**
     * Generated from protobuf field <code>bool HGAIBECFCPL = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setHGAIBECFCPL($var)
    {
        GPBUtil::checkBool($var);
        $this->HGAIBECFCPL = $var;

        return $this;
    }

}

