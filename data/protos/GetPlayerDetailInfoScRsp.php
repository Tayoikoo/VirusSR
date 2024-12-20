<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LJFPIKEDMCC (2927)
 *
 * Generated from protobuf message <code>GetPlayerDetailInfoScRsp</code>
 */
class GetPlayerDetailInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.PlayerDetailInfo detail_info = 10;</code>
     */
    protected $detail_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \PlayerDetailInfo $detail_info
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
     * Generated from protobuf field <code>.PlayerDetailInfo detail_info = 10;</code>
     * @return \PlayerDetailInfo|null
     */
    public function getDetailInfo()
    {
        return $this->detail_info;
    }

    public function hasDetailInfo()
    {
        return isset($this->detail_info);
    }

    public function clearDetailInfo()
    {
        unset($this->detail_info);
    }

    /**
     * Generated from protobuf field <code>.PlayerDetailInfo detail_info = 10;</code>
     * @param \PlayerDetailInfo $var
     * @return $this
     */
    public function setDetailInfo($var)
    {
        GPBUtil::checkMessage($var, \PlayerDetailInfo::class);
        $this->detail_info = $var;

        return $this;
    }

}
