<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LGPCMKHABLF</code>
 */
class LGPCMKHABLF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 PMCIJKIINJL = 7;</code>
     */
    protected $PMCIJKIINJL = 0;
    /**
     * Generated from protobuf field <code>uint32 plane_id = 3;</code>
     */
    protected $plane_id = 0;
    /**
     * Generated from protobuf field <code>map<string, int32> PPCIOOALBNF = 8;</code>
     */
    private $PPCIOOALBNF;
    /**
     * Generated from protobuf field <code>uint32 floor_id = 1;</code>
     */
    protected $floor_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $PMCIJKIINJL
     *     @type int $plane_id
     *     @type array|\Google\Protobuf\Internal\MapField $PPCIOOALBNF
     *     @type int $floor_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 PMCIJKIINJL = 7;</code>
     * @return int
     */
    public function getPMCIJKIINJL()
    {
        return $this->PMCIJKIINJL;
    }

    /**
     * Generated from protobuf field <code>uint32 PMCIJKIINJL = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPMCIJKIINJL($var)
    {
        GPBUtil::checkUint32($var);
        $this->PMCIJKIINJL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 plane_id = 3;</code>
     * @return int
     */
    public function getPlaneId()
    {
        return $this->plane_id;
    }

    /**
     * Generated from protobuf field <code>uint32 plane_id = 3;</code>
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
     * Generated from protobuf field <code>map<string, int32> PPCIOOALBNF = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPPCIOOALBNF()
    {
        return $this->PPCIOOALBNF;
    }

    /**
     * Generated from protobuf field <code>map<string, int32> PPCIOOALBNF = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPPCIOOALBNF($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT32);
        $this->PPCIOOALBNF = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 floor_id = 1;</code>
     * @return int
     */
    public function getFloorId()
    {
        return $this->floor_id;
    }

    /**
     * Generated from protobuf field <code>uint32 floor_id = 1;</code>
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

