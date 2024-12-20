<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PropExtraInfo</code>
 */
class PropExtraInfo extends \Google\Protobuf\Internal\Message
{
    protected $infoCase_;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \PropRogueInfo $RogueInfo
     *     @type \PropAeonInfo $AeonInfo
     *     @type \PropChessRogueInfo $ChessRogueInfo
     *     @type \RogueTournDoorInfo $RogueTournDoorInfo
     *     @type \RogueTournWorkbenchInfo $RogueTournWorkbenchInfo
     *     @type \workbench_idRogueGambleMachineInfo $RogueGambleMachineInfo
     *     @type \RogueCurseChestInfo $RogueCurseChestInfo
     *     @type \RogueMagicDoorInfo $RogueMagicDoorInfo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.PropRogueInfo RogueInfo = 15;</code>
     * @return \PropRogueInfo|null
     */
    public function getRogueInfo()
    {
        return $this->readOneof(15);
    }

    public function hasRogueInfo()
    {
        return $this->hasOneof(15);
    }

    /**
     * Generated from protobuf field <code>.PropRogueInfo RogueInfo = 15;</code>
     * @param \PropRogueInfo $var
     * @return $this
     */
    public function setRogueInfo($var)
    {
        GPBUtil::checkMessage($var, \PropRogueInfo::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PropAeonInfo AeonInfo = 8;</code>
     * @return \PropAeonInfo|null
     */
    public function getAeonInfo()
    {
        return $this->readOneof(8);
    }

    public function hasAeonInfo()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.PropAeonInfo AeonInfo = 8;</code>
     * @param \PropAeonInfo $var
     * @return $this
     */
    public function setAeonInfo($var)
    {
        GPBUtil::checkMessage($var, \PropAeonInfo::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PropChessRogueInfo ChessRogueInfo = 6;</code>
     * @return \PropChessRogueInfo|null
     */
    public function getChessRogueInfo()
    {
        return $this->readOneof(6);
    }

    public function hasChessRogueInfo()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.PropChessRogueInfo ChessRogueInfo = 6;</code>
     * @param \PropChessRogueInfo $var
     * @return $this
     */
    public function setChessRogueInfo($var)
    {
        GPBUtil::checkMessage($var, \PropChessRogueInfo::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RogueTournDoorInfo RogueTournDoorInfo = 2;</code>
     * @return \RogueTournDoorInfo|null
     */
    public function getRogueTournDoorInfo()
    {
        return $this->readOneof(2);
    }

    public function hasRogueTournDoorInfo()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.RogueTournDoorInfo RogueTournDoorInfo = 2;</code>
     * @param \RogueTournDoorInfo $var
     * @return $this
     */
    public function setRogueTournDoorInfo($var)
    {
        GPBUtil::checkMessage($var, \RogueTournDoorInfo::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RogueTournWorkbenchInfo RogueTournWorkbenchInfo = 11;</code>
     * @return \RogueTournWorkbenchInfo|null
     */
    public function getRogueTournWorkbenchInfo()
    {
        return $this->readOneof(11);
    }

    public function hasRogueTournWorkbenchInfo()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.RogueTournWorkbenchInfo RogueTournWorkbenchInfo = 11;</code>
     * @param \RogueTournWorkbenchInfo $var
     * @return $this
     */
    public function setRogueTournWorkbenchInfo($var)
    {
        GPBUtil::checkMessage($var, \RogueTournWorkbenchInfo::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.workbench_idRogueGambleMachineInfo RogueGambleMachineInfo = 1;</code>
     * @return \workbench_idRogueGambleMachineInfo|null
     */
    public function getRogueGambleMachineInfo()
    {
        return $this->readOneof(1);
    }

    public function hasRogueGambleMachineInfo()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.workbench_idRogueGambleMachineInfo RogueGambleMachineInfo = 1;</code>
     * @param \workbench_idRogueGambleMachineInfo $var
     * @return $this
     */
    public function setRogueGambleMachineInfo($var)
    {
        GPBUtil::checkMessage($var, \workbench_idRogueGambleMachineInfo::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RogueCurseChestInfo RogueCurseChestInfo = 9;</code>
     * @return \RogueCurseChestInfo|null
     */
    public function getRogueCurseChestInfo()
    {
        return $this->readOneof(9);
    }

    public function hasRogueCurseChestInfo()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>.RogueCurseChestInfo RogueCurseChestInfo = 9;</code>
     * @param \RogueCurseChestInfo $var
     * @return $this
     */
    public function setRogueCurseChestInfo($var)
    {
        GPBUtil::checkMessage($var, \RogueCurseChestInfo::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.RogueMagicDoorInfo RogueMagicDoorInfo = 14;</code>
     * @return \RogueMagicDoorInfo|null
     */
    public function getRogueMagicDoorInfo()
    {
        return $this->readOneof(14);
    }

    public function hasRogueMagicDoorInfo()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.RogueMagicDoorInfo RogueMagicDoorInfo = 14;</code>
     * @param \RogueMagicDoorInfo $var
     * @return $this
     */
    public function setRogueMagicDoorInfo($var)
    {
        GPBUtil::checkMessage($var, \RogueMagicDoorInfo::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getInfoCase()
    {
        return $this->whichOneof("infoCase_");
    }

}

