<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EGMLFCLDODI</code>
 */
class EGMLFCLDODI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     */
    protected $level = 0;
    /**
     * Generated from protobuf field <code>bool ICDOHKPKMAH = 12;</code>
     */
    protected $ICDOHKPKMAH = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $level
     *     @type bool $ICDOHKPKMAH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ICDOHKPKMAH = 12;</code>
     * @return bool
     */
    public function getICDOHKPKMAH()
    {
        return $this->ICDOHKPKMAH;
    }

    /**
     * Generated from protobuf field <code>bool ICDOHKPKMAH = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setICDOHKPKMAH($var)
    {
        GPBUtil::checkBool($var);
        $this->ICDOHKPKMAH = $var;

        return $this;
    }

}

