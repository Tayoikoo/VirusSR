<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FFGFBPBCIAM (2695)
 *
 * Generated from protobuf message <code>GetLoginActivityScRsp</code>
 */
class GetLoginActivityScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .LoginActivityData login_activity_list = 4;</code>
     */
    private $login_activity_list;
    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\LoginActivityData>|\Google\Protobuf\Internal\RepeatedField $login_activity_list
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .LoginActivityData login_activity_list = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLoginActivityList()
    {
        return $this->login_activity_list;
    }

    /**
     * Generated from protobuf field <code>repeated .LoginActivityData login_activity_list = 4;</code>
     * @param array<\LoginActivityData>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLoginActivityList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \LoginActivityData::class);
        $this->login_activity_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

