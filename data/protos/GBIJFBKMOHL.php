<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GBIJFBKMOHL</code>
 */
class GBIJFBKMOHL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 GOMCBKDFJMG = 9;</code>
     */
    protected $GOMCBKDFJMG = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GOMCBKDFJMG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 GOMCBKDFJMG = 9;</code>
     * @return int
     */
    public function getGOMCBKDFJMG()
    {
        return $this->GOMCBKDFJMG;
    }

    /**
     * Generated from protobuf field <code>int32 GOMCBKDFJMG = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setGOMCBKDFJMG($var)
    {
        GPBUtil::checkInt32($var);
        $this->GOMCBKDFJMG = $var;

        return $this;
    }

}

