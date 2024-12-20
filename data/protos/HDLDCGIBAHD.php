<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HDLDCGIBAHD</code>
 */
class HDLDCGIBAHD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 plane_id = 2;</code>
     */
    protected $plane_id = 0;
    /**
     * Generated from protobuf field <code>.MENNDCCODOM DILEAMLLJFF = 6;</code>
     */
    protected $DILEAMLLJFF = null;
    /**
     * Generated from protobuf field <code>uint32 floor_id = 5;</code>
     */
    protected $floor_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $plane_id
     *     @type \MENNDCCODOM $DILEAMLLJFF
     *     @type int $floor_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 plane_id = 2;</code>
     * @return int
     */
    public function getPlaneId()
    {
        return $this->plane_id;
    }

    /**
     * Generated from protobuf field <code>uint32 plane_id = 2;</code>
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
     * Generated from protobuf field <code>.MENNDCCODOM DILEAMLLJFF = 6;</code>
     * @return \MENNDCCODOM|null
     */
    public function getDILEAMLLJFF()
    {
        return $this->DILEAMLLJFF;
    }

    public function hasDILEAMLLJFF()
    {
        return isset($this->DILEAMLLJFF);
    }

    public function clearDILEAMLLJFF()
    {
        unset($this->DILEAMLLJFF);
    }

    /**
     * Generated from protobuf field <code>.MENNDCCODOM DILEAMLLJFF = 6;</code>
     * @param \MENNDCCODOM $var
     * @return $this
     */
    public function setDILEAMLLJFF($var)
    {
        GPBUtil::checkMessage($var, \MENNDCCODOM::class);
        $this->DILEAMLLJFF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 floor_id = 5;</code>
     * @return int
     */
    public function getFloorId()
    {
        return $this->floor_id;
    }

    /**
     * Generated from protobuf field <code>uint32 floor_id = 5;</code>
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

