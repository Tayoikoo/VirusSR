<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GBAKAKEHOJI (8073)
 *
 * Generated from protobuf message <code>TrainPartyTakeBuildLevelAwardScRsp</code>
 */
class TrainPartyTakeBuildLevelAwardScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList item_list = 13;</code>
     */
    protected $item_list = null;
    /**
     * Generated from protobuf field <code>uint32 epeiiaggffm = 12;</code>
     */
    protected $epeiiaggffm = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $item_list
     *     @type int $epeiiaggffm
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList item_list = 13;</code>
     * @return \ItemList|null
     */
    public function getItemList()
    {
        return $this->item_list;
    }

    public function hasItemList()
    {
        return isset($this->item_list);
    }

    public function clearItemList()
    {
        unset($this->item_list);
    }

    /**
     * Generated from protobuf field <code>.ItemList item_list = 13;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setItemList($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->item_list = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 epeiiaggffm = 12;</code>
     * @return int
     */
    public function getEpeiiaggffm()
    {
        return $this->epeiiaggffm;
    }

    /**
     * Generated from protobuf field <code>uint32 epeiiaggffm = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setEpeiiaggffm($var)
    {
        GPBUtil::checkUint32($var);
        $this->epeiiaggffm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
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

