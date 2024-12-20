<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AddRelicFilterPlanCsReq (594)
 *
 * Generated from protobuf message <code>AddRelicFilterPlanCsReq</code>
 */
class AddRelicFilterPlanCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.RelicFilterPlanIcon Icon = 2;</code>
     */
    protected $Icon = null;
    /**
     * Generated from protobuf field <code>.RelicFilterPlanSettings Settings = 1;</code>
     */
    protected $Settings = null;
    /**
     * Generated from protobuf field <code>bool IsMarked = 5;</code>
     */
    protected $IsMarked = false;
    /**
     * Generated from protobuf field <code>uint32 AvatarIdOnCreate = 7;</code>
     */
    protected $AvatarIdOnCreate = 0;
    /**
     * Generated from protobuf field <code>string Name = 15;</code>
     */
    protected $Name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RelicFilterPlanIcon $Icon
     *     @type \RelicFilterPlanSettings $Settings
     *     @type bool $IsMarked
     *     @type int $AvatarIdOnCreate
     *     @type string $Name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.RelicFilterPlanIcon Icon = 2;</code>
     * @return \RelicFilterPlanIcon|null
     */
    public function getIcon()
    {
        return $this->Icon;
    }

    public function hasIcon()
    {
        return isset($this->Icon);
    }

    public function clearIcon()
    {
        unset($this->Icon);
    }

    /**
     * Generated from protobuf field <code>.RelicFilterPlanIcon Icon = 2;</code>
     * @param \RelicFilterPlanIcon $var
     * @return $this
     */
    public function setIcon($var)
    {
        GPBUtil::checkMessage($var, \RelicFilterPlanIcon::class);
        $this->Icon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RelicFilterPlanSettings Settings = 1;</code>
     * @return \RelicFilterPlanSettings|null
     */
    public function getSettings()
    {
        return $this->Settings;
    }

    public function hasSettings()
    {
        return isset($this->Settings);
    }

    public function clearSettings()
    {
        unset($this->Settings);
    }

    /**
     * Generated from protobuf field <code>.RelicFilterPlanSettings Settings = 1;</code>
     * @param \RelicFilterPlanSettings $var
     * @return $this
     */
    public function setSettings($var)
    {
        GPBUtil::checkMessage($var, \RelicFilterPlanSettings::class);
        $this->Settings = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsMarked = 5;</code>
     * @return bool
     */
    public function getIsMarked()
    {
        return $this->IsMarked;
    }

    /**
     * Generated from protobuf field <code>bool IsMarked = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsMarked($var)
    {
        GPBUtil::checkBool($var);
        $this->IsMarked = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AvatarIdOnCreate = 7;</code>
     * @return int
     */
    public function getAvatarIdOnCreate()
    {
        return $this->AvatarIdOnCreate;
    }

    /**
     * Generated from protobuf field <code>uint32 AvatarIdOnCreate = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarIdOnCreate($var)
    {
        GPBUtil::checkUint32($var);
        $this->AvatarIdOnCreate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Name = 15;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Generated from protobuf field <code>string Name = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->Name = $var;

        return $this;
    }

}

