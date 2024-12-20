<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CityShopInfoScNotify (1552)
 *
 * Generated from protobuf message <code>CityShopInfoScNotify</code>
 */
class CityShopInfoScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 TakenLevelReward = 2;</code>
     */
    protected $TakenLevelReward = 0;
    /**
     * Generated from protobuf field <code>uint32 ShopId = 1;</code>
     */
    protected $ShopId = 0;
    /**
     * Generated from protobuf field <code>uint32 Exp = 5;</code>
     */
    protected $Exp = 0;
    /**
     * Generated from protobuf field <code>uint32 Level = 9;</code>
     */
    protected $Level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $TakenLevelReward
     *     @type int $ShopId
     *     @type int $Exp
     *     @type int $Level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 TakenLevelReward = 2;</code>
     * @return int|string
     */
    public function getTakenLevelReward()
    {
        return $this->TakenLevelReward;
    }

    /**
     * Generated from protobuf field <code>uint64 TakenLevelReward = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTakenLevelReward($var)
    {
        GPBUtil::checkUint64($var);
        $this->TakenLevelReward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ShopId = 1;</code>
     * @return int
     */
    public function getShopId()
    {
        return $this->ShopId;
    }

    /**
     * Generated from protobuf field <code>uint32 ShopId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setShopId($var)
    {
        GPBUtil::checkUint32($var);
        $this->ShopId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Exp = 5;</code>
     * @return int
     */
    public function getExp()
    {
        return $this->Exp;
    }

    /**
     * Generated from protobuf field <code>uint32 Exp = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setExp($var)
    {
        GPBUtil::checkUint32($var);
        $this->Exp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Level = 9;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * Generated from protobuf field <code>uint32 Level = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->Level = $var;

        return $this;
    }

}

