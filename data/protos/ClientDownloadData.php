<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ClientDownloadData</code>
 */
class ClientDownloadData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 version = 1;</code>
     */
    protected $version = 0;
    /**
     * Generated from protobuf field <code>int64 time = 2;</code>
     */
    protected $time = 0;
    /**
     *uint32 ghkpbpdfijh = 4;
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $version
     *     @type int|string $time
     *     @type string $data
     *          uint32 ghkpbpdfijh = 4;
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 version = 1;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>uint32 version = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 time = 2;</code>
     * @return int|string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Generated from protobuf field <code>int64 time = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->time = $var;

        return $this;
    }

    /**
     *uint32 ghkpbpdfijh = 4;
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     *uint32 ghkpbpdfijh = 4;
     *
     * Generated from protobuf field <code>bytes data = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

