<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MPHHLLEEJJB (39)
 *
 * Generated from protobuf message <code>ClientDownloadDataScNotify</code>
 */
class ClientDownloadDataScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ClientDownloadData download_data = 2;</code>
     */
    protected $download_data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ClientDownloadData $download_data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ClientDownloadData download_data = 2;</code>
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
     * Generated from protobuf field <code>.ClientDownloadData download_data = 2;</code>
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

