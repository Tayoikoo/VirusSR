<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FOHPEOLHHME</code>
 */
class FOHPEOLHHME extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.KMFBLAGAOEE njfjlpnocaf = 3;</code>
     */
    protected $njfjlpnocaf = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \KMFBLAGAOEE $njfjlpnocaf
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.KMFBLAGAOEE njfjlpnocaf = 3;</code>
     * @return \KMFBLAGAOEE|null
     */
    public function getNjfjlpnocaf()
    {
        return $this->njfjlpnocaf;
    }

    public function hasNjfjlpnocaf()
    {
        return isset($this->njfjlpnocaf);
    }

    public function clearNjfjlpnocaf()
    {
        unset($this->njfjlpnocaf);
    }

    /**
     * Generated from protobuf field <code>.KMFBLAGAOEE njfjlpnocaf = 3;</code>
     * @param \KMFBLAGAOEE $var
     * @return $this
     */
    public function setNjfjlpnocaf($var)
    {
        GPBUtil::checkMessage($var, \KMFBLAGAOEE::class);
        $this->njfjlpnocaf = $var;

        return $this;
    }

}
