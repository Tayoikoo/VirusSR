<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IPJAPHFOIDA</code>
 */
class IPJAPHFOIDA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 OKDKFBPHMHO = 9;</code>
     */
    protected $OKDKFBPHMHO = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $OKDKFBPHMHO
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 OKDKFBPHMHO = 9;</code>
     * @return int
     */
    public function getOKDKFBPHMHO()
    {
        return $this->OKDKFBPHMHO;
    }

    /**
     * Generated from protobuf field <code>uint32 OKDKFBPHMHO = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setOKDKFBPHMHO($var)
    {
        GPBUtil::checkUint32($var);
        $this->OKDKFBPHMHO = $var;

        return $this;
    }

}

