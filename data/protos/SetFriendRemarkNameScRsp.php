<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FAJLOFIDMOO (2990)
 *
 * Generated from protobuf message <code>SetFriendRemarkNameScRsp</code>
 */
class SetFriendRemarkNameScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string remark_name = 15;</code>
     */
    protected $remark_name = '';
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 uid = 13;</code>
     */
    protected $uid = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $remark_name
     *     @type int $retcode
     *     @type int $uid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string remark_name = 15;</code>
     * @return string
     */
    public function getRemarkName()
    {
        return $this->remark_name;
    }

    /**
     * Generated from protobuf field <code>string remark_name = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setRemarkName($var)
    {
        GPBUtil::checkString($var, True);
        $this->remark_name = $var;

        return $this;
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
     * Generated from protobuf field <code>uint32 uid = 13;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

}

