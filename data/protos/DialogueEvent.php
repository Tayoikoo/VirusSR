<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DialogueEvent</code>
 */
class DialogueEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 talk_dialogue_id = 11;</code>
     */
    protected $talk_dialogue_id = 0;
    /**
     * Generated from protobuf field <code>uint32 aeon_talk_id = 9;</code>
     */
    protected $aeon_talk_id = 0;
    /**
     * Generated from protobuf field <code>uint32 game_mode_type = 12;</code>
     */
    protected $game_mode_type = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 npcgbahogfa = 8;</code>
     */
    private $npcgbahogfa;
    /**
     * Generated from protobuf field <code>repeated .RogueDialogueEventParam dialogue_event_param_list = 6;</code>
     */
    private $dialogue_event_param_list;
    /**
     * Generated from protobuf field <code>uint32 event_unique_id = 15;</code>
     */
    protected $event_unique_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $talk_dialogue_id
     *     @type int $aeon_talk_id
     *     @type int $game_mode_type
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $npcgbahogfa
     *     @type array<\RogueDialogueEventParam>|\Google\Protobuf\Internal\RepeatedField $dialogue_event_param_list
     *     @type int $event_unique_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 talk_dialogue_id = 11;</code>
     * @return int
     */
    public function getTalkDialogueId()
    {
        return $this->talk_dialogue_id;
    }

    /**
     * Generated from protobuf field <code>uint32 talk_dialogue_id = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setTalkDialogueId($var)
    {
        GPBUtil::checkUint32($var);
        $this->talk_dialogue_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 aeon_talk_id = 9;</code>
     * @return int
     */
    public function getAeonTalkId()
    {
        return $this->aeon_talk_id;
    }

    /**
     * Generated from protobuf field <code>uint32 aeon_talk_id = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setAeonTalkId($var)
    {
        GPBUtil::checkUint32($var);
        $this->aeon_talk_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 game_mode_type = 12;</code>
     * @return int
     */
    public function getGameModeType()
    {
        return $this->game_mode_type;
    }

    /**
     * Generated from protobuf field <code>uint32 game_mode_type = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setGameModeType($var)
    {
        GPBUtil::checkUint32($var);
        $this->game_mode_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 npcgbahogfa = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNpcgbahogfa()
    {
        return $this->npcgbahogfa;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 npcgbahogfa = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNpcgbahogfa($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->npcgbahogfa = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueDialogueEventParam dialogue_event_param_list = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDialogueEventParamList()
    {
        return $this->dialogue_event_param_list;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueDialogueEventParam dialogue_event_param_list = 6;</code>
     * @param array<\RogueDialogueEventParam>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDialogueEventParamList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RogueDialogueEventParam::class);
        $this->dialogue_event_param_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 event_unique_id = 15;</code>
     * @return int
     */
    public function getEventUniqueId()
    {
        return $this->event_unique_id;
    }

    /**
     * Generated from protobuf field <code>uint32 event_unique_id = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setEventUniqueId($var)
    {
        GPBUtil::checkUint32($var);
        $this->event_unique_id = $var;

        return $this;
    }

}
