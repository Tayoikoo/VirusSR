<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BKLLPGCEECM</code>
 */
class BKLLPGCEECM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .IBJMINGEPGN miracle_list = 6;</code>
     */
    private $miracle_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\IBJMINGEPGN>|\Google\Protobuf\Internal\RepeatedField $miracle_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .IBJMINGEPGN miracle_list = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMiracleList()
    {
        return $this->miracle_list;
    }

    /**
     * Generated from protobuf field <code>repeated .IBJMINGEPGN miracle_list = 6;</code>
     * @param array<\IBJMINGEPGN>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMiracleList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \IBJMINGEPGN::class);
        $this->miracle_list = $arr;

        return $this;
    }

}

