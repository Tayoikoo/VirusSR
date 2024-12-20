<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ServerData</code>
 */
class ServerData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string title = 2;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>string dispatch_url = 3;</code>
     */
    protected $dispatch_url = '';
    /**
     * Generated from protobuf field <code>string env_type = 4;</code>
     */
    protected $env_type = '';
    /**
     * Generated from protobuf field <code>string display_name = 5;</code>
     */
    protected $display_name = '';
    /**
     * Generated from protobuf field <code>string msg = 6;</code>
     */
    protected $msg = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $title
     *     @type string $dispatch_url
     *     @type string $env_type
     *     @type string $display_name
     *     @type string $msg
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string dispatch_url = 3;</code>
     * @return string
     */
    public function getDispatchUrl()
    {
        return $this->dispatch_url;
    }

    /**
     * Generated from protobuf field <code>string dispatch_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDispatchUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->dispatch_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string env_type = 4;</code>
     * @return string
     */
    public function getEnvType()
    {
        return $this->env_type;
    }

    /**
     * Generated from protobuf field <code>string env_type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEnvType($var)
    {
        GPBUtil::checkString($var, True);
        $this->env_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string display_name = 5;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Generated from protobuf field <code>string display_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string msg = 6;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Generated from protobuf field <code>string msg = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;

        return $this;
    }

}
