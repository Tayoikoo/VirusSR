<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KDBCMOMGEHN (2955)
 *
 * Generated from protobuf message <code>SetForbidOtherApplyFriendScRsp</code>
 */
class SetForbidOtherApplyFriendScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>bool cnimhjpfadc = 7;</code>
     */
    protected $cnimhjpfadc = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type bool $cnimhjpfadc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
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
     * Generated from protobuf field <code>bool cnimhjpfadc = 7;</code>
     * @return bool
     */
    public function getCnimhjpfadc()
    {
        return $this->cnimhjpfadc;
    }

    /**
     * Generated from protobuf field <code>bool cnimhjpfadc = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setCnimhjpfadc($var)
    {
        GPBUtil::checkBool($var);
        $this->cnimhjpfadc = $var;

        return $this;
    }

}

