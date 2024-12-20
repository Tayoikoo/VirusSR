<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetShopListScRsp (1595)
 *
 * Generated from protobuf message <code>GetShopListScRsp</code>
 */
class GetShopListScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ShopType = 7;</code>
     */
    protected $ShopType = 0;
    /**
     * Generated from protobuf field <code>repeated .Shop ShopList = 10;</code>
     */
    private $ShopList;
    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ShopType
     *     @type array<\Shop>|\Google\Protobuf\Internal\RepeatedField $ShopList
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ShopType = 7;</code>
     * @return int
     */
    public function getShopType()
    {
        return $this->ShopType;
    }

    /**
     * Generated from protobuf field <code>uint32 ShopType = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setShopType($var)
    {
        GPBUtil::checkUint32($var);
        $this->ShopType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Shop ShopList = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getShopList()
    {
        return $this->ShopList;
    }

    /**
     * Generated from protobuf field <code>repeated .Shop ShopList = 10;</code>
     * @param array<\Shop>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setShopList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shop::class);
        $this->ShopList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
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
