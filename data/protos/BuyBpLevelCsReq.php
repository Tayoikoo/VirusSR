<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MBJHHBODFPN (3028)
 *
 * Generated from protobuf message <code>BuyBpLevelCsReq</code>
 */
class BuyBpLevelCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 llileghkigk = 15;</code>
     */
    protected $llileghkigk = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $llileghkigk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 llileghkigk = 15;</code>
     * @return int
     */
    public function getLlileghkigk()
    {
        return $this->llileghkigk;
    }

    /**
     * Generated from protobuf field <code>uint32 llileghkigk = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setLlileghkigk($var)
    {
        GPBUtil::checkUint32($var);
        $this->llileghkigk = $var;

        return $this;
    }

}

