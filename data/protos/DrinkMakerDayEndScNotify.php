<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IPBHGKNKOMB (6982)
 *
 * Generated from protobuf message <code>DrinkMakerDayEndScNotify</code>
 */
class DrinkMakerDayEndScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 diflohdmggk = 1;</code>
     */
    protected $diflohdmggk = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $diflohdmggk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 diflohdmggk = 1;</code>
     * @return int
     */
    public function getDiflohdmggk()
    {
        return $this->diflohdmggk;
    }

    /**
     * Generated from protobuf field <code>uint32 diflohdmggk = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDiflohdmggk($var)
    {
        GPBUtil::checkUint32($var);
        $this->diflohdmggk = $var;

        return $this;
    }

}

