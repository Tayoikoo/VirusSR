<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CharacterSnapshot</code>
 */
class CharacterSnapshot extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 runtime_id = 1;</code>
     */
    protected $runtime_id = 0;
    /**
     * Generated from protobuf field <code>repeated uint64 properties = 2;</code>
     */
    private $properties;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $runtime_id
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $properties
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 runtime_id = 1;</code>
     * @return int
     */
    public function getRuntimeId()
    {
        return $this->runtime_id;
    }

    /**
     * Generated from protobuf field <code>uint32 runtime_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRuntimeId($var)
    {
        GPBUtil::checkUint32($var);
        $this->runtime_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 properties = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 properties = 2;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->properties = $arr;

        return $this;
    }

}
