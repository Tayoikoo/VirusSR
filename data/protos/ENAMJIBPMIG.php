<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ENAMJIBPMIG</code>
 */
class ENAMJIBPMIG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string BNCHHJCHKON = 15;</code>
     */
    protected $BNCHHJCHKON = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $BNCHHJCHKON
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string BNCHHJCHKON = 15;</code>
     * @return string
     */
    public function getBNCHHJCHKON()
    {
        return $this->BNCHHJCHKON;
    }

    /**
     * Generated from protobuf field <code>string BNCHHJCHKON = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setBNCHHJCHKON($var)
    {
        GPBUtil::checkString($var, True);
        $this->BNCHHJCHKON = $var;

        return $this;
    }

}
