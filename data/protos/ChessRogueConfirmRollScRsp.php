<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BBPACEPLIBK (5514)
 *
 * Generated from protobuf message <code>ChessRogueConfirmRollScRsp</code>
 */
class ChessRogueConfirmRollScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.ChessRogueDiceInfo rogue_dice_info = 6;</code>
     */
    protected $rogue_dice_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \ChessRogueDiceInfo $rogue_dice_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
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
     * Generated from protobuf field <code>.ChessRogueDiceInfo rogue_dice_info = 6;</code>
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
     * Generated from protobuf field <code>.ChessRogueDiceInfo rogue_dice_info = 6;</code>
     * @param \ChessRogueDiceInfo $var
     * @return $this
     */
    public function setRogueDiceInfo($var)
    {
        GPBUtil::checkMessage($var, \ChessRogueDiceInfo::class);
        $this->rogue_dice_info = $var;

        return $this;
    }

}

