<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JGONDMCCMOK</code>
 */
class JGONDMCCMOK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 apckciaaiee = 12;</code>
     */
    protected $apckciaaiee = 0;
    /**
     * Generated from protobuf field <code>uint32 num = 1;</code>
     */
    protected $num = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $apckciaaiee
     *     @type int $num
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 apckciaaiee = 12;</code>
     * @return int
     */
    public function getApckciaaiee()
    {
        return $this->apckciaaiee;
    }

    /**
     * Generated from protobuf field <code>uint32 apckciaaiee = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setApckciaaiee($var)
    {
        GPBUtil::checkUint32($var);
        $this->apckciaaiee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 num = 1;</code>
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Generated from protobuf field <code>uint32 num = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNum($var)
    {
        GPBUtil::checkUint32($var);
        $this->num = $var;

        return $this;
    }

}

