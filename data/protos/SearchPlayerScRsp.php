<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AKEODLPIKJL (2948)
 *
 * Generated from protobuf message <code>SearchPlayerScRsp</code>
 */
class SearchPlayerScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .PlayerSimpleInfo simple_info_list = 12;</code>
     */
    private $simple_info_list;
    /**
     * Generated from protobuf field <code>repeated uint32 result_uid_list = 10;</code>
     */
    private $result_uid_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type array<\PlayerSimpleInfo>|\Google\Protobuf\Internal\RepeatedField $simple_info_list
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $result_uid_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
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
     * Generated from protobuf field <code>repeated .PlayerSimpleInfo simple_info_list = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSimpleInfoList()
    {
        return $this->simple_info_list;
    }

    /**
     * Generated from protobuf field <code>repeated .PlayerSimpleInfo simple_info_list = 12;</code>
     * @param array<\PlayerSimpleInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSimpleInfoList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \PlayerSimpleInfo::class);
        $this->simple_info_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 result_uid_list = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResultUidList()
    {
        return $this->result_uid_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 result_uid_list = 10;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResultUidList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->result_uid_list = $arr;

        return $this;
    }

}

