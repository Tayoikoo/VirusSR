<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CJAKIKCLIOO (2913)
 *
 * Generated from protobuf message <code>GetAssistHistoryScRsp</code>
 */
class GetAssistHistoryScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 today_use_uid_list = 14;</code>
     */
    private $today_use_uid_list;
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 ifclfpgcked = 10;</code>
     */
    protected $ifclfpgcked = 0;
    /**
     * Generated from protobuf field <code>uint32 meghkdmaoeb = 3;</code>
     */
    protected $meghkdmaoeb = 0;
    /**
     * Generated from protobuf field <code>uint32 kefkaopkjbn = 12;</code>
     */
    protected $kefkaopkjbn = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $today_use_uid_list
     *     @type int $retcode
     *     @type int $ifclfpgcked
     *     @type int $meghkdmaoeb
     *     @type int $kefkaopkjbn
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 today_use_uid_list = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTodayUseUidList()
    {
        return $this->today_use_uid_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 today_use_uid_list = 14;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTodayUseUidList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->today_use_uid_list = $arr;

        return $this;
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
     * Generated from protobuf field <code>uint32 ifclfpgcked = 10;</code>
     * @return int
     */
    public function getIfclfpgcked()
    {
        return $this->ifclfpgcked;
    }

    /**
     * Generated from protobuf field <code>uint32 ifclfpgcked = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setIfclfpgcked($var)
    {
        GPBUtil::checkUint32($var);
        $this->ifclfpgcked = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 meghkdmaoeb = 3;</code>
     * @return int
     */
    public function getMeghkdmaoeb()
    {
        return $this->meghkdmaoeb;
    }

    /**
     * Generated from protobuf field <code>uint32 meghkdmaoeb = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMeghkdmaoeb($var)
    {
        GPBUtil::checkUint32($var);
        $this->meghkdmaoeb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 kefkaopkjbn = 12;</code>
     * @return int
     */
    public function getKefkaopkjbn()
    {
        return $this->kefkaopkjbn;
    }

    /**
     * Generated from protobuf field <code>uint32 kefkaopkjbn = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setKefkaopkjbn($var)
    {
        GPBUtil::checkUint32($var);
        $this->kefkaopkjbn = $var;

        return $this;
    }

}

