<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ABFPOHHGFJK (7415)
 *
 * Generated from protobuf message <code>MatchThreeSyncDataScNotify</code>
 */
class MatchThreeSyncDataScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.AKPLEIPECMG ikcemnhlcec = 9;</code>
     */
    protected $ikcemnhlcec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \AKPLEIPECMG $ikcemnhlcec
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.AKPLEIPECMG ikcemnhlcec = 9;</code>
     * @return \AKPLEIPECMG|null
     */
    public function getIkcemnhlcec()
    {
        return $this->ikcemnhlcec;
    }

    public function hasIkcemnhlcec()
    {
        return isset($this->ikcemnhlcec);
    }

    public function clearIkcemnhlcec()
    {
        unset($this->ikcemnhlcec);
    }

    /**
     * Generated from protobuf field <code>.AKPLEIPECMG ikcemnhlcec = 9;</code>
     * @param \AKPLEIPECMG $var
     * @return $this
     */
    public function setIkcemnhlcec($var)
    {
        GPBUtil::checkMessage($var, \AKPLEIPECMG::class);
        $this->ikcemnhlcec = $var;

        return $this;
    }

}
