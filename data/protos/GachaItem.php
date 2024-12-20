<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GachaItem</code>
 */
class GachaItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Item gacha_item = 10;</code>
     */
    protected $gacha_item = null;
    /**
     * Generated from protobuf field <code>.ItemList transfer_item_list = 3;</code>
     */
    protected $transfer_item_list = null;
    /**
     * Generated from protobuf field <code>.ItemList token_item = 15;</code>
     */
    protected $token_item = null;
    /**
     * Generated from protobuf field <code>bool is_new = 8;</code>
     */
    protected $is_new = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Item $gacha_item
     *     @type \ItemList $transfer_item_list
     *     @type \ItemList $token_item
     *     @type bool $is_new
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Item gacha_item = 10;</code>
     * @return \Item|null
     */
    public function getGachaItem()
    {
        return $this->gacha_item;
    }

    public function hasGachaItem()
    {
        return isset($this->gacha_item);
    }

    public function clearGachaItem()
    {
        unset($this->gacha_item);
    }

    /**
     * Generated from protobuf field <code>.Item gacha_item = 10;</code>
     * @param \Item $var
     * @return $this
     */
    public function setGachaItem($var)
    {
        GPBUtil::checkMessage($var, \Item::class);
        $this->gacha_item = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList transfer_item_list = 3;</code>
     * @return \ItemList|null
     */
    public function getTransferItemList()
    {
        return $this->transfer_item_list;
    }

    public function hasTransferItemList()
    {
        return isset($this->transfer_item_list);
    }

    public function clearTransferItemList()
    {
        unset($this->transfer_item_list);
    }

    /**
     * Generated from protobuf field <code>.ItemList transfer_item_list = 3;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setTransferItemList($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->transfer_item_list = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList token_item = 15;</code>
     * @return \ItemList|null
     */
    public function getTokenItem()
    {
        return $this->token_item;
    }

    public function hasTokenItem()
    {
        return isset($this->token_item);
    }

    public function clearTokenItem()
    {
        unset($this->token_item);
    }

    /**
     * Generated from protobuf field <code>.ItemList token_item = 15;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setTokenItem($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->token_item = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_new = 8;</code>
     * @return bool
     */
    public function getIsNew()
    {
        return $this->is_new;
    }

    /**
     * Generated from protobuf field <code>bool is_new = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsNew($var)
    {
        GPBUtil::checkBool($var);
        $this->is_new = $var;

        return $this;
    }

}

