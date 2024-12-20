<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GLMAJHBLEJN (2846)
 *
 * Generated from protobuf message <code>SetAssistAvatarScRsp</code>
 */
class SetAssistAvatarScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 avatar_id_list = 8;</code>
     */
    private $avatar_id_list;
    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 avatar_id = 11;</code>
     */
    protected $avatar_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $avatar_id_list
     *     @type int $retcode
     *     @type int $avatar_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 avatar_id_list = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarIdList()
    {
        return $this->avatar_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 avatar_id_list = 8;</code>
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
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
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
     * Generated from protobuf field <code>uint32 avatar_id = 11;</code>
     * @return int
     */
    public function getAvatarId()
    {
        return $this->avatar_id;
    }

    /**
     * Generated from protobuf field <code>uint32 avatar_id = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarId($var)
    {
        GPBUtil::checkUint32($var);
        $this->avatar_id = $var;

        return $this;
    }

}

