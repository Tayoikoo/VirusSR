<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CGHFMJBOKGK</code>
 */
class CGHFMJBOKGK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.AmountInfo sp = 2;</code>
     */
    protected $sp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \AmountInfo $sp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.AmountInfo sp = 2;</code>
     * @return \AmountInfo|null
     */
    public function getSp()
    {
        return $this->sp;
    }

    public function hasSp()
    {
        return isset($this->sp);
    }

    public function clearSp()
    {
        unset($this->sp);
    }

    /**
     * Generated from protobuf field <code>.AmountInfo sp = 2;</code>
     * @param \AmountInfo $var
     * @return $this
     */
    public function setSp($var)
    {
        GPBUtil::checkMessage($var, \AmountInfo::class);
        $this->sp = $var;

        return $this;
    }

}

