<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GlobalDispatchData</code>
 */
class GlobalDispatchData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     */
    protected $msg = '';
    /**
     * Generated from protobuf field <code>string top_sever_region_name = 3;</code>
     */
    protected $top_sever_region_name = '';
    /**
     * Generated from protobuf field <code>repeated .ServerData server_list = 4;</code>
     */
    private $server_list;
    /**
     * Generated from protobuf field <code>string stop_desc = 5;</code>
     */
    protected $stop_desc = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type string $msg
     *     @type string $top_sever_region_name
     *     @type array<\ServerData>|\Google\Protobuf\Internal\RepeatedField $server_list
     *     @type string $stop_desc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
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
     * Generated from protobuf field <code>string msg = 2;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string top_sever_region_name = 3;</code>
     * @return string
     */
    public function getTopSeverRegionName()
    {
        return $this->top_sever_region_name;
    }

    /**
     * Generated from protobuf field <code>string top_sever_region_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTopSeverRegionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->top_sever_region_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ServerData server_list = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServerList()
    {
        return $this->server_list;
    }

    /**
     * Generated from protobuf field <code>repeated .ServerData server_list = 4;</code>
     * @param array<\ServerData>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServerList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ServerData::class);
        $this->server_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string stop_desc = 5;</code>
     * @return string
     */
    public function getStopDesc()
    {
        return $this->stop_desc;
    }

    /**
     * Generated from protobuf field <code>string stop_desc = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStopDesc($var)
    {
        GPBUtil::checkString($var, True);
        $this->stop_desc = $var;

        return $this;
    }

}

