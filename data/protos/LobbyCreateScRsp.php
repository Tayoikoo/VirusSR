<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DAAIMMBENHK (7400)
 *
 * Generated from protobuf message <code>LobbyCreateScRsp</code>
 */
class LobbyCreateScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 room_id = 11;</code>
     */
    protected $room_id = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .GDOHNMGABGE lhifalkbalm = 3;</code>
     */
    private $lhifalkbalm;
    /**
     * Generated from protobuf field <code>.FightGameMode mggmpkighbm = 12;</code>
     */
    protected $mggmpkighbm = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $room_id
     *     @type int $retcode
     *     @type array<\GDOHNMGABGE>|\Google\Protobuf\Internal\RepeatedField $lhifalkbalm
     *     @type int $mggmpkighbm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 room_id = 11;</code>
     * @return int|string
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * Generated from protobuf field <code>uint64 room_id = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkUint64($var);
        $this->room_id = $var;

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
     * Generated from protobuf field <code>repeated .GDOHNMGABGE lhifalkbalm = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLhifalkbalm()
    {
        return $this->lhifalkbalm;
    }

    /**
     * Generated from protobuf field <code>repeated .GDOHNMGABGE lhifalkbalm = 3;</code>
     * @param array<\GDOHNMGABGE>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLhifalkbalm($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \GDOHNMGABGE::class);
        $this->lhifalkbalm = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FightGameMode mggmpkighbm = 12;</code>
     * @return int
     */
    public function getMggmpkighbm()
    {
        return $this->mggmpkighbm;
    }

    /**
     * Generated from protobuf field <code>.FightGameMode mggmpkighbm = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setMggmpkighbm($var)
    {
        GPBUtil::checkEnum($var, \FightGameMode::class);
        $this->mggmpkighbm = $var;

        return $this;
    }

}

