<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DJBGMOJKOOD (1499)
 *
 * Generated from protobuf message <code>UpdateMechanismBarScNotify</code>
 */
class UpdateMechanismBarScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.MechanismBarInfo gjedckbokka = 12;</code>
     */
    protected $gjedckbokka = null;
    /**
     * Generated from protobuf field <code>uint32 plane_id = 13;</code>
     */
    protected $plane_id = 0;
    /**
     * Generated from protobuf field <code>uint32 floor_id = 11;</code>
     */
    protected $floor_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MechanismBarInfo $gjedckbokka
     *     @type int $plane_id
     *     @type int $floor_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.MechanismBarInfo gjedckbokka = 12;</code>
     * @return \MechanismBarInfo|null
     */
    public function getGjedckbokka()
    {
        return $this->gjedckbokka;
    }

    public function hasGjedckbokka()
    {
        return isset($this->gjedckbokka);
    }

    public function clearGjedckbokka()
    {
        unset($this->gjedckbokka);
    }

    /**
     * Generated from protobuf field <code>.MechanismBarInfo gjedckbokka = 12;</code>
     * @param \MechanismBarInfo $var
     * @return $this
     */
    public function setGjedckbokka($var)
    {
        GPBUtil::checkMessage($var, \MechanismBarInfo::class);
        $this->gjedckbokka = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 plane_id = 13;</code>
     * @return int
     */
    public function getPlaneId()
    {
        return $this->plane_id;
    }

    /**
     * Generated from protobuf field <code>uint32 plane_id = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setPlaneId($var)
    {
        GPBUtil::checkUint32($var);
        $this->plane_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 floor_id = 11;</code>
     * @return int
     */
    public function getFloorId()
    {
        return $this->floor_id;
    }

    /**
     * Generated from protobuf field <code>uint32 floor_id = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setFloorId($var)
    {
        GPBUtil::checkUint32($var);
        $this->floor_id = $var;

        return $this;
    }

}

