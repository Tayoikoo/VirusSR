<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FKBKHFGKEKL (2743)
 *
 * Generated from protobuf message <code>GetMissionMessageInfoScRsp</code>
 */
class GetMissionMessageInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<uint32, uint32> kecoljabafm = 4;</code>
     */
    private $kecoljabafm;
    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $kecoljabafm
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> kecoljabafm = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getKecoljabafm()
    {
        return $this->kecoljabafm;
    }

    /**
     * Generated from protobuf field <code>map<uint32, uint32> kecoljabafm = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setKecoljabafm($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->kecoljabafm = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
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

