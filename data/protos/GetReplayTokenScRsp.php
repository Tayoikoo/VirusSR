<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JEBCNIBMLMM (3595)
 *
 * Generated from protobuf message <code>GetReplayTokenScRsp</code>
 */
class GetReplayTokenScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ReplayType replay_type = 1;</code>
     */
    protected $replay_type = 0;
    /**
     * Generated from protobuf field <code>uint32 stage_id = 14;</code>
     */
    protected $stage_id = 0;
    /**
     * Generated from protobuf field <code>string token = 4;</code>
     */
    protected $token = '';
    /**
     * Generated from protobuf field <code>string jpcpdnplbom = 6;</code>
     */
    protected $jpcpdnplbom = '';
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $replay_type
     *     @type int $stage_id
     *     @type string $token
     *     @type string $jpcpdnplbom
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ReplayType replay_type = 1;</code>
     * @return int
     */
    public function getReplayType()
    {
        return $this->replay_type;
    }

    /**
     * Generated from protobuf field <code>.ReplayType replay_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setReplayType($var)
    {
        GPBUtil::checkEnum($var, \ReplayType::class);
        $this->replay_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 stage_id = 14;</code>
     * @return int
     */
    public function getStageId()
    {
        return $this->stage_id;
    }

    /**
     * Generated from protobuf field <code>uint32 stage_id = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setStageId($var)
    {
        GPBUtil::checkUint32($var);
        $this->stage_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token = 4;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string jpcpdnplbom = 6;</code>
     * @return string
     */
    public function getJpcpdnplbom()
    {
        return $this->jpcpdnplbom;
    }

    /**
     * Generated from protobuf field <code>string jpcpdnplbom = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setJpcpdnplbom($var)
    {
        GPBUtil::checkString($var, True);
        $this->jpcpdnplbom = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
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

