<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LOJNAEKIENP</code>
 */
class LOJNAEKIENP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 fjifnmbdjem = 10;</code>
     */
    protected $fjifnmbdjem = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $fjifnmbdjem
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 fjifnmbdjem = 10;</code>
     * @return int
     */
    public function getFjifnmbdjem()
    {
        return $this->fjifnmbdjem;
    }

    /**
     * Generated from protobuf field <code>uint32 fjifnmbdjem = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setFjifnmbdjem($var)
    {
        GPBUtil::checkUint32($var);
        $this->fjifnmbdjem = $var;

        return $this;
    }

}

