<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ModifyRelicFilterPlanCsReq (560)
 *
 * Generated from protobuf message <code>ModifyRelicFilterPlanCsReq</code>
 */
class ModifyRelicFilterPlanCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 SlotIndex = 1;</code>
     */
    protected $SlotIndex = 0;
    protected $infoCase_;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Name
     *     @type \RelicFilterPlanIcon $Icon
     *     @type \RelicFilterPlanSettings $Settings
     *     @type int $SlotIndex
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Name = 9;</code>
     * @return string
     */
    public function getName()
    {
        return $this->readOneof(9);
    }

    public function hasName()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>string Name = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RelicFilterPlanIcon Icon = 14;</code>
     * @return \RelicFilterPlanIcon|null
     */
    public function getIcon()
    {
        return $this->readOneof(14);
    }

    public function hasIcon()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.RelicFilterPlanIcon Icon = 14;</code>
     * @param \RelicFilterPlanIcon $var
     * @return $this
     */
    public function setIcon($var)
    {
        GPBUtil::checkMessage($var, \RelicFilterPlanIcon::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RelicFilterPlanSettings Settings = 4;</code>
     * @return \RelicFilterPlanSettings|null
     */
    public function getSettings()
    {
        return $this->readOneof(4);
    }

    public function hasSettings()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.RelicFilterPlanSettings Settings = 4;</code>
     * @param \RelicFilterPlanSettings $var
     * @return $this
     */
    public function setSettings($var)
    {
        GPBUtil::checkMessage($var, \RelicFilterPlanSettings::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 SlotIndex = 1;</code>
     * @return int
     */
    public function getSlotIndex()
    {
        return $this->SlotIndex;
    }

    /**
     * Generated from protobuf field <code>uint32 SlotIndex = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSlotIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->SlotIndex = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getInfoCase()
    {
        return $this->whichOneof("infoCase_");
    }

}

