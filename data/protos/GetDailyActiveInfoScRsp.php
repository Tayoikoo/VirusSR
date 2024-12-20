<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FAMIKBPHPCD (3327)
 *
 * Generated from protobuf message <code>GetDailyActiveInfoScRsp</code>
 */
class GetDailyActiveInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 hpidkaddamd = 5;</code>
     */
    protected $hpidkaddamd = 0;
    /**
     * Generated from protobuf field <code>repeated .DailyActivityInfo gahgdklgncn = 10;</code>
     */
    private $gahgdklgncn;
    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 bjgfkfdlgjp = 2;</code>
     */
    private $bjgfkfdlgjp;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $hpidkaddamd
     *     @type array<\DailyActivityInfo>|\Google\Protobuf\Internal\RepeatedField $gahgdklgncn
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $bjgfkfdlgjp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 hpidkaddamd = 5;</code>
     * @return int
     */
    public function getHpidkaddamd()
    {
        return $this->hpidkaddamd;
    }

    /**
     * Generated from protobuf field <code>uint32 hpidkaddamd = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setHpidkaddamd($var)
    {
        GPBUtil::checkUint32($var);
        $this->hpidkaddamd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .DailyActivityInfo gahgdklgncn = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGahgdklgncn()
    {
        return $this->gahgdklgncn;
    }

    /**
     * Generated from protobuf field <code>repeated .DailyActivityInfo gahgdklgncn = 10;</code>
     * @param array<\DailyActivityInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGahgdklgncn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \DailyActivityInfo::class);
        $this->gahgdklgncn = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
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
     * Generated from protobuf field <code>repeated uint32 bjgfkfdlgjp = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBjgfkfdlgjp()
    {
        return $this->bjgfkfdlgjp;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 bjgfkfdlgjp = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBjgfkfdlgjp($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->bjgfkfdlgjp = $arr;

        return $this;
    }

}

