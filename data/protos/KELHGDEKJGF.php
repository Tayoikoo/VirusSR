<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KELHGDEKJGF</code>
 */
class KELHGDEKJGF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.KDJPHDGEPNA IGKDEMOHPBD = 12;</code>
     */
    protected $IGKDEMOHPBD = null;
    /**
     * Generated from protobuf field <code>.LANMBAHCFKE IDJGHDKAOOD = 10;</code>
     */
    protected $IDJGHDKAOOD = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \KDJPHDGEPNA $IGKDEMOHPBD
     *     @type \LANMBAHCFKE $IDJGHDKAOOD
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.KDJPHDGEPNA IGKDEMOHPBD = 12;</code>
     * @return \KDJPHDGEPNA|null
     */
    public function getIGKDEMOHPBD()
    {
        return $this->IGKDEMOHPBD;
    }

    public function hasIGKDEMOHPBD()
    {
        return isset($this->IGKDEMOHPBD);
    }

    public function clearIGKDEMOHPBD()
    {
        unset($this->IGKDEMOHPBD);
    }

    /**
     * Generated from protobuf field <code>.KDJPHDGEPNA IGKDEMOHPBD = 12;</code>
     * @param \KDJPHDGEPNA $var
     * @return $this
     */
    public function setIGKDEMOHPBD($var)
    {
        GPBUtil::checkMessage($var, \KDJPHDGEPNA::class);
        $this->IGKDEMOHPBD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.LANMBAHCFKE IDJGHDKAOOD = 10;</code>
     * @return \LANMBAHCFKE|null
     */
    public function getIDJGHDKAOOD()
    {
        return $this->IDJGHDKAOOD;
    }

    public function hasIDJGHDKAOOD()
    {
        return isset($this->IDJGHDKAOOD);
    }

    public function clearIDJGHDKAOOD()
    {
        unset($this->IDJGHDKAOOD);
    }

    /**
     * Generated from protobuf field <code>.LANMBAHCFKE IDJGHDKAOOD = 10;</code>
     * @param \LANMBAHCFKE $var
     * @return $this
     */
    public function setIDJGHDKAOOD($var)
    {
        GPBUtil::checkMessage($var, \LANMBAHCFKE::class);
        $this->IDJGHDKAOOD = $var;

        return $this;
    }

}
