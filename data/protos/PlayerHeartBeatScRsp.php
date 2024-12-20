<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DFCFNJFOENL (3)
 *
 * Generated from protobuf message <code>PlayerHeartBeatScRsp</code>
 */
class PlayerHeartBeatScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 server_time_ms = 1;</code>
     */
    protected $server_time_ms = 0;
    /**
     * Generated from protobuf field <code>uint64 client_time_ms = 8;</code>
     */
    protected $client_time_ms = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.ClientDownloadData download_data = 12;</code>
     */
    protected $download_data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $server_time_ms
     *     @type int|string $client_time_ms
     *     @type int $retcode
     *     @type \ClientDownloadData $download_data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 server_time_ms = 1;</code>
     * @return int|string
     */
    public function getServerTimeMs()
    {
        return $this->server_time_ms;
    }

    /**
     * Generated from protobuf field <code>uint64 server_time_ms = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setServerTimeMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->server_time_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 client_time_ms = 8;</code>
     * @return int|string
     */
    public function getClientTimeMs()
    {
        return $this->client_time_ms;
    }

    /**
     * Generated from protobuf field <code>uint64 client_time_ms = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setClientTimeMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->client_time_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ClientDownloadData download_data = 12;</code>
     * @return \ClientDownloadData|null
     */
    public function getDownloadData()
    {
        return $this->download_data;
    }

    public function hasDownloadData()
    {
        return isset($this->download_data);
    }

    public function clearDownloadData()
    {
        unset($this->download_data);
    }

    /**
     * Generated from protobuf field <code>.ClientDownloadData download_data = 12;</code>
     * @param \ClientDownloadData $var
     * @return $this
     */
    public function setDownloadData($var)
    {
        GPBUtil::checkMessage($var, \ClientDownloadData::class);
        $this->download_data = $var;

        return $this;
    }

}

