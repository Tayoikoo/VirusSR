<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CKFCKACNHBL</code>
 */
class CKFCKACNHBL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.OMNIKCCCOPN lgmepmnlnfj = 1;</code>
     */
    protected $lgmepmnlnfj = 0;
    /**
     * Generated from protobuf field <code>uint32 level = 15;</code>
     */
    protected $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $lgmepmnlnfj
     *     @type int $level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.OMNIKCCCOPN lgmepmnlnfj = 1;</code>
     * @return int
     */
    public function getLgmepmnlnfj()
    {
        return $this->lgmepmnlnfj;
    }

    /**
     * Generated from protobuf field <code>.OMNIKCCCOPN lgmepmnlnfj = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLgmepmnlnfj($var)
    {
        GPBUtil::checkEnum($var, \OMNIKCCCOPN::class);
        $this->lgmepmnlnfj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 15;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>uint32 level = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->level = $var;

        return $this;
    }

}

