<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HCMPOEKADPP (746)
 *
 * Generated from protobuf message <code>GetLineupAvatarDataScRsp</code>
 */
class GetLineupAvatarDataScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .LineupAvatarData avatar_data_list = 7;</code>
     */
    private $avatar_data_list;
    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\LineupAvatarData>|\Google\Protobuf\Internal\RepeatedField $avatar_data_list
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .LineupAvatarData avatar_data_list = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarDataList()
    {
        return $this->avatar_data_list;
    }

    /**
     * Generated from protobuf field <code>repeated .LineupAvatarData avatar_data_list = 7;</code>
     * @param array<\LineupAvatarData>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarDataList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \LineupAvatarData::class);
        $this->avatar_data_list = $arr;

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

}

