<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CFCNEAJGACD (7210)
 *
 * Generated from protobuf message <code>ClockParkQuitScriptCsReq</code>
 */
class ClockParkQuitScriptCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool hjcoaohmohk = 2;</code>
     */
    protected $hjcoaohmohk = false;
    /**
     * Generated from protobuf field <code>uint32 script_id = 5;</code>
     */
    protected $script_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $hjcoaohmohk
     *     @type int $script_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool hjcoaohmohk = 2;</code>
     * @return bool
     */
    public function getHjcoaohmohk()
    {
        return $this->hjcoaohmohk;
    }

    /**
     * Generated from protobuf field <code>bool hjcoaohmohk = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setHjcoaohmohk($var)
    {
        GPBUtil::checkBool($var);
        $this->hjcoaohmohk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 script_id = 5;</code>
     * @return int
     */
    public function getScriptId()
    {
        return $this->script_id;
    }

    /**
     * Generated from protobuf field <code>uint32 script_id = 5;</code>
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

