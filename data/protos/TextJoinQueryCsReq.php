<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CGPNGNPAMEL (3884)
 *
 * Generated from protobuf message <code>TextJoinQueryCsReq</code>
 */
class TextJoinQueryCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 cpkdndffhem = 11;</code>
     */
    private $cpkdndffhem;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $cpkdndffhem
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 cpkdndffhem = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCpkdndffhem()
    {
        return $this->cpkdndffhem;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 cpkdndffhem = 11;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCpkdndffhem($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->cpkdndffhem = $arr;

        return $this;
    }

}
