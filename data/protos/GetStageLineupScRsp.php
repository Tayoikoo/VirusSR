<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OPAAEFHBDIJ (795)
 *
 * Generated from protobuf message <code>GetStageLineupScRsp</code>
 */
class GetStageLineupScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .LLBNCJKKLOA epfhooeidam = 10;</code>
     */
    private $epfhooeidam;
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\LLBNCJKKLOA>|\Google\Protobuf\Internal\RepeatedField $epfhooeidam
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .LLBNCJKKLOA epfhooeidam = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEpfhooeidam()
    {
        return $this->epfhooeidam;
    }

    /**
     * Generated from protobuf field <code>repeated .LLBNCJKKLOA epfhooeidam = 10;</code>
     * @param array<\LLBNCJKKLOA>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEpfhooeidam($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \LLBNCJKKLOA::class);
        $this->epfhooeidam = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
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

