<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LECLNNBLPHC</code>
 */
class LECLNNBLPHC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<uint32, int32> abghhlggkik = 13;</code>
     */
    private $abghhlggkik;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $abghhlggkik
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<uint32, int32> abghhlggkik = 13;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAbghhlggkik()
    {
        return $this->abghhlggkik;
    }

    /**
     * Generated from protobuf field <code>map<uint32, int32> abghhlggkik = 13;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAbghhlggkik($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::INT32);
        $this->abghhlggkik = $arr;

        return $this;
    }

}
