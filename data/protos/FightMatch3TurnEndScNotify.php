<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PEOCOJMKOGH (30167)
 *
 * Generated from protobuf message <code>FightMatch3TurnEndScNotify</code>
 */
class FightMatch3TurnEndScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.HKJACOBACDL lfmiodiklle = 8;</code>
     */
    protected $lfmiodiklle = null;
    /**
     * Generated from protobuf field <code>.HKJACOBACDL bniigbgpbfd = 6;</code>
     */
    protected $bniigbgpbfd = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \HKJACOBACDL $lfmiodiklle
     *     @type \HKJACOBACDL $bniigbgpbfd
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.HKJACOBACDL lfmiodiklle = 8;</code>
     * @return \HKJACOBACDL|null
     */
    public function getLfmiodiklle()
    {
        return $this->lfmiodiklle;
    }

    public function hasLfmiodiklle()
    {
        return isset($this->lfmiodiklle);
    }

    public function clearLfmiodiklle()
    {
        unset($this->lfmiodiklle);
    }

    /**
     * Generated from protobuf field <code>.HKJACOBACDL lfmiodiklle = 8;</code>
     * @param \HKJACOBACDL $var
     * @return $this
     */
    public function setLfmiodiklle($var)
    {
        GPBUtil::checkMessage($var, \HKJACOBACDL::class);
        $this->lfmiodiklle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.HKJACOBACDL bniigbgpbfd = 6;</code>
     * @return \HKJACOBACDL|null
     */
    public function getBniigbgpbfd()
    {
        return $this->bniigbgpbfd;
    }

    public function hasBniigbgpbfd()
    {
        return isset($this->bniigbgpbfd);
    }

    public function clearBniigbgpbfd()
    {
        unset($this->bniigbgpbfd);
    }

    /**
     * Generated from protobuf field <code>.HKJACOBACDL bniigbgpbfd = 6;</code>
     * @param \HKJACOBACDL $var
     * @return $this
     */
    public function setBniigbgpbfd($var)
    {
        GPBUtil::checkMessage($var, \HKJACOBACDL::class);
        $this->bniigbgpbfd = $var;

        return $this;
    }

}

