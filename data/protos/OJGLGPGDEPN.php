<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OJGLGPGDEPN</code>
 */
class OJGLGPGDEPN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 id = 5;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 IFJNGOLCGPI = 10;</code>
     */
    private $IFJNGOLCGPI;
    /**
     * Generated from protobuf field <code>int64 LDCANAOMENA = 9;</code>
     */
    protected $LDCANAOMENA = 0;
    /**
     * Generated from protobuf field <code>uint32 MJNPBCGCOLB = 3;</code>
     */
    protected $MJNPBCGCOLB = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $IFJNGOLCGPI
     *     @type int|string $LDCANAOMENA
     *     @type int $MJNPBCGCOLB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 id = 5;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 IFJNGOLCGPI = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIFJNGOLCGPI()
    {
        return $this->IFJNGOLCGPI;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 IFJNGOLCGPI = 10;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIFJNGOLCGPI($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->IFJNGOLCGPI = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 LDCANAOMENA = 9;</code>
     * @return int|string
     */
    public function getLDCANAOMENA()
    {
        return $this->LDCANAOMENA;
    }

    /**
     * Generated from protobuf field <code>int64 LDCANAOMENA = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLDCANAOMENA($var)
    {
        GPBUtil::checkInt64($var);
        $this->LDCANAOMENA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 MJNPBCGCOLB = 3;</code>
     * @return int
     */
    public function getMJNPBCGCOLB()
    {
        return $this->MJNPBCGCOLB;
    }

    /**
     * Generated from protobuf field <code>uint32 MJNPBCGCOLB = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMJNPBCGCOLB($var)
    {
        GPBUtil::checkUint32($var);
        $this->MJNPBCGCOLB = $var;

        return $this;
    }

}
