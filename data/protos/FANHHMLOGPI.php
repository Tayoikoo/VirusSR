<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FANHHMLOGPI</code>
 */
class FANHHMLOGPI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<uint32, bool> adkambbjndi = 1;</code>
     */
    private $adkambbjndi;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $adkambbjndi
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<uint32, bool> adkambbjndi = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAdkambbjndi()
    {
        return $this->adkambbjndi;
    }

    /**
     * Generated from protobuf field <code>map<uint32, bool> adkambbjndi = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAdkambbjndi($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::BOOL);
        $this->adkambbjndi = $arr;

        return $this;
    }

}
