<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CNHNJPOMCLD</code>
 */
class CNHNJPOMCLD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 IDJNPOONENE = 4;</code>
     */
    protected $IDJNPOONENE = 0;
    /**
     * Generated from protobuf field <code>.ItemList reward = 7;</code>
     */
    protected $reward = null;
    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 8;</code>
     */
    protected $OFAGGKBMPJN = 0;
    /**
     * Generated from protobuf field <code>.ItemList HAJEJEFLKJD = 11;</code>
     */
    protected $HAJEJEFLKJD = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $IDJNPOONENE
     *     @type \ItemList $reward
     *     @type int $OFAGGKBMPJN
     *     @type \ItemList $HAJEJEFLKJD
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 IDJNPOONENE = 4;</code>
     * @return int
     */
    public function getIDJNPOONENE()
    {
        return $this->IDJNPOONENE;
    }

    /**
     * Generated from protobuf field <code>uint32 IDJNPOONENE = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setIDJNPOONENE($var)
    {
        GPBUtil::checkUint32($var);
        $this->IDJNPOONENE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 7;</code>
     * @return \ItemList|null
     */
    public function getReward()
    {
        return $this->reward;
    }

    public function hasReward()
    {
        return isset($this->reward);
    }

    public function clearReward()
    {
        unset($this->reward);
    }

    /**
     * Generated from protobuf field <code>.ItemList reward = 7;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setReward($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->reward = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 8;</code>
     * @return int
     */
    public function getOFAGGKBMPJN()
    {
        return $this->OFAGGKBMPJN;
    }

    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setOFAGGKBMPJN($var)
    {
        GPBUtil::checkUint32($var);
        $this->OFAGGKBMPJN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList HAJEJEFLKJD = 11;</code>
     * @return \ItemList|null
     */
    public function getHAJEJEFLKJD()
    {
        return $this->HAJEJEFLKJD;
    }

    public function hasHAJEJEFLKJD()
    {
        return isset($this->HAJEJEFLKJD);
    }

    public function clearHAJEJEFLKJD()
    {
        unset($this->HAJEJEFLKJD);
    }

    /**
     * Generated from protobuf field <code>.ItemList HAJEJEFLKJD = 11;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setHAJEJEFLKJD($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->HAJEJEFLKJD = $var;

        return $this;
    }

}
