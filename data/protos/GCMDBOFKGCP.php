<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GCMDBOFKGCP</code>
 */
class GCMDBOFKGCP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 HNHLMHEIDEH = 2;</code>
     */
    private $HNHLMHEIDEH;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $HNHLMHEIDEH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HNHLMHEIDEH = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHNHLMHEIDEH()
    {
        return $this->HNHLMHEIDEH;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 HNHLMHEIDEH = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHNHLMHEIDEH($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->HNHLMHEIDEH = $arr;

        return $this;
    }

}

