<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LILBCAMGBKF</code>
 */
class LILBCAMGBKF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemCostData DGEOCNCBNCP = 9;</code>
     */
    protected $DGEOCNCBNCP = null;
    /**
     * Generated from protobuf field <code>uint32 AGALDAOBBKL = 10;</code>
     */
    protected $AGALDAOBBKL = 0;
    /**
     * Generated from protobuf field <code>map<uint32, .ItemCostData> POLMMPOGDHN = 1;</code>
     */
    private $POLMMPOGDHN;
    /**
     * Generated from protobuf field <code>int32 KLIHFJGLCDI = 15;</code>
     */
    protected $KLIHFJGLCDI = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemCostData $DGEOCNCBNCP
     *     @type int $AGALDAOBBKL
     *     @type array|\Google\Protobuf\Internal\MapField $POLMMPOGDHN
     *     @type int $KLIHFJGLCDI
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData DGEOCNCBNCP = 9;</code>
     * @return \ItemCostData|null
     */
    public function getDGEOCNCBNCP()
    {
        return $this->DGEOCNCBNCP;
    }

    public function hasDGEOCNCBNCP()
    {
        return isset($this->DGEOCNCBNCP);
    }

    public function clearDGEOCNCBNCP()
    {
        unset($this->DGEOCNCBNCP);
    }

    /**
     * Generated from protobuf field <code>.ItemCostData DGEOCNCBNCP = 9;</code>
     * @param \ItemCostData $var
     * @return $this
     */
    public function setDGEOCNCBNCP($var)
    {
        GPBUtil::checkMessage($var, \ItemCostData::class);
        $this->DGEOCNCBNCP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AGALDAOBBKL = 10;</code>
     * @return int
     */
    public function getAGALDAOBBKL()
    {
        return $this->AGALDAOBBKL;
    }

    /**
     * Generated from protobuf field <code>uint32 AGALDAOBBKL = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setAGALDAOBBKL($var)
    {
        GPBUtil::checkUint32($var);
        $this->AGALDAOBBKL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<uint32, .ItemCostData> POLMMPOGDHN = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPOLMMPOGDHN()
    {
        return $this->POLMMPOGDHN;
    }

    /**
     * Generated from protobuf field <code>map<uint32, .ItemCostData> POLMMPOGDHN = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPOLMMPOGDHN($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::MESSAGE, \ItemCostData::class);
        $this->POLMMPOGDHN = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 KLIHFJGLCDI = 15;</code>
     * @return int
     */
    public function getKLIHFJGLCDI()
    {
        return $this->KLIHFJGLCDI;
    }

    /**
     * Generated from protobuf field <code>int32 KLIHFJGLCDI = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setKLIHFJGLCDI($var)
    {
        GPBUtil::checkInt32($var);
        $this->KLIHFJGLCDI = $var;

        return $this;
    }

}
