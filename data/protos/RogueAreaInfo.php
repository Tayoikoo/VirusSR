<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RogueAreaInfo</code>
 */
class RogueAreaInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .FGBNPHLEDEN odmgnjmjbhj = 2;</code>
     */
    private $odmgnjmjbhj;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\FGBNPHLEDEN>|\Google\Protobuf\Internal\RepeatedField $odmgnjmjbhj
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .FGBNPHLEDEN odmgnjmjbhj = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOdmgnjmjbhj()
    {
        return $this->odmgnjmjbhj;
    }

    /**
     * Generated from protobuf field <code>repeated .FGBNPHLEDEN odmgnjmjbhj = 2;</code>
     * @param array<\FGBNPHLEDEN>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOdmgnjmjbhj($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FGBNPHLEDEN::class);
        $this->odmgnjmjbhj = $arr;

        return $this;
    }

}

