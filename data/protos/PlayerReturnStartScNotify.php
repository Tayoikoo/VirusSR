<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DNODHEHDFJM (4536)
 *
 * Generated from protobuf message <code>PlayerReturnStartScNotify</code>
 */
class PlayerReturnStartScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 dbpkhhdjpml = 1;</code>
     */
    protected $dbpkhhdjpml = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $dbpkhhdjpml
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 dbpkhhdjpml = 1;</code>
     * @return int
     */
    public function getDbpkhhdjpml()
    {
        return $this->dbpkhhdjpml;
    }

    /**
     * Generated from protobuf field <code>uint32 dbpkhhdjpml = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDbpkhhdjpml($var)
    {
        GPBUtil::checkUint32($var);
        $this->dbpkhhdjpml = $var;

        return $this;
    }

}

