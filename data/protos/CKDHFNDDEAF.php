<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CKDHFNDDEAF</code>
 */
class CKDHFNDDEAF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .EJKPOPPNAOM lbldilmnghc = 9;</code>
     */
    private $lbldilmnghc;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\EJKPOPPNAOM>|\Google\Protobuf\Internal\RepeatedField $lbldilmnghc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .EJKPOPPNAOM lbldilmnghc = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLbldilmnghc()
    {
        return $this->lbldilmnghc;
    }

    /**
     * Generated from protobuf field <code>repeated .EJKPOPPNAOM lbldilmnghc = 9;</code>
     * @param array<\EJKPOPPNAOM>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLbldilmnghc($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \EJKPOPPNAOM::class);
        $this->lbldilmnghc = $arr;

        return $this;
    }

}

