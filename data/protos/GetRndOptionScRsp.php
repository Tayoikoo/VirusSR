<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FPJFKDDHGPP (3495)
 *
 * Generated from protobuf message <code>GetRndOptionScRsp</code>
 */
class GetRndOptionScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 kmmkekkbcmf = 7;</code>
     */
    private $kmmkekkbcmf;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $kmmkekkbcmf
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
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
     * Generated from protobuf field <code>repeated uint32 kmmkekkbcmf = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKmmkekkbcmf()
    {
        return $this->kmmkekkbcmf;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 kmmkekkbcmf = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKmmkekkbcmf($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->kmmkekkbcmf = $arr;

        return $this;
    }

}

