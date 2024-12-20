<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ELDPCGFDLBB (2423)
 *
 * Generated from protobuf message <code>RelicAvatarRecommendScRsp</code>
 */
class RelicAvatarRecommendScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool gilcobajpon = 11;</code>
     */
    protected $gilcobajpon = false;
    /**
     * Generated from protobuf field <code>uint32 djlmajbojnb = 14;</code>
     */
    protected $djlmajbojnb = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 avatar_id_list = 4;</code>
     */
    private $avatar_id_list;
    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $gilcobajpon
     *     @type int $djlmajbojnb
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $avatar_id_list
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool gilcobajpon = 11;</code>
     * @return bool
     */
    public function getGilcobajpon()
    {
        return $this->gilcobajpon;
    }

    /**
     * Generated from protobuf field <code>bool gilcobajpon = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setGilcobajpon($var)
    {
        GPBUtil::checkBool($var);
        $this->gilcobajpon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 djlmajbojnb = 14;</code>
     * @return int
     */
    public function getDjlmajbojnb()
    {
        return $this->djlmajbojnb;
    }

    /**
     * Generated from protobuf field <code>uint32 djlmajbojnb = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setDjlmajbojnb($var)
    {
        GPBUtil::checkUint32($var);
        $this->djlmajbojnb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 avatar_id_list = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarIdList()
    {
        return $this->avatar_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 avatar_id_list = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->avatar_id_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 7;</code>
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

