<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FOCAOADICPH</code>
 */
class FOCAOADICPH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 AHCAOJCBIOM = 8;</code>
     */
    protected $AHCAOJCBIOM = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $AHCAOJCBIOM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 AHCAOJCBIOM = 8;</code>
     * @return int
     */
    public function getAHCAOJCBIOM()
    {
        return $this->AHCAOJCBIOM;
    }

    /**
     * Generated from protobuf field <code>uint32 AHCAOJCBIOM = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setAHCAOJCBIOM($var)
    {
        GPBUtil::checkUint32($var);
        $this->AHCAOJCBIOM = $var;

        return $this;
    }

}

