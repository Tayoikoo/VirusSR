<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FMLLCMPHMKH</code>
 */
class FMLLCMPHMKH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .EDCHLFMBLFE hnhclcbjaim = 13;</code>
     */
    private $hnhclcbjaim;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\EDCHLFMBLFE>|\Google\Protobuf\Internal\RepeatedField $hnhclcbjaim
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .EDCHLFMBLFE hnhclcbjaim = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHnhclcbjaim()
    {
        return $this->hnhclcbjaim;
    }

    /**
     * Generated from protobuf field <code>repeated .EDCHLFMBLFE hnhclcbjaim = 13;</code>
     * @param array<\EDCHLFMBLFE>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHnhclcbjaim($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \EDCHLFMBLFE::class);
        $this->hnhclcbjaim = $arr;

        return $this;
    }

}

