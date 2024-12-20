<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FBJDDOJHKKK (5509)
 *
 * Generated from protobuf message <code>ChessRogueGiveUpRollScRsp</code>
 */
class ChessRogueGiveUpRollScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ChessRogueDiceInfo rogue_dice_info = 7;</code>
     */
    protected $rogue_dice_info = null;
    /**
     * Generated from protobuf field <code>.ItemList icmjokihcjj = 1;</code>
     */
    protected $icmjokihcjj = null;
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
     *     @type \ChessRogueDiceInfo $rogue_dice_info
     *     @type \ItemList $icmjokihcjj
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ChessRogueDiceInfo rogue_dice_info = 7;</code>
     * @return \ChessRogueDiceInfo|null
     */
    public function getRogueDiceInfo()
    {
        return $this->rogue_dice_info;
    }

    public function hasRogueDiceInfo()
    {
        return isset($this->rogue_dice_info);
    }

    public function clearRogueDiceInfo()
    {
        unset($this->rogue_dice_info);
    }

    /**
     * Generated from protobuf field <code>.ChessRogueDiceInfo rogue_dice_info = 7;</code>
     * @param \ChessRogueDiceInfo $var
     * @return $this
     */
    public function setRogueDiceInfo($var)
    {
        GPBUtil::checkMessage($var, \ChessRogueDiceInfo::class);
        $this->rogue_dice_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList icmjokihcjj = 1;</code>
     * @return \ItemList|null
     */
    public function getIcmjokihcjj()
    {
        return $this->icmjokihcjj;
    }

    public function hasIcmjokihcjj()
    {
        return isset($this->icmjokihcjj);
    }

    public function clearIcmjokihcjj()
    {
        unset($this->icmjokihcjj);
    }

    /**
     * Generated from protobuf field <code>.ItemList icmjokihcjj = 1;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setIcmjokihcjj($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->icmjokihcjj = $var;

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

