<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GFPCBHIHDNN</code>
 */
class GFPCBHIHDNN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .INDPHBNNDKK faemamoaafd = 1;</code>
     */
    private $faemamoaafd;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\INDPHBNNDKK>|\Google\Protobuf\Internal\RepeatedField $faemamoaafd
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .INDPHBNNDKK faemamoaafd = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFaemamoaafd()
    {
        return $this->faemamoaafd;
    }

    /**
     * Generated from protobuf field <code>repeated .INDPHBNNDKK faemamoaafd = 1;</code>
     * @param array<\INDPHBNNDKK>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFaemamoaafd($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \INDPHBNNDKK::class);
        $this->faemamoaafd = $arr;

        return $this;
    }

}

