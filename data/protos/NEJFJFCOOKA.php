<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NEJFJFCOOKA</code>
 */
class NEJFJFCOOKA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 BJGBKGECDED = 9;</code>
     */
    protected $BJGBKGECDED = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $BJGBKGECDED
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 BJGBKGECDED = 9;</code>
     * @return int
     */
    public function getBJGBKGECDED()
    {
        return $this->BJGBKGECDED;
    }

    /**
     * Generated from protobuf field <code>uint32 BJGBKGECDED = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setBJGBKGECDED($var)
    {
        GPBUtil::checkUint32($var);
        $this->BJGBKGECDED = $var;

        return $this;
    }

}

