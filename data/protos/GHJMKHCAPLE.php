<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GHJMKHCAPLE</code>
 */
class GHJMKHCAPLE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 kanfgjbjaec = 7;</code>
     */
    protected $kanfgjbjaec = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kanfgjbjaec
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 kanfgjbjaec = 7;</code>
     * @return int
     */
    public function getKanfgjbjaec()
    {
        return $this->kanfgjbjaec;
    }

    /**
     * Generated from protobuf field <code>uint32 kanfgjbjaec = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setKanfgjbjaec($var)
    {
        GPBUtil::checkUint32($var);
        $this->kanfgjbjaec = $var;

        return $this;
    }

}

