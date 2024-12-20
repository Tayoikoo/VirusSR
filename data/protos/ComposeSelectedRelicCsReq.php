<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LMEJEBEIJDF (512)
 *
 * Generated from protobuf message <code>ComposeSelectedRelicCsReq</code>
 */
class ComposeSelectedRelicCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 count = 10;</code>
     */
    protected $count = 0;
    /**
     * Generated from protobuf field <code>uint32 compose_id = 1;</code>
     */
    protected $compose_id = 0;
    /**
     * Generated from protobuf field <code>.ItemCostData ocefmjhekkm = 6;</code>
     */
    protected $ocefmjhekkm = null;
    /**
     * Generated from protobuf field <code>uint32 main_affix_id = 12;</code>
     */
    protected $main_affix_id = 0;
    /**
     * Generated from protobuf field <code>.ItemCostData ejcefpjnopa = 2;</code>
     */
    protected $ejcefpjnopa = null;
    /**
     * Generated from protobuf field <code>repeated uint32 plfglpnfnbh = 13;</code>
     */
    private $plfglpnfnbh;
    /**
     * Generated from protobuf field <code>uint32 kgekgbgcjnk = 7;</code>
     */
    protected $kgekgbgcjnk = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $count
     *     @type int $compose_id
     *     @type \ItemCostData $ocefmjhekkm
     *     @type int $main_affix_id
     *     @type \ItemCostData $ejcefpjnopa
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $plfglpnfnbh
     *     @type int $kgekgbgcjnk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 count = 10;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 compose_id = 1;</code>
     * @return int
     */
    public function getComposeId()
    {
        return $this->compose_id;
    }

    /**
     * Generated from protobuf field <code>uint32 compose_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setComposeId($var)
    {
        GPBUtil::checkUint32($var);
        $this->compose_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemCostData ocefmjhekkm = 6;</code>
     * @return \ItemCostData|null
     */
    public function getOcefmjhekkm()
    {
        return $this->ocefmjhekkm;
    }

    public function hasOcefmjhekkm()
    {
        return isset($this->ocefmjhekkm);
    }

    public function clearOcefmjhekkm()
    {
        unset($this->ocefmjhekkm);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData ocefmjhekkm = 6;</code>
     * @param \ItemCostData $var
     * @return $this
     */
    public function setOcefmjhekkm($var)
    {
        GPBUtil::checkMessage($var, \ItemCostData::class);
        $this->ocefmjhekkm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 main_affix_id = 12;</code>
     * @return int
     */
    public function getMainAffixId()
    {
        return $this->main_affix_id;
    }

    /**
     * Generated from protobuf field <code>uint32 main_affix_id = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setMainAffixId($var)
    {
        GPBUtil::checkUint32($var);
        $this->main_affix_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemCostData ejcefpjnopa = 2;</code>
     * @return \ItemCostData|null
     */
    public function getEjcefpjnopa()
    {
        return $this->ejcefpjnopa;
    }

    public function hasEjcefpjnopa()
    {
        return isset($this->ejcefpjnopa);
    }

    public function clearEjcefpjnopa()
    {
        unset($this->ejcefpjnopa);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData ejcefpjnopa = 2;</code>
     * @param \ItemCostData $var
     * @return $this
     */
    public function setEjcefpjnopa($var)
    {
        GPBUtil::checkMessage($var, \ItemCostData::class);
        $this->ejcefpjnopa = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 plfglpnfnbh = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlfglpnfnbh()
    {
        return $this->plfglpnfnbh;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 plfglpnfnbh = 13;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlfglpnfnbh($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->plfglpnfnbh = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 kgekgbgcjnk = 7;</code>
     * @return int
     */
    public function getKgekgbgcjnk()
    {
        return $this->kgekgbgcjnk;
    }

    /**
     * Generated from protobuf field <code>uint32 kgekgbgcjnk = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setKgekgbgcjnk($var)
    {
        GPBUtil::checkUint32($var);
        $this->kgekgbgcjnk = $var;

        return $this;
    }

}
