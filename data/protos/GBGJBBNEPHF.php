<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GBGJBBNEPHF</code>
 */
class GBGJBBNEPHF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .LMBBCHNLHEK AOGJNJCOKFF = 3;</code>
     */
    private $AOGJNJCOKFF;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\LMBBCHNLHEK>|\Google\Protobuf\Internal\RepeatedField $AOGJNJCOKFF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .LMBBCHNLHEK AOGJNJCOKFF = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAOGJNJCOKFF()
    {
        return $this->AOGJNJCOKFF;
    }

    /**
     * Generated from protobuf field <code>repeated .LMBBCHNLHEK AOGJNJCOKFF = 3;</code>
     * @param array<\LMBBCHNLHEK>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAOGJNJCOKFF($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \LMBBCHNLHEK::class);
        $this->AOGJNJCOKFF = $arr;

        return $this;
    }

}

