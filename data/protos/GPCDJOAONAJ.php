<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GPCDJOAONAJ</code>
 */
class GPCDJOAONAJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 miracle_id = 11;</code>
     */
    protected $miracle_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $miracle_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 miracle_id = 11;</code>
     * @return int
     */
    public function getMiracleId()
    {
        return $this->miracle_id;
    }

    /**
     * Generated from protobuf field <code>uint32 miracle_id = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setMiracleId($var)
    {
        GPBUtil::checkUint32($var);
        $this->miracle_id = $var;

        return $this;
    }

}

