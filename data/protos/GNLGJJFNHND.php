<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GNLGJJFNHND</code>
 */
class GNLGJJFNHND extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .IGBNDAHOHED ecapbmomfbh = 11;</code>
     */
    private $ecapbmomfbh;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\IGBNDAHOHED>|\Google\Protobuf\Internal\RepeatedField $ecapbmomfbh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .IGBNDAHOHED ecapbmomfbh = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEcapbmomfbh()
    {
        return $this->ecapbmomfbh;
    }

    /**
     * Generated from protobuf field <code>repeated .IGBNDAHOHED ecapbmomfbh = 11;</code>
     * @param array<\IGBNDAHOHED>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEcapbmomfbh($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \IGBNDAHOHED::class);
        $this->ecapbmomfbh = $arr;

        return $this;
    }

}

