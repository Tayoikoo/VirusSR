<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RogueBuffEnhanceInfoList</code>
 */
class RogueBuffEnhanceInfoList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .RogueBuffEnhanceInfo lebaaijchoh = 8;</code>
     */
    private $lebaaijchoh;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\RogueBuffEnhanceInfo>|\Google\Protobuf\Internal\RepeatedField $lebaaijchoh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .RogueBuffEnhanceInfo lebaaijchoh = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLebaaijchoh()
    {
        return $this->lebaaijchoh;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueBuffEnhanceInfo lebaaijchoh = 8;</code>
     * @param array<\RogueBuffEnhanceInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLebaaijchoh($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RogueBuffEnhanceInfo::class);
        $this->lebaaijchoh = $arr;

        return $this;
    }

}

