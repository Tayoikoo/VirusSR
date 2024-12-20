<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DLOJJEOFHBH (5652)
 *
 * Generated from protobuf message <code>GetRogueShopBuffInfoScRsp</code>
 */
class GetRogueShopBuffInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemCostData aoegljjmhop = 9;</code>
     */
    protected $aoegljjmhop = null;
    /**
     * Generated from protobuf field <code>.HKECICAPIII rogue_buff_info = 1;</code>
     */
    protected $rogue_buff_info = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>bool ppjfbjmdiie = 5;</code>
     */
    protected $ppjfbjmdiie = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemCostData $aoegljjmhop
     *     @type \HKECICAPIII $rogue_buff_info
     *     @type int $retcode
     *     @type bool $ppjfbjmdiie
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData aoegljjmhop = 9;</code>
     * @return \ItemCostData|null
     */
    public function getAoegljjmhop()
    {
        return $this->aoegljjmhop;
    }

    public function hasAoegljjmhop()
    {
        return isset($this->aoegljjmhop);
    }

    public function clearAoegljjmhop()
    {
        unset($this->aoegljjmhop);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData aoegljjmhop = 9;</code>
     * @param \ItemCostData $var
     * @return $this
     */
    public function setAoegljjmhop($var)
    {
        GPBUtil::checkMessage($var, \ItemCostData::class);
        $this->aoegljjmhop = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.HKECICAPIII rogue_buff_info = 1;</code>
     * @return \HKECICAPIII|null
     */
    public function getRogueBuffInfo()
    {
        return $this->rogue_buff_info;
    }

    public function hasRogueBuffInfo()
    {
        return isset($this->rogue_buff_info);
    }

    public function clearRogueBuffInfo()
    {
        unset($this->rogue_buff_info);
    }

    /**
     * Generated from protobuf field <code>.HKECICAPIII rogue_buff_info = 1;</code>
     * @param \HKECICAPIII $var
     * @return $this
     */
    public function setRogueBuffInfo($var)
    {
        GPBUtil::checkMessage($var, \HKECICAPIII::class);
        $this->rogue_buff_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ppjfbjmdiie = 5;</code>
     * @return bool
     */
    public function getPpjfbjmdiie()
    {
        return $this->ppjfbjmdiie;
    }

    /**
     * Generated from protobuf field <code>bool ppjfbjmdiie = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setPpjfbjmdiie($var)
    {
        GPBUtil::checkBool($var);
        $this->ppjfbjmdiie = $var;

        return $this;
    }

}

