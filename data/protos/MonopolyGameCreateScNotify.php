<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PILGNJBLDDB (7008)
 *
 * Generated from protobuf message <code>MonopolyGameCreateScNotify</code>
 */
class MonopolyGameCreateScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.GJDDKMBHECO dcfncdeieom = 8;</code>
     */
    protected $dcfncdeieom = null;
    /**
     * Generated from protobuf field <code>.FAMDDGEBEIB eojgidpkmjm = 6;</code>
     */
    protected $eojgidpkmjm = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GJDDKMBHECO $dcfncdeieom
     *     @type \FAMDDGEBEIB $eojgidpkmjm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.GJDDKMBHECO dcfncdeieom = 8;</code>
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
     * Generated from protobuf field <code>.GJDDKMBHECO dcfncdeieom = 8;</code>
     * @param \GJDDKMBHECO $var
     * @return $this
     */
    public function setDcfncdeieom($var)
    {
        GPBUtil::checkMessage($var, \GJDDKMBHECO::class);
        $this->dcfncdeieom = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FAMDDGEBEIB eojgidpkmjm = 6;</code>
     * @return \FAMDDGEBEIB|null
     */
    public function getEojgidpkmjm()
    {
        return $this->eojgidpkmjm;
    }

    public function hasEojgidpkmjm()
    {
        return isset($this->eojgidpkmjm);
    }

    public function clearEojgidpkmjm()
    {
        unset($this->eojgidpkmjm);
    }

    /**
     * Generated from protobuf field <code>.FAMDDGEBEIB eojgidpkmjm = 6;</code>
     * @param \FAMDDGEBEIB $var
     * @return $this
     */
    public function setEojgidpkmjm($var)
    {
        GPBUtil::checkMessage($var, \FAMDDGEBEIB::class);
        $this->eojgidpkmjm = $var;

        return $this;
    }

}

