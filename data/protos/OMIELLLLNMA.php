<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OMIELLLLNMA</code>
 */
class OMIELLLLNMA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ClientObjDownloadData data = 4;</code>
     */
    protected $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ClientObjDownloadData $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ClientObjDownloadData data = 4;</code>
     * @return \ClientObjDownloadData|null
     */
    public function getData()
    {
        return $this->data;
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * Generated from protobuf field <code>.ClientObjDownloadData data = 4;</code>
     * @param \ClientObjDownloadData $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \ClientObjDownloadData::class);
        $this->data = $var;

        return $this;
    }

}

