<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KJLPNCIDFID (7076)
 *
 * Generated from protobuf message <code>MonopolyGameSettleScNotify</code>
 */
class MonopolyGameSettleScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList meeafmcnjie = 9;</code>
     */
    protected $meeafmcnjie = null;
    /**
     * Generated from protobuf field <code>.ItemList item_list = 13;</code>
     */
    protected $item_list = null;
    /**
     * Generated from protobuf field <code>.GJDDKMBHECO dcfncdeieom = 1;</code>
     */
    protected $dcfncdeieom = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $meeafmcnjie
     *     @type \ItemList $item_list
     *     @type \GJDDKMBHECO $dcfncdeieom
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList meeafmcnjie = 9;</code>
     * @return \ItemList|null
     */
    public function getMeeafmcnjie()
    {
        return $this->meeafmcnjie;
    }

    public function hasMeeafmcnjie()
    {
        return isset($this->meeafmcnjie);
    }

    public function clearMeeafmcnjie()
    {
        unset($this->meeafmcnjie);
    }

    /**
     * Generated from protobuf field <code>.ItemList meeafmcnjie = 9;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setMeeafmcnjie($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->meeafmcnjie = $var;

        return $this;
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
     * Generated from protobuf field <code>.GJDDKMBHECO dcfncdeieom = 1;</code>
     * @return \GJDDKMBHECO|null
     */
    public function getDcfncdeieom()
    {
        return $this->dcfncdeieom;
    }

    public function hasDcfncdeieom()
    {
        return isset($this->dcfncdeieom);
    }

    public function clearDcfncdeieom()
    {
        unset($this->dcfncdeieom);
    }

    /**
     * Generated from protobuf field <code>.GJDDKMBHECO dcfncdeieom = 1;</code>
     * @param \GJDDKMBHECO $var
     * @return $this
     */
    public function setDcfncdeieom($var)
    {
        GPBUtil::checkMessage($var, \GJDDKMBHECO::class);
        $this->dcfncdeieom = $var;

        return $this;
    }

}

