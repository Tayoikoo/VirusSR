<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IHEBMKFIOEP</code>
 */
class IHEBMKFIOEP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 value = 6;</code>
     */
    protected $value = 0;
    /**
     * Generated from protobuf field <code>.IDHKDDDCMCA hmoomiicofi = 1;</code>
     */
    protected $hmoomiicofi = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $value
     *     @type int $hmoomiicofi
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 value = 6;</code>
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>uint32 value = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkUint32($var);
        $this->value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.IDHKDDDCMCA hmoomiicofi = 1;</code>
     * @return int
     */
    public function getHmoomiicofi()
    {
        return $this->hmoomiicofi;
    }

    /**
     * Generated from protobuf field <code>.IDHKDDDCMCA hmoomiicofi = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setHmoomiicofi($var)
    {
        GPBUtil::checkEnum($var, \IDHKDDDCMCA::class);
        $this->hmoomiicofi = $var;

        return $this;
    }

}

