<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GIHFGGMCHKA</code>
 */
class GIHFGGMCHKA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 nmkmfbocbfl = 2;</code>
     */
    protected $nmkmfbocbfl = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $nmkmfbocbfl
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 nmkmfbocbfl = 2;</code>
     * @return int
     */
    public function getNmkmfbocbfl()
    {
        return $this->nmkmfbocbfl;
    }

    /**
     * Generated from protobuf field <code>int32 nmkmfbocbfl = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNmkmfbocbfl($var)
    {
        GPBUtil::checkInt32($var);
        $this->nmkmfbocbfl = $var;

        return $this;
    }

}

