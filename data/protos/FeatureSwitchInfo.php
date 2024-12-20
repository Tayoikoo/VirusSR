<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FeatureSwitchInfo</code>
 */
class FeatureSwitchInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.FeatureSwitchType Type = 1;</code>
     */
    protected $Type = 0;
    /**
     * Generated from protobuf field <code>repeated .FeatureSwitchParam SwitchList = 2;</code>
     */
    private $SwitchList;
    /**
     * Generated from protobuf field <code>bool IsAllClosed = 3;</code>
     */
    protected $IsAllClosed = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Type
     *     @type array<\FeatureSwitchParam>|\Google\Protobuf\Internal\RepeatedField $SwitchList
     *     @type bool $IsAllClosed
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.FeatureSwitchType Type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Generated from protobuf field <code>.FeatureSwitchType Type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \FeatureSwitchType::class);
        $this->Type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .FeatureSwitchParam SwitchList = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSwitchList()
    {
        return $this->SwitchList;
    }

    /**
     * Generated from protobuf field <code>repeated .FeatureSwitchParam SwitchList = 2;</code>
     * @param array<\FeatureSwitchParam>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSwitchList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FeatureSwitchParam::class);
        $this->SwitchList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsAllClosed = 3;</code>
     * @return bool
     */
    public function getIsAllClosed()
    {
        return $this->IsAllClosed;
    }

    /**
     * Generated from protobuf field <code>bool IsAllClosed = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAllClosed($var)
    {
        GPBUtil::checkBool($var);
        $this->IsAllClosed = $var;

        return $this;
    }

}

