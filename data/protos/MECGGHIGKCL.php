<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MECGGHIGKCL</code>
 */
class MECGGHIGKCL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .LOAKNMELPHL IKOOPCBPGLG = 4;</code>
     */
    private $IKOOPCBPGLG;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\LOAKNMELPHL>|\Google\Protobuf\Internal\RepeatedField $IKOOPCBPGLG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .LOAKNMELPHL IKOOPCBPGLG = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIKOOPCBPGLG()
    {
        return $this->IKOOPCBPGLG;
    }

    /**
     * Generated from protobuf field <code>repeated .LOAKNMELPHL IKOOPCBPGLG = 4;</code>
     * @param array<\LOAKNMELPHL>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIKOOPCBPGLG($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \LOAKNMELPHL::class);
        $this->IKOOPCBPGLG = $arr;

        return $this;
    }

}

