<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FMCLFCGPBEN</code>
 */
class FMCLFCGPBEN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 NHAJHCENDDB = 3;</code>
     */
    protected $NHAJHCENDDB = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $NHAJHCENDDB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 NHAJHCENDDB = 3;</code>
     * @return int
     */
    public function getNHAJHCENDDB()
    {
        return $this->NHAJHCENDDB;
    }

    /**
     * Generated from protobuf field <code>uint32 NHAJHCENDDB = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNHAJHCENDDB($var)
    {
        GPBUtil::checkUint32($var);
        $this->NHAJHCENDDB = $var;

        return $this;
    }

}

