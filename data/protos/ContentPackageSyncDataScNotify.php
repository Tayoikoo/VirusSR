<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JAMCGCANOAH (7530)
 *
 * Generated from protobuf message <code>ContentPackageSyncDataScNotify</code>
 */
class ContentPackageSyncDataScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ContentPackageData data = 3;</code>
     */
    protected $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ContentPackageData $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ContentPackageData data = 3;</code>
     * @return \ContentPackageData|null
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
     * Generated from protobuf field <code>.ContentPackageData data = 3;</code>
     * @param \ContentPackageData $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \ContentPackageData::class);
        $this->data = $var;

        return $this;
    }

}
