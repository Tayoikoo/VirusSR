<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DOBDKILFLMN</code>
 */
class DOBDKILFLMN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 AIHBDNKBNMH = 2;</code>
     */
    protected $AIHBDNKBNMH = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $AIHBDNKBNMH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 AIHBDNKBNMH = 2;</code>
     * @return int
     */
    public function getAIHBDNKBNMH()
    {
        return $this->AIHBDNKBNMH;
    }

    /**
     * Generated from protobuf field <code>uint32 AIHBDNKBNMH = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAIHBDNKBNMH($var)
    {
        GPBUtil::checkUint32($var);
        $this->AIHBDNKBNMH = $var;

        return $this;
    }

}
