<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DNLGHJICEAI</code>
 */
class DNLGHJICEAI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 battle_id = 9;</code>
     */
    protected $battle_id = 0;
    /**
     * Generated from protobuf field <code>repeated .FFMHCHHHGBA avatar_list = 1;</code>
     */
    private $avatar_list;
    /**
     * Generated from protobuf field <code>repeated uint32 buff_list = 8;</code>
     */
    private $buff_list;
    /**
     * Generated from protobuf field <code>uint32 AIHBDNKBNMH = 12;</code>
     */
    protected $AIHBDNKBNMH = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $battle_id
     *     @type array<\FFMHCHHHGBA>|\Google\Protobuf\Internal\RepeatedField $avatar_list
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $buff_list
     *     @type int $AIHBDNKBNMH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 battle_id = 9;</code>
     * @return int
     */
    public function getBattleId()
    {
        return $this->battle_id;
    }

    /**
     * Generated from protobuf field <code>uint32 battle_id = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setBattleId($var)
    {
        GPBUtil::checkUint32($var);
        $this->battle_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .FFMHCHHHGBA avatar_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarList()
    {
        return $this->avatar_list;
    }

    /**
     * Generated from protobuf field <code>repeated .FFMHCHHHGBA avatar_list = 1;</code>
     * @param array<\FFMHCHHHGBA>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FFMHCHHHGBA::class);
        $this->avatar_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 buff_list = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuffList()
    {
        return $this->buff_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 buff_list = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuffList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->buff_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AIHBDNKBNMH = 12;</code>
     * @return int
     */
    public function getAIHBDNKBNMH()
    {
        return $this->AIHBDNKBNMH;
    }

    /**
     * Generated from protobuf field <code>uint32 AIHBDNKBNMH = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setAIHBDNKBNMH($var)
    {
        GPBUtil::checkUint32($var);
        $this->AIHBDNKBNMH = $var;

        return $this;
    }

}
