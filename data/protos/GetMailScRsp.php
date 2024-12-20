<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetMailScRsp (895)
 *
 * Generated from protobuf message <code>GetMailScRsp</code>
 */
class GetMailScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool IsEnd = 14;</code>
     */
    protected $IsEnd = false;
    /**
     * Generated from protobuf field <code>uint32 Start = 1;</code>
     */
    protected $Start = 0;
    /**
     * Generated from protobuf field <code>repeated .ClientMail NoticeMailList = 10;</code>
     */
    private $NoticeMailList;
    /**
     * Generated from protobuf field <code>repeated .ClientMail MailList = 2;</code>
     */
    private $MailList;
    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 TotalNum = 9;</code>
     */
    protected $TotalNum = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $IsEnd
     *     @type int $Start
     *     @type array<\ClientMail>|\Google\Protobuf\Internal\RepeatedField $NoticeMailList
     *     @type array<\ClientMail>|\Google\Protobuf\Internal\RepeatedField $MailList
     *     @type int $retcode
     *     @type int $TotalNum
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool IsEnd = 14;</code>
     * @return bool
     */
    public function getIsEnd()
    {
        return $this->IsEnd;
    }

    /**
     * Generated from protobuf field <code>bool IsEnd = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsEnd($var)
    {
        GPBUtil::checkBool($var);
        $this->IsEnd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Start = 1;</code>
     * @return int
     */
    public function getStart()
    {
        return $this->Start;
    }

    /**
     * Generated from protobuf field <code>uint32 Start = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkUint32($var);
        $this->Start = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ClientMail NoticeMailList = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNoticeMailList()
    {
        return $this->NoticeMailList;
    }

    /**
     * Generated from protobuf field <code>repeated .ClientMail NoticeMailList = 10;</code>
     * @param array<\ClientMail>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNoticeMailList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ClientMail::class);
        $this->NoticeMailList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .ClientMail MailList = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMailList()
    {
        return $this->MailList;
    }

    /**
     * Generated from protobuf field <code>repeated .ClientMail MailList = 2;</code>
     * @param array<\ClientMail>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMailList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ClientMail::class);
        $this->MailList = $arr;

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

    /**
     * Generated from protobuf field <code>uint32 TotalNum = 9;</code>
     * @return int
     */
    public function getTotalNum()
    {
        return $this->TotalNum;
    }

    /**
     * Generated from protobuf field <code>uint32 TotalNum = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalNum($var)
    {
        GPBUtil::checkUint32($var);
        $this->TotalNum = $var;

        return $this;
    }

}

