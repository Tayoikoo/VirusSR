<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BHNNEGIBCMO</code>
 */
class BHNNEGIBCMO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .FCKKNINNGCJ equipment_list = 15;</code>
     */
    private $equipment_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\FCKKNINNGCJ>|\Google\Protobuf\Internal\RepeatedField $equipment_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .FCKKNINNGCJ equipment_list = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEquipmentList()
    {
        return $this->equipment_list;
    }

    /**
     * Generated from protobuf field <code>repeated .FCKKNINNGCJ equipment_list = 15;</code>
     * @param array<\FCKKNINNGCJ>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEquipmentList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FCKKNINNGCJ::class);
        $this->equipment_list = $arr;

        return $this;
    }

}

