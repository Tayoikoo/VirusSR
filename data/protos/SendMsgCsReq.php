<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JPHGMIGJGPO (3936)
 *
 * Generated from protobuf message <code>SendMsgCsReq</code>
 */
class SendMsgCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ChatType chat_type = 13;</code>
     */
    protected $chat_type = 0;
    /**
     * Generated from protobuf field <code>.MsgType message_type = 6;</code>
     */
    protected $message_type = 0;
    /**
     * Generated from protobuf field <code>uint32 extra_id = 10;</code>
     */
    protected $extra_id = 0;
    /**
     * Generated from protobuf field <code>.CDGPKIJBFDK lekpnlapced = 2;</code>
     */
    protected $lekpnlapced = null;
    /**
     * Generated from protobuf field <code>repeated uint32 target_list = 8;</code>
     */
    private $target_list;
    /**
     * Generated from protobuf field <code>string message_text = 11;</code>
     */
    protected $message_text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $chat_type
     *     @type int $message_type
     *     @type int $extra_id
     *     @type \CDGPKIJBFDK $lekpnlapced
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $target_list
     *     @type string $message_text
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ChatType chat_type = 13;</code>
     * @return int
     */
    public function getChatType()
    {
        return $this->chat_type;
    }

    /**
     * Generated from protobuf field <code>.ChatType chat_type = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setChatType($var)
    {
        GPBUtil::checkEnum($var, \ChatType::class);
        $this->chat_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MsgType message_type = 6;</code>
     * @return int
     */
    public function getMessageType()
    {
        return $this->message_type;
    }

    /**
     * Generated from protobuf field <code>.MsgType message_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMessageType($var)
    {
        GPBUtil::checkEnum($var, \MsgType::class);
        $this->message_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 extra_id = 10;</code>
     * @return int
     */
    public function getExtraId()
    {
        return $this->extra_id;
    }

    /**
     * Generated from protobuf field <code>uint32 extra_id = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setExtraId($var)
    {
        GPBUtil::checkUint32($var);
        $this->extra_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CDGPKIJBFDK lekpnlapced = 2;</code>
     * @return \CDGPKIJBFDK|null
     */
    public function getLekpnlapced()
    {
        return $this->lekpnlapced;
    }

    public function hasLekpnlapced()
    {
        return isset($this->lekpnlapced);
    }

    public function clearLekpnlapced()
    {
        unset($this->lekpnlapced);
    }

    /**
     * Generated from protobuf field <code>.CDGPKIJBFDK lekpnlapced = 2;</code>
     * @param \CDGPKIJBFDK $var
     * @return $this
     */
    public function setLekpnlapced($var)
    {
        GPBUtil::checkMessage($var, \CDGPKIJBFDK::class);
        $this->lekpnlapced = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 target_list = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetList()
    {
        return $this->target_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 target_list = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargetList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->target_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message_text = 11;</code>
     * @return string
     */
    public function getMessageText()
    {
        return $this->message_text;
    }

    /**
     * Generated from protobuf field <code>string message_text = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageText($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_text = $var;

        return $this;
    }

}
