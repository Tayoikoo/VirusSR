<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TakeMailAttachmentScRsp (874)
 *
 * Generated from protobuf message <code>TakeMailAttachmentScRsp</code>
 */
class TakeMailAttachmentScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .DNBENAJMAMD FailMailList = 12;</code>
     */
    private $FailMailList;
    /**
     * Generated from protobuf field <code>.ItemList Attachment = 14;</code>
     */
    protected $Attachment = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 SuccMailIdList = 7;</code>
     */
    private $SuccMailIdList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\DNBENAJMAMD>|\Google\Protobuf\Internal\RepeatedField $FailMailList
     *     @type \ItemList $Attachment
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $SuccMailIdList
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .DNBENAJMAMD FailMailList = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFailMailList()
    {
        return $this->FailMailList;
    }

    /**
     * Generated from protobuf field <code>repeated .DNBENAJMAMD FailMailList = 12;</code>
     * @param array<\DNBENAJMAMD>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFailMailList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \DNBENAJMAMD::class);
        $this->FailMailList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList Attachment = 14;</code>
     * @return \ItemList|null
     */
    public function getAttachment()
    {
        return $this->Attachment;
    }

    public function hasAttachment()
    {
        return isset($this->Attachment);
    }

    public function clearAttachment()
    {
        unset($this->Attachment);
    }

    /**
     * Generated from protobuf field <code>.ItemList Attachment = 14;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setAttachment($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->Attachment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
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
     * Generated from protobuf field <code>repeated uint32 SuccMailIdList = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSuccMailIdList()
    {
        return $this->SuccMailIdList;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 SuccMailIdList = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSuccMailIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->SuccMailIdList = $arr;

        return $this;
    }

}
