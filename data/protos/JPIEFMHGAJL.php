<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JPIEFMHGAJL</code>
 */
class JPIEFMHGAJL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 jnolagajcle = 5;</code>
     */
    protected $jnolagajcle = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $jnolagajcle
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 jnolagajcle = 5;</code>
     * @return int
     */
    public function getJnolagajcle()
    {
        return $this->jnolagajcle;
    }

    /**
     * Generated from protobuf field <code>uint32 jnolagajcle = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setJnolagajcle($var)
    {
        GPBUtil::checkUint32($var);
        $this->jnolagajcle = $var;

        return $this;
    }

}
