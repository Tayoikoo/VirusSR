<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CNHOAHKEIHD (4436)
 *
 * Generated from protobuf message <code>TreasureDungeonDataScNotify</code>
 */
class TreasureDungeonDataScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.GOPDMKGLFGO jbhmijinepf = 4;</code>
     */
    protected $jbhmijinepf = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GOPDMKGLFGO $jbhmijinepf
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.GOPDMKGLFGO jbhmijinepf = 4;</code>
     * @return \GOPDMKGLFGO|null
     */
    public function getJbhmijinepf()
    {
        return $this->jbhmijinepf;
    }

    public function hasJbhmijinepf()
    {
        return isset($this->jbhmijinepf);
    }

    public function clearJbhmijinepf()
    {
        unset($this->jbhmijinepf);
    }

    /**
     * Generated from protobuf field <code>.GOPDMKGLFGO jbhmijinepf = 4;</code>
     * @param \GOPDMKGLFGO $var
     * @return $this
     */
    public function setJbhmijinepf($var)
    {
        GPBUtil::checkMessage($var, \GOPDMKGLFGO::class);
        $this->jbhmijinepf = $var;

        return $this;
    }

}

