<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MissionCustomValue</code>
 */
class MissionCustomValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 index = 7;</code>
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>uint32 custom_value = 10;</code>
     */
    protected $custom_value = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $index
     *     @type int $custom_value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 index = 7;</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 custom_value = 10;</code>
     * @return int
     */
    public function getCustomValue()
    {
        return $this->custom_value;
    }

    /**
     * Generated from protobuf field <code>uint32 custom_value = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setCustomValue($var)
    {
        GPBUtil::checkUint32($var);
        $this->custom_value = $var;

        return $this;
    }

}

