<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ODMGPPIMLAC</code>
 */
class ODMGPPIMLAC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 OEOPFGEDFGB = 9;</code>
     */
    protected $OEOPFGEDFGB = 0;
    /**
     * Generated from protobuf field <code>uint32 floor_id = 5;</code>
     */
    protected $floor_id = 0;
    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 1;</code>
     */
    protected $ILIFHHJFMIH = 0;
    /**
     * Generated from protobuf field <code>string LBLFEKKPCNC = 12;</code>
     */
    protected $LBLFEKKPCNC = '';
    /**
     * Generated from protobuf field <code>uint32 PMCIJKIINJL = 8;</code>
     */
    protected $PMCIJKIINJL = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $OEOPFGEDFGB
     *     @type int $floor_id
     *     @type int $ILIFHHJFMIH
     *     @type string $LBLFEKKPCNC
     *     @type int $PMCIJKIINJL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 OEOPFGEDFGB = 9;</code>
     * @return int
     */
    public function getOEOPFGEDFGB()
    {
        return $this->OEOPFGEDFGB;
    }

    /**
     * Generated from protobuf field <code>int32 OEOPFGEDFGB = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setOEOPFGEDFGB($var)
    {
        GPBUtil::checkInt32($var);
        $this->OEOPFGEDFGB = $var;

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

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 1;</code>
     * @return int
     */
    public function getILIFHHJFMIH()
    {
        return $this->ILIFHHJFMIH;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setILIFHHJFMIH($var)
    {
        GPBUtil::checkUint32($var);
        $this->ILIFHHJFMIH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string LBLFEKKPCNC = 12;</code>
     * @return string
     */
    public function getLBLFEKKPCNC()
    {
        return $this->LBLFEKKPCNC;
    }

    /**
     * Generated from protobuf field <code>string LBLFEKKPCNC = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setLBLFEKKPCNC($var)
    {
        GPBUtil::checkString($var, True);
        $this->LBLFEKKPCNC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PMCIJKIINJL = 8;</code>
     * @return int
     */
    public function getPMCIJKIINJL()
    {
        return $this->PMCIJKIINJL;
    }

    /**
     * Generated from protobuf field <code>uint32 PMCIJKIINJL = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPMCIJKIINJL($var)
    {
        GPBUtil::checkUint32($var);
        $this->PMCIJKIINJL = $var;

        return $this;
    }

}

