<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GLIEHNLKPNK (1567)
 *
 * Generated from protobuf message <code>TakeCityShopRewardCsReq</code>
 */
class TakeCityShopRewardCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 shop_id = 15;</code>
     */
    protected $shop_id = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 9;</code>
     */
    protected $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $shop_id
     *     @type int $level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 shop_id = 15;</code>
     * @return int
     */
    public function getShopId()
    {
        return $this->shop_id;
    }

    /**
     * Generated from protobuf field <code>uint32 shop_id = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setShopId($var)
    {
        GPBUtil::checkUint32($var);
        $this->shop_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 9;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

}

