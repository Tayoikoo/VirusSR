<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DDGMLBMCEFP</code>
 */
class DDGMLBMCEFP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 client_res_version = 1;</code>
     */
    protected $client_res_version = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $client_res_version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 client_res_version = 1;</code>
     * @return int
     */
    public function getClientResVersion()
    {
        return $this->client_res_version;
    }

    /**
     * Generated from protobuf field <code>uint32 client_res_version = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setClientResVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->client_res_version = $var;

        return $this;
    }

}

