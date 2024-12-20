<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LEAIMLAGBLK (5411)
 *
 * Generated from protobuf message <code>ChessRogueCheatRollScRsp</code>
 */
class ChessRogueCheatRollScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ChessRogueDiceInfo rogue_dice_info = 10;</code>
     */
    protected $rogue_dice_info = null;
    /**
     * Generated from protobuf field <code>uint32 lojfkmkmmlc = 1;</code>
     */
    protected $lojfkmkmmlc = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 8;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 bdmjajmffhm = 7;</code>
     */
    protected $bdmjajmffhm = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ChessRogueDiceInfo $rogue_dice_info
     *     @type int $lojfkmkmmlc
     *     @type int $retcode
     *     @type int $bdmjajmffhm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ChessRogueDiceInfo rogue_dice_info = 10;</code>
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
     * Generated from protobuf field <code>.ChessRogueDiceInfo rogue_dice_info = 10;</code>
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
     * Generated from protobuf field <code>uint32 lojfkmkmmlc = 1;</code>
     * @return int
     */
    public function getLojfkmkmmlc()
    {
        return $this->lojfkmkmmlc;
    }

    /**
     * Generated from protobuf field <code>uint32 lojfkmkmmlc = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLojfkmkmmlc($var)
    {
        GPBUtil::checkUint32($var);
        $this->lojfkmkmmlc = $var;

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
     * Generated from protobuf field <code>uint32 bdmjajmffhm = 7;</code>
     * @return int
     */
    public function getBdmjajmffhm()
    {
        return $this->bdmjajmffhm;
    }

    /**
     * Generated from protobuf field <code>uint32 bdmjajmffhm = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setBdmjajmffhm($var)
    {
        GPBUtil::checkUint32($var);
        $this->bdmjajmffhm = $var;

        return $this;
    }

}
