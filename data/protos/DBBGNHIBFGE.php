<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DBBGNHIBFGE</code>
 */
class DBBGNHIBFGE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .CLBCILGMDEL KLDMNAJFFCB = 13;</code>
     */
    private $KLDMNAJFFCB;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\CLBCILGMDEL>|\Google\Protobuf\Internal\RepeatedField $KLDMNAJFFCB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .CLBCILGMDEL KLDMNAJFFCB = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKLDMNAJFFCB()
    {
        return $this->KLDMNAJFFCB;
    }

    /**
     * Generated from protobuf field <code>repeated .CLBCILGMDEL KLDMNAJFFCB = 13;</code>
     * @param array<\CLBCILGMDEL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKLDMNAJFFCB($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CLBCILGMDEL::class);
        $this->KLDMNAJFFCB = $arr;

        return $this;
    }

}
