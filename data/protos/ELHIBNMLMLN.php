<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ELHIBNMLMLN</code>
 */
class ELHIBNMLMLN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 JCPFOPLBOIM = 3;</code>
     */
    protected $JCPFOPLBOIM = 0;
    /**
     * Generated from protobuf field <code>uint32 plane_id = 14;</code>
     */
    protected $plane_id = 0;
    /**
     * Generated from protobuf field <code>uint32 floor_id = 6;</code>
     */
    protected $floor_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $JCPFOPLBOIM
     *     @type int $plane_id
     *     @type int $floor_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 JCPFOPLBOIM = 3;</code>
     * @return int
     */
    public function getJCPFOPLBOIM()
    {
        return $this->JCPFOPLBOIM;
    }

    /**
     * Generated from protobuf field <code>uint32 JCPFOPLBOIM = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setJCPFOPLBOIM($var)
    {
        GPBUtil::checkUint32($var);
        $this->JCPFOPLBOIM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 plane_id = 14;</code>
     * @return int
     */
    public function getPlaneId()
    {
        return $this->plane_id;
    }

    /**
     * Generated from protobuf field <code>uint32 plane_id = 14;</code>
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
     * Generated from protobuf field <code>uint32 floor_id = 6;</code>
     * @return int
     */
    public function getFloorId()
    {
        return $this->floor_id;
    }

    /**
     * Generated from protobuf field <code>uint32 floor_id = 6;</code>
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
