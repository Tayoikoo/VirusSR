<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FOPHFIAHBOF (7243)
 *
 * Generated from protobuf message <code>ClockParkStartScriptScRsp</code>
 */
class ClockParkStartScriptScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 script_id = 4;</code>
     */
    protected $script_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $script_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 script_id = 4;</code>
     * @return int
     */
    public function getScriptId()
    {
        return $this->script_id;
    }

    /**
     * Generated from protobuf field <code>uint32 script_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setScriptId($var)
    {
        GPBUtil::checkUint32($var);
        $this->script_id = $var;

        return $this;
    }

}
