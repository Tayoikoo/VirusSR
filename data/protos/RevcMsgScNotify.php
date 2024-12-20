<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DIFKGIOIJFF (3984)
 *
 * Generated from protobuf message <code>RevcMsgScNotify</code>
 */
class RevcMsgScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     *?
     *
     * Generated from protobuf field <code>uint32 to_uid = 12;</code>
     */
    protected $to_uid = 0;
    /**
     * Generated from protobuf field <code>.CDGPKIJBFDK lekpnlapced = 11;</code>
     */
    protected $lekpnlapced = null;
    /**
     * Generated from protobuf field <code>uint32 extra_id = 15;</code>
     */
    protected $extra_id = 0;
    /**
     * Generated from protobuf field <code>.MsgType message_type = 8;</code>
     */
    protected $message_type = 0;
    /**
     * Generated from protobuf field <code>.ChatType chat_type = 2;</code>
     */
    protected $chat_type = 0;
    /**
     * Generated from protobuf field <code>string message_text = 6;</code>
     */
    protected $message_text = '';
    /**
     *?
     *
     * Generated from protobuf field <code>uint32 sender_uid = 10;</code>
     */
    protected $sender_uid = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $to_uid
     *          ?
     *     @type \CDGPKIJBFDK $lekpnlapced
     *     @type int $extra_id
     *     @type int $message_type
     *     @type int $chat_type
     *     @type string $message_text
     *     @type int $sender_uid
     *          ?
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     *?
     *
     * Generated from protobuf field <code>uint32 to_uid = 12;</code>
     * @return int
     */
    public function getToUid()
    {
        return $this->to_uid;
    }

    /**
     *?
     *
     * Generated from protobuf field <code>uint32 to_uid = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setToUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->to_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CDGPKIJBFDK lekpnlapced = 11;</code>
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
     * Generated from protobuf field <code>.CDGPKIJBFDK lekpnlapced = 11;</code>
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
     * Generated from protobuf field <code>uint32 extra_id = 15;</code>
     * @return int
     */
    public function getExtraId()
    {
        return $this->extra_id;
    }

    /**
     * Generated from protobuf field <code>uint32 extra_id = 15;</code>
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
     * Generated from protobuf field <code>.MsgType message_type = 8;</code>
     * @return int
     */
    public function getMessageType()
    {
        return $this->message_type;
    }

    /**
     * Generated from protobuf field <code>.MsgType message_type = 8;</code>
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
     * Generated from protobuf field <code>.ChatType chat_type = 2;</code>
     * @return int
     */
    public function getChatType()
    {
        return $this->chat_type;
    }

    /**
     * Generated from protobuf field <code>.ChatType chat_type = 2;</code>
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
     * Generated from protobuf field <code>string message_text = 6;</code>
     * @return string
     */
    public function getMessageText()
    {
        return $this->message_text;
    }

    /**
     * Generated from protobuf field <code>string message_text = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageText($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_text = $var;

        return $this;
    }

    /**
     *?
     *
     * Generated from protobuf field <code>uint32 sender_uid = 10;</code>
     * @return int
     */
    public function getSenderUid()
    {
        return $this->sender_uid;
    }

    /**
     *?
     *
     * Generated from protobuf field <code>uint32 sender_uid = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setSenderUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->sender_uid = $var;

        return $this;
    }

}

